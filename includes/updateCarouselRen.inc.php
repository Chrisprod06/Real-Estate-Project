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
    echo " <div class='carousel-item-a'>
     <div id='aics-autostart'>
    <div class='images'>
      <div class='image-rgt' data-src='{$row['beforePhoto1']}'  ></div>
      <div class='image-lft' data-src='{$row['afterPhoto1']}'  ></div>
    </div>
    <div class='ui'>
      <a class='button-rgt' alt=''>After</a>
      <a class='button-lft' alt=''>Before</a>
    </div>
    </div>
  </div>";
    } 
    if($row['afterPhoto2']  == NULL){
      continue;
    }
    else{
     echo " <div class='carousel-item-b'>
    <div id='aics-autostart'>
   <div class='images'>
     <div class='image-rgt' data-src='{$row['beforePhoto4']}' ></div>
     <div class='image-lft' data-src='{$row['afterPhoto4']}' ></div>
   </div>
   <div class='ui'>
     <a class='button-rgt' alt=''>After</a>
     <a class='button-lft' alt=''>Before</a>
   </div>
   </div>
 </div>";
    }
   /* if($row['beforePhoto2']  == NULL){
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
    */
     
     
        }
      }
      

      