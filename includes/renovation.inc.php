<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Get variables

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';
    
    $getQuery = "SELECT * from properties ";
    $setQuery = mysqli_query($conn, $getQuery);

    $searchRenovations = array();

    while ($row = mysqli_fetch_assoc($setQuery)) 
    {

        $searchRenovations[] = array(
        
        'propID'=> $row['propertyID'],
        'city' => $row['town'],
        'addr' => $row['address'],
        'categ' => $row['category'],
        'totPrice' => $row['totalPrice'],
        'area' => $row['squarem'],
        'baths' => $row['bathrooms'],
        'beds' => $row['bedrooms'],
        'furnished' => $row['furniture']
        );
        
    }

    $_SESSION['renovations'] = $searchRenovations;
    header('Location: ../renovationGrid.php');
    exit();

} 

    else {
    header("Location: ../index.php");
    exit();
}
