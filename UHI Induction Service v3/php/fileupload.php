<?php
/*
We are starting a session here to get the user id and the posted file information.
Sessions do NOT work on HTML pages, just php pages.
*/
session_start();
?>


<?php
include('functions.php');
$db=createConnection();

// checks for file upload, and uploads to google drive.
if(isset($_POST['filename']){ 
	POST https://www.googleapis.com/upload/drive/v2/files
  
  $fileMetadata = new Google_Service_Drive_DriveFile(array(
    'title' => 'photo.jpg'));
$content = file_get_contents('files/photo.jpg');
$file = $driveService->files->insert($fileMetadata, array(
    'data' => $content,
    'mimeType' => 'image/jpeg',
    'uploadType' => 'multipart',
    'fields' => 'id'));
printf("File ID: %s\n", $file->id);
  
  //this get is used to retrieve a list of all the files held within the google drive folder.
  GET https://www.googleapis.com/drive/v3/files
  
  
  
  
  
  
  
  
  //closes the connection to the sql database.
	$db->close();
  //if no file is found or php breaks send user back to the index.php page.
}else {
	header("location: ../index.php");
	exit();
}
?>
