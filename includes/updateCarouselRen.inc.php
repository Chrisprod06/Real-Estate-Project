<?php

include_once "includes/renovationSingle.inc.php";
include "configLanguage.inc.php";
foreach ($searchRen as $row){
$id = $row['renID'];}
$sql = "SELECT * FROM multimediarenovations WHERE renovationID = $id;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
    while($row = mysqli_fetch_assoc($result)){
     
    if($row['beforePhoto1']  == NULL){
      continue;
    }
    else{
    echo " <div class='carousel-item-a'> <img src= '{$row['beforePhoto1']}' width='100' height='550' alt=''> <div class='text-block'> <h>".$lang['before']."</h> </div> </div>";
    }
    if($row['afterPhoto1']  == NULL){
      continue;
    }
    else{
    echo " <div class='carousel-item-a'> <img src= '{$row['afterPhoto1']}' width='100' height='550' alt=''> <div class='text-block'> <h>".$lang['after']."</h> </div> </div>";
    }
    if($row['beforePhoto2']  == NULL){
      continue;
    }
    else{
    echo " <div class='carousel-item-a'> <img src= '{$row['beforePhoto2']}' width='100' height='550' alt=''> <div class='text-block'> <h>".$lang['before']."</h> </div> </div>";
    }
    if($row['afterPhoto2']  == NULL){
      continue;
    }
    else{
    echo " <div class='carousel-item-a'> <img src= '{$row['afterPhoto2']}' width='100' height='550' alt=''> <div class='text-block'> <h>".$lang['after']."</h> </div> </div>";
    }
    if($row['beforePhoto3']  == NULL){
      continue;
    }
    else{
    echo " <div class='carousel-item-a'> <img src= '{$row['beforePhoto3']}' width='100' height='550' alt=''> <div class='text-block'> <h>".$lang['before']."</h> </div> </div>";
    }
    if($row['afterPhoto3']  == NULL){
      continue;
    }
    else{
    echo " <div class='carousel-item-a'> <img src= '{$row['afterPhoto3']}' width='100' height='550' alt=''> <div class='text-block'> <h>".$lang['after']."</h> </div> </div>";
    }
    if($row['beforePhoto4']  == NULL){
      continue;
    }
    else{
    echo " <div class='carousel-item-a'> <img src= '{$row['beforePhoto4']}' width='100' height='550' alt=''> <div class='text-block'> <h>".$lang['before']."</h> </div> </div>";
    }
    if($row['afterPhoto4']  == NULL){
      continue;
    }
    else{
    echo " <div class='carousel-item-a'> <img src= '{$row['afterPhoto4']}' width='100' height='550' alt=''> <div class='text-block'> <h>".$lang['after']."</h> </div> </div>";
    }
     
     
        }
      }
      

      