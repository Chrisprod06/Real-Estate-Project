<?php

include_once "dbh.inc.php";
$id = $_GET['id'];
$sql = "SELECT * FROM multimedia WHERE propertyID = $id;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
    while($row = mysqli_fetch_assoc($result)){
        
        echo "  <div class='carousel-item-a'> <img src= '{$row['photo1']}' alt=''> </div>
                <div class='carousel-item-b'> <img src= '{$row['photo2']}' alt=''> </div>
                <div class='carousel-item-c'> <img src= '{$row['photo3']}' alt=''> </div> ";

     
        }
      }
      