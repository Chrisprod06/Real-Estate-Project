<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    session_start();
   $propertyID = (int)$_POST['propertyID'];
    $userID = (int)$_SESSION['userID'];
    $firstname =$_SESSION['firstname'];
    $lastname = $_SESSION['lastname'];
    $telephone = $_SESSION['telephone'];
    $emailFrom = $_SESSION['email'];
    $message = $_POST['message'];

    //Function to send email
    sendEmailInterest($userID,$firstname,$lastname,$telephone,$emailFrom,$message,$propertyID);
    //Function to insert inquiry data i7n database
    //addContactUsInquiry($conn,$userID,$subject,$message);

    $sql = 'INSERT INTO contactinterestlist(propertyID,userID,message) VALUES (?,?,?); ';
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header('Location: ../propertySingle.php?error=stmtFailed&id='.$propertyID.'');
        exit();
    }

    mysqli_stmt_bind_param($stmt, "iss", $propertyID, $userID, $message);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    exit();


}else{
    header('Location: ../propertySingle.php');
    exit();
}