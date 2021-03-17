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
  'furnished' => $row['furniture']
  ); 
}  

$getQuery2 = "SELECT * from renovations WHERE renovationID=$id;";
$setQuery2 = mysqli_query($conn, $getQuery2);

$searchRen = array(); 

while ($row = mysqli_fetch_assoc($setQuery2)) 
{

  $searchRen[] = array(
  
  'renID'=> $row['renovationID'],
  'propID' => $row['propertyID'],
  'bfrPath' => $row['beforePicturesPath'],
  'aftrPath' => $row['afterPicturesPath'],
  'desc' => $row['description']
  ); 
}  
