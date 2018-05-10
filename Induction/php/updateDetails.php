<html lang="en-gb" dir="ltr">
<body>

<?php
session_start();
include("functions.php");
include("db_config.php");

$userid2 = $_POST['userid2'];

if (isset($userid2)) {
    $db = createConnection();
    $forename = $_POST['forename'];
    $surname = $_POST['surname'];
    $addressline1 = $_POST['addressline1'];
    $addressline2 = $_POST['addressline2'];
    $town = $_POST['town'];
    $postcode = $_POST['postcode'];
    $telephone = $_POST['telephone'];
    $mobilephone = $_POST['mobilephone'];

    $updatesql = "update users set forename=?,surname=?,addressline1=?,addressline2=?,town=?,postcode=?,telephone=?, mobilephone=? where userid=?";
    $doupdate = $db->prepare($updatesql);
    $doupdate->bind_param("ssssssssi", $forename, $surname, $addressline1, $addressline2, $town, $postcode, $telephone, $mobilephone, $userid2);
    $doupdate->execute();
    $doupdate->close();

    header('Location: detailsUpdated.php');

} else {

    echo "<p>Some parameters are missing, cannot update database</p>";

}
?>
</body>
</html>
