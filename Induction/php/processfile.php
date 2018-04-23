<?php
require_once '../API/google-api-php-client/src/Google/autoload.php';

putenv('GOOGLE_APPLICATION_CREDENTIALS=/path/to/service/account/key.json');
$client = new Google_Client();
$client->addScope(Google_Service_Drive::DRIVE);
$client->useApplicationDefaultCredentials();

$service = new Google_Service_Drive($client);

$fileId = "13NpNXk5vDNhEsj4I8vrrjN8lNuPZSc3A?usp=sharing"; // Google File ID
$content = $service->files->get($fileId, array("alt" => "media"));

// Open file handle for output.

$outHandle = fopen("/path/to/destination", "w+");

// Until we have reached the EOF, read 1024 bytes at a time and write to the output file handle.

while (!$content->getBody()->eof()) {
        fwrite($outHandle, $content->getBody()->read(1024));
}

// Close output file handle.

fclose($outHandle);
echo "Done.\n"

?>
