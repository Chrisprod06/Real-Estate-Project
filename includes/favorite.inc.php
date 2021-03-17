<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Get variables
    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    header('Location: ../favorites.php');
    exit();

} 

    else {
    header("Location: ../index.php");
    exit();
}
