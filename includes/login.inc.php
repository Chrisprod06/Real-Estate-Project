<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = $_POST['email'];
    $password = $_POST['pass'];

    require_once "dbh.inc.php";
    require_once "functions.inc.php";
     
    
loginUser($conn,$email,$password);


}else{
    header("location: ../index.php");
}