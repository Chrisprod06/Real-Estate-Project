<?php

include_once "dbh.inc.php";
$id = $_GET['id'];
$sql = "SELECT * FROM multimediaproperties WHERE propertyID = $id AND photo1 IS NOT NULL;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
  while ($row = mysqli_fetch_assoc($result)) {


    echo " 
     <div class='carousel-item-a'> <img src= '{$row['photo1']}' width='100' height='550' alt=''> <div class='text-block'>  </div></div>
     <div class='carousel-item-b'> <img src= '{$row['photo2']}' width='100' height='550' alt=''> <div class='text-block'>  </div></div>
     <div class='carousel-item-c'> <img src= '{$row['photo3']}' width='100' height='550' alt=''> <div class='text-block'>  </div></div> 
     <div class='carousel-item-d'> <img src= '{$row['photo4']}' width='100' height='550' alt=''> <div class='text-block'>  </div></div> 
     <div class='carousel-item-e'> <img src= '{$row['photo5']}' width='100' height='550' alt=''> <div class='text-block'>  </div></div> 
     <div class='carousel-item-f'> <img src= '{$row['photo6']}' width='100' height='550' alt=''> <div class='text-block'>  </div></div> 
     <div class='carousel-item-g'> <img src= '{$row['photo7']}' width='100' height='550' alt=''> <div class='text-block'>  </div></div> 
     <div class='carousel-item-h'> <img src= '{$row['photo8']}' width='100' height='550' alt=''> <div class='text-block'>  </div></div>  
     <div class='carousel-item-i'> <img src= '{$row['photo9']}' width='100' height='550' alt=''> <div class='text-block'>  </div></div>
     <div class='carousel-item-j'> <img src= '{$row['photo10']}' width='100' height='550' alt=''> <div class='text-block'> </div></div>   
         
     ";
  }
}
