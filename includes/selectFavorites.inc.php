<?php
include_once "dbh.inc.php";

$userID =  $_SESSION['userID'];
$propertyID = $_GET['id'];

//In the statement use the names of the variables from the database
$getQuery = "SELECT * from favorites WHERE propertyID=$propertyID AND userID=$userID;";
$setQuery = mysqli_query($conn, $getQuery);

$searchFav = array(); 

while ($row = mysqli_fetch_assoc($setQuery)) 
{
  $searchFav[] = array(
  
  $row['propertyID']
 ); 
}


if (count($searchFav,0)== '0'){
  echo '<a href="includes/addFavorites.inc.php?id='.$propertyID.'" class="d-flex justify-content-between">
        <strong>Add to Favorites</strong>
        </a>';
}
else{
     echo '<a href="includes/deleteFavorites.inc.php?id='.$propertyID.'" class="d-flex justify-content-between">
     <strong>Delete from Favorites</strong>
   </a>';
}

unset($searchFav);

