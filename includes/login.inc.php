<?php

if (isset($_POST['submitLogin'])){
    $email = $_POST['email'];
    $password = $_POST['pass'];

    require_once "dbh.inc.php";
    require_once "functions.inc.php";
     
    
loginUser($conn,$email,$password);


}else{
    header("location: ../login.php");
}