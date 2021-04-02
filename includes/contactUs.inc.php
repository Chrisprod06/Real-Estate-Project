<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    session_start();
    $userID = $_SESSION['userID'];
    $firstname =$_SESSION['firstname'];
    $lastname = $_SESSION['lastname'];
    $telephone = $_SESSION['telephone'];
    $emailFrom = $_SESSION['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    //Function to send email
    sendEmail($userID,$firstname,$lastname,$telephone,$emailFrom,$subject,$message);
    //Function to insert inquiry data i7n database
    addContactUsInquiry($conn,$userID,$subject,$message);


}else{
    header('Location:../contact.php');
    exit();
}