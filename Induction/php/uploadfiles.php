<?php
require 'google-api/apiClient.php';
require 'google-api/contrib/apiOauth2Service.php';
require 'google-api/contrib/apiDriveService.php';
$pdfFile = 'test.pdf';
// API Console: https://code.google.com/apis/console/
// Create an API project ("web applications") and put the client id and client secret in config.ini.
// Set up the Drive SDK in the API console.
// Create a Chrome extension, set the "container" and "api_console_project_id" parameters, and install it.
$config = parse_ini_file('config.ini'); // client_id, client_secret
// initialise the client
$client = new apiClient();
$client->setUseObjects(true);
$client->setAuthClass('apiOAuth2');
$client->setScopes(array('https://www.googleapis.com/auth/drive.file'));
$client->setClientId($config['client_id']);
$client->setClientSecret($config['client_secret']);
$client->setRedirectUri($config['client_uri']);
$client->setAccessToken(authenticate($client));
// initialise the Google Drive service
$service = new apiDriveService($client);
// create and upload a new Google Drive file, including the data
try {
	$file = new DriveFile;
	$file->setTitle(basename($pdfFile));
	$file->setMimeType('application/pdf');

	$result = $service->files->insert($file, array('data' => file_get_contents($pdfFile), 'mimeType' => 'application/pdf'));
}
catch (Exception $e) {
	print $e->getMessage();
}
print_r($result);
function authenticate($client, $file = 'token.json'){
	if (file_exists($file)) return file_get_contents($file);
	$_GET['code'] = ''; // insert the verification code here
	// print the authentication URL
	if (!$_GET['code']) {
		exit($client->createAuthUrl(array('https://www.googleapis.com/auth/drive.file')) . "\n");
	}
	file_put_contents($file, $client->authenticate());
	exit('Authentication saved to token.json - now run this script again.');
}
