<?php
require_once '../API/google-api-php-client/src/Google/autoload.php';

$client = new Google_Client();
$client->addScope(Google_Service_Drive::DRIVE);
$client->useApplicationDefaultCredentials();

$service = new Google_Service_Drive($client);
$fileId = "https://drive.google.com/drive/folders/13NpNXk5vDNhEsj4I8vrrjN8lNuPZSc3A?usp=sharing"; // Google File ID
$response = $driveService->files->get($fileId, array('alt' => 'media'));
?>
