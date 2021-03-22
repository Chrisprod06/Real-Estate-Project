<?php

/* echo "  <div class='carousel-item-a'> <img src= '{$row['photo1']}' style='width:100%; alt='' > </div>
                <div class='carousel-item-b'> <img src= '{$row['photo2']}'  style='width:100%; alt=''> </div>
               <div class='carousel-item-c'> <img src= '{$row['photo3']}'  style='width:100%; alt=''> </div> "; */

include_once "dbh.inc.php";
$id = $_GET['id'];
$sql = "SELECT * FROM multimedia WHERE propertyID = $id;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
    while($row = mysqli_fetch_assoc($result)){

     echo " <div class='carousel-item-a'>
     
     <div id='aics-autostart'>
  <div class='images'>
    <div class='image-rgt' data-src='{$row['photo1']}' style='width:30px;'></div>
    <div class='image-lft' data-src='{$row['photo2']}' style='width:30px;'></div>
  </div>
  <div class='ui'>
    <a class='button-rgt' alt=''>After</a>
    <a class='button-lft' alt=''>Before</a>
  </div>
</div>
        
     
         </div>
     ";
     
        }
      }
      

      