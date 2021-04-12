<?php
$id=$_GET['id'];

$sql = "SELECT * multimediaproperties where propertyID=$id ";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

while($row = mysqli_fetch_assoc($result)){
    echo'
    <div class="col-md-4">
    <a href="panorama/index.html?photo='.$row['3DPhoto1'].'"><img src='.$row['3DPhoto1'].' alt="photo"></a>
</div>';
}
