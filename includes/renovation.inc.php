<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Get variables
    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    $getsearch = "SELECT * FROM renovations;";
    $ressearch = mysqli_query($conn, $getsearch);
    
    $searchRenovations = array();

    while ($row = mysqli_fetch_assoc($ressearch)) 
    {

        $searchRenovations[] = array($row['renovationID'], $row['propertyID'] );
            
    }

    $_SESSION['renovations'] = $searchRenovations;
    header('Location: ../renovationGrid.php');
    exit();

} 

    else {
    header("Location: ../index.php");
    exit();
}
