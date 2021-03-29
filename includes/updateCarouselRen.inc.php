<?php

include_once "includes/renovationSingle.inc.php";
foreach ($searchRen as $row){
$id = $row['renID'];}
$sql = "SELECT * FROM multimediarenovations WHERE renovationID = $id;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
    while($row = mysqli_fetch_assoc($result)){

     echo " 
     <div class='carousel-item-a'> <img src= '{$row['beforePhoto1']}' width='100' height='550' alt=''> <div class='text-block'> <h>Before</h> </div> </div>
     <div class='carousel-item-b'> <img src= '{$row['beforePhoto2']}' width='100' height='550' alt=''> <div class='text-block'> <h>After</h> </div> </div>
     <div class='carousel-item-c'> <img src= '{$row['beforePhoto3']}' width='100' height='550' alt=''> <div class='text-block'> <h>Before</h> </div> </div> 
     <div class='carousel-item-d'> <img src= '{$row['beforePhoto4']}' width='100' height='550' alt=''> <div class='text-block'> <h>After</h> </div></div> 
     <div class='carousel-item-e'> <img src= '{$row['beforePhoto5']}' width='100' height='550' alt=''> <div class='text-block'> <h>Before</h> </div></div> 
     <div class='carousel-item-f'> <img src= '{$row['beforePhoto6']}' width='100' height='550' alt=''> <div class='text-block'> <h>After</h> </div></div> 
     <div class='carousel-item-g'> <img src= '{$row['beforePhoto7']}' width='100' height='550' alt=''> <div class='text-block'> <h>Before</h> </div></div> 
     <div class='carousel-item-h'> <img src= '{$row['beforePhoto8']}' width='100' height='550' alt=''> <div class='text-block'> <h>After</h> </div></div>     
         
     ";
     
        }
      }
      

      