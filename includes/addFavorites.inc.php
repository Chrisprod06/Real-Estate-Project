<?php
session_start();
include_once "dbh.inc.php";

$userID =  $_SESSION['userID'];
$propertyID = $_GET['id'];

//In the statement use the names of the variables from the database
$sql = 'INSERT INTO favorites (userID,propertyID) VALUES(?, ?);';
$stmt = mysqli_stmt_init($conn);
mysqli_stmt_prepare($stmt, $sql);
//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
mysqli_stmt_bind_param($stmt, 'ii', $userID,$propertyID); //bind values and execute insert query
mysqli_stmt_execute($stmt);

header('location: ' . $_SESSION['lastVisitedPage'].'?id='.$propertyID.'');
exit();