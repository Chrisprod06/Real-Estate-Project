<?php

include_once "dbh.inc.php";
$id = $_GET['id'];
$sql = "SELECT * FROM multimediaproperties WHERE propertyID = $id;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
  while ($row = mysqli_fetch_assoc($result)) {

    if($row['photo1']  == NULL){
      continue;
    }
    else{
    echo " <div class='carousel-item-a'> <img src= '{$row['photo1']}' width='100' height='550' alt=''> <div class='text-block'></div> </div>";
    }
    if($row['photo2']  == NULL){
      continue;
    }
    else{
    echo " <div class='carousel-item-a'> <img src= '{$row['photo2']}' width='100' height='550' alt=''> <div class='text-block'></div> </div>";
    }
    if($row['photo3']  == NULL){
      continue;
    }
    else{
    echo " <div class='carousel-item-a'> <img src= '{$row['photo3']}' width='100' height='550' alt=''> <div class='text-block'></div> </div>";
    }
    if($row['photo4']  == NULL){
      continue;
    }
    else{
    echo " <div class='carousel-item-a'> <img src= '{$row['photo4']}' width='100' height='550' alt=''> <div class='text-block'></div> </div>";
    }
    if($row['photo5']  == NULL){
      continue;
    }
    else{
    echo " <div class='carousel-item-a'> <img src= '{$row['photo5']}' width='100' height='550' alt=''> <div class='text-block'></div> </div>";
    }
    if($row['photo6']  == NULL){
      continue;
    }
    else{
    echo " <div class='carousel-item-a'> <img src= '{$row['photo6']}' width='100' height='550' alt=''> <div class='text-block'></div> </div>";
    }
    if($row['photo7']  == NULL){
      continue;
    }
    else{
    echo " <div class='carousel-item-a'> <img src= '{$row['photo7']}' width='100' height='550' alt=''> <div class='text-block'></div> </div>";
    }
    if($row['photo8']  == NULL){
      continue;
    }
    else{
    echo " <div class='carousel-item-a'> <img src= '{$row['photo8']}' width='100' height='550' alt=''> <div class='text-block'></div> </div>";
    }
    if($row['photo9']  == NULL){
      continue;
    }
    else{
    echo " <div class='carousel-item-a'> <img src= '{$row['photo9']}' width='100' height='550' alt=''> <div class='text-block'></div> </div>";
    }
    if($row['photo10']  == NULL){
      continue;
    }
    else{
    echo " <div class='carousel-item-a'> <img src= '{$row['photo10']}' width='100' height='550' alt=''> <div class='text-block'></div> </div>";
    }

  }
}
