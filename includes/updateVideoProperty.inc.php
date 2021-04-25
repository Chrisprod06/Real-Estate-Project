<?php

include_once 'dbh.inc.php';
$id=$_GET['id'];
$sql = "SELECT video FROM multimediaproperties WHERE propertyID = $id;";
$result = mysqli_query($conn,$sql);

if($resultCheck>0){
    while($row = mysqli_fetch_assoc($result)){
        echo '<div class="embed-responsive embed-responsive-16by9 hoverable">
        <video class="embed-responsive-item" controls>
          <source src="'.$row['video'].'" type="video/mp4">
        </video>
      </div>';
    }
}