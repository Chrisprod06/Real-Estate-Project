<?php
//session_start();
require_once 'includes/dbh.inc.php';


$id =  $_GET['id'];
$getQuery = "SELECT * from properties WHERE propertyID=$id;  ";
$setQuery = mysqli_query($conn, $getQuery);

$property = array();

while ($row = mysqli_fetch_assoc($setQuery)) 
{

  $property[] = array(
  
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
