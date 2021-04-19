<?php

include_once 'dbh.inc.php';
$id=$_GET['rid'];
$sql = "SELECT videoBefore FROM multimediarenovations WHERE renovationID = $id;";
$result = mysqli_query($conn,$sql);

if($resultCheck>0){
    while($row = mysqli_fetch_assoc($result)){
        echo '<iframe src="'.$row['videoBefore'].'" width="100%" height="460" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>';
    }
}