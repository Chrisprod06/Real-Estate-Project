<?php

include_once 'dbh.inc.php';
$id=$_GET['rid'];
$sql = "SELECT videoBefore FROM multimediarenovations WHERE renovationID = $id;";
$result = mysqli_query($conn,$sql);

if($resultCheck>0){
    while($row = mysqli_fetch_assoc($result)){
        echo '<div class="embed-responsive embed-responsive-16by9 hoverable">
        <video class="embed-responsive-item" controls>
          <source src="'.$row['videoBefore'].'" type="video/mp4">
        </video>
      </div>';
    }
}