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
  
    'propertyID'=> $row['propertyID'],
    'country' => $row['country'],
    'city' => $row['town'],
    'address' => $row['address'],
    'category' => $row['category'],
    'totalPrice' => $row['totalPrice'],
    'area' => $row['squarem'],
    'bathrooms' => $row['bathrooms'],
    'bedrooms' => $row['bedrooms'],
    'furniture' => $row['furniture'],
    'type' => $row['type'],
    'parking' => $row['parking'],
    'dateOfBuild' => $row['dateOfBuild'],
    'availableFrom' => $row['availableFrom'],
    'floors' => $row['floor'],
    'heating' => $row['heating'],
    'pricePerSqm' => $row['pricePerSqm'],
    'totalPrice' => $row['totalPrice'],
    'description' => $row['description'],
    'amenities' => $row['amenities']
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
