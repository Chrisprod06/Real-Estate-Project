<?php

if(isset($_POST['submitSearch'])){
    //Get variables
    $type = $_POST['type'];
    $category = $_POST['category'];
    $city = $_POST['city'];
    $region = $_POST['region'];
    $sqm = $_POST['squarem'];
    $bedrooms = $_POST['bedrooms'];
    $bathrooms = $_POST['bathrooms'];
    $parking = $_POST['parking'];
    $furniture = $_POST['furniture'];
    $maxYears = $_POST['maxYear'];
    $maxRent = $_POST['maxRent'];
    $maxPrice = $_POST['maxPrice'];


    //Get data from database

    $sql = 
    
}else{
    header("Location: ../index.php");
    exit();
}