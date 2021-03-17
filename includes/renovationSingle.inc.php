<?php
//session_start();
require_once 'includes/dbh.inc.php';

echo 'THIS IS THE ID OF THE PROPERTY FROM THE URL: ' .$_GET['id']. ''; 

$id =  $_GET['id'];
$getQuery = "SELECT * from properties WHERE propertyID=$id;  ";
$setQuery = mysqli_query($conn, $getQuery);

$search = array();

while ($row = mysqli_fetch_assoc($setQuery)) 
{

  $search[] = array(
  
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


foreach ($search as $row){
  echo '<br>THIS IS THE ID: ' .$row['propID']. '<br>';
  echo '<br>THIS IS THE category: ' .$row['categ']. '<br>';
}
    
