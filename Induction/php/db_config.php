<?php

$DB_host = "localhost";
$DB_user = "msiDB";
$DB_pass = "dn9Qr3_C4Swgsyms";
$DB_name = "inductionDB";
//Connect with database
 try
 {
     $DBcon = new PDO("mysql:host={$DB_host};dbname={$DB_name}",$DB_user,$DB_pass);
     $DBcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 }
 catch(PDOException $e)
 {
     echo "ERROR : ".$e->getMessage();
 }

?>
