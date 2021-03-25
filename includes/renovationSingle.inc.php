<?php
//session_start();
require_once 'includes/dbh.inc.php';


$id =  $_GET['id'];
$getQuery1 = "SELECT * from properties WHERE propertyID=$id;  ";
$setQuery1 = mysqli_query($conn, $getQuery1);

$searchProp = array();

while ($row = mysqli_fetch_assoc($setQuery1)) 
{

  $searchProp[] = array(
  
  'propID'=> $row['propertyID'],
  'city' => $row['town'],
  'addr' => $row['address'],
  'categ' => $row['category'],
  'totPrice' => $row['totalPrice'],
  'area' => $row['squarem'],
  'baths' => $row['bathrooms'],
  'beds' => $row['bedrooms'],
  'furnished' => $row['furniture'],
  'types' => $row['type'],
  'garage' => $row['parking'],
  'dateBuild' => $row['dateOfBuild'],
  'dateAvail' => $row['availableFrom'],
  'floors' => $row['floor'],
  'heat' => $row['heating'],
  'priceSqm' => $row['pricePerSqm'],
  'desc' => $row['description'],
  'amen' => $row['amenities']
  ); 
}  

$getQuery2 = "SELECT * from renovations WHERE propertyID=$id;";
$setQuery2 = mysqli_query($conn, $getQuery2);

$searchRen = array(); 

while ($row = mysqli_fetch_assoc($setQuery2)) 
{

  $searchRen[] = array(
  
  'renID'=> $row['renovationID'],
  'propID' => $row['propertyID'],
  'renDesc' => $row['description']
  ); 
}  
