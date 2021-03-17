<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Get variables
    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    $getQuery = "SELECT * from renovations where propertyID = (select propertyID from properties);";
    $setQuery = mysqli_query($conn, $getQuery);
    
    $searchRenovations = array();

    while ($row = mysqli_fetch_assoc($setQuery)) 
    {

        $searchRenovations[] = array(
            'renID' => $row['renovationID'],
            'propID' => $row['propertyID']
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
