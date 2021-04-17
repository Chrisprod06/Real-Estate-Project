<?php
session_start();
$userID =$_POST['userID'];

require_once 'dbh.inc.php';

$sql = "DELETE FROM users WHERE userID = $userID";

if (mysqli_query($conn, $sql) == false) {
    header('Location ../editProfile.php?delete=unsuccessful');
    exit();
} else {
    session_unset();
    session_destroy();
    header('Location: ../index.php?delete=successful');
    exit();
}
