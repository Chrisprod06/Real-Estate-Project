<?php
$id = $_GET['id'];

$sql = "SELECT 3DPhoto1,3DPhoto2 ,3DPhoto3 ,3DPhoto4 ,3DPhoto5 ,3DPhoto6 ,3DPhoto7 ,3DPhoto8 ,3DPhoto9 ,3DPhoto10 FROM multimediaproperties where propertyID=$id ";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

while ($row = mysqli_fetch_assoc($result)) {
      echo '
      <div class="container">
        <div class="row">
      <div class="gallery">';
      if ($row['3DPhoto1']  == NULL) {
            continue;
      } else {
            echo ' <figure>
          <a href="panorama/index.php?path=' . $row["3DPhoto1"] . '"><img height="80" src="' . $row['3DPhoto1'] . '" alt="" /></a>
            
          </figure>';
      }
      if ($row['3DPhoto2']  == NULL) {
            continue;
      } else {
            echo ' <figure>
          <a href="panorama/index.php?path=' . $row["3DPhoto2"] . '"><img height="80" src="' . $row['3DPhoto2'] . '" alt="" /></a>
            
          </figure>';
      }
      if ($row['3DPhoto3']  == NULL) {
            continue;
      } else {
            echo ' <figure>
          <a href="panorama/index.php?path=' . $row["3DPhoto3"] . '"><img height="80" src="' . $row['3DPhoto3'] . '" alt="" /></a>
            
          </figure>';
      }
      if ($row['3DPhoto4']  == NULL) {
            continue;
      } else {
            echo ' <figure>
          <a href="panorama/index.php?path=' . $row["3DPhoto4"] . '"><img height="80" src="' . $row['3DPhoto4'] . '" alt="" /></a>
            
          </figure>';
      }
      if ($row['3DPhoto5']  == NULL) {
            continue;
      } else {
            echo ' <figure>
          <a href="panorama/index.php?path=' . $row["3DPhoto5"] . '"><img height="80" src="' . $row['3DPhoto5'] . '" alt="" /></a>
            
          </figure>';
      }
      if ($row['3DPhoto6']  == NULL) {
            continue;
      } else {
            echo ' <figure>
          <a href="panorama/index.php?path=' . $row["3DPhoto6"] . '"><img height="80" src="' . $row['3DPhoto6'] . '" alt="" /></a>
            
          </figure>';
      }
      if ($row['3DPhoto7']  == NULL) {
            continue;
      } else {
            echo ' <figure>
          <a href="panorama/index.php?path=' . $row["3DPhoto7"] . '"><img height="80" src="' . $row['3DPhoto7'] . '" alt="" /></a>
            
          </figure>';
      }
      if ($row['3DPhoto8']  == NULL) {
            continue;
      } else {
            echo ' <figure>
          <a href="panorama/index.php?path=' . $row["3DPhoto8"] . '"><img height="80" src="' . $row['3DPhoto8'] . '" alt="" /></a>
            
          </figure>';
      }
      if ($row['3DPhoto9']  == NULL) {
            continue;
      } else {
            echo ' <figure>
          <a href="panorama/index.php?path=' . $row["3DPhoto9"] . '"><img height="80" src="' . $row['3DPhoto9'] . '" alt="" /></a>
            
          </figure>';
      }
      if ($row['3DPhoto10']  == NULL) {
            continue;
      } else {
            echo ' <figure>
          <a href="panorama/index.php?path=' . $row["3DPhoto10"] . '"><img height="80" src="' . $row['3DPhoto10'] . '" alt="" /></a>
            
          </figure>';
      }
      echo ' </div>
          </div>';
}
