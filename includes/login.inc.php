<?php

if (isset($_SESSION['submitLogin'])){
    $email = $_POST['email'];
    $password = $_POST['pass'];

    require_once "dbh.inc.php";
    require_once "functions.inc.php";
    //error handlers

    //
    loginUser($conn,$email,$password);


}else{
    header("location: ../login.php");
}