<?php

include_once 'dbh.inc.php';
$sql = "SELECT * FROM properties NATURAL JOIN multimediaproperties WHERE displayCarousel=1";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
?>
<div class="intro intro-carousel">
  <div id="carousel" class="owl-carousel owl-theme">
    <?php
    if ($resultCheck > 0) {
      while ($row = mysqli_fetch_assoc($result)) {

        echo '
      <div class="carousel-item-a intro-item bg-image" style="background-image: url(' . $row['photo1'] . ')">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <p class="intro-title-top">
                   ' . $row['country'] . ', ' . $row['town'] . ', ' . $row['area'] . '             
                    </p>
                    <h1 class="intro-title mb-4">
                      ' . $row['address'] . '
                    </h1>
                    <p class="intro-subtitle intro-price">
                      <a href="#"><span class="price-a">' . $row['category'] . ' | €' . $row['totalPrice'] . '</span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> 
  ';
      }
    }
    ?>
  </div>
</div>