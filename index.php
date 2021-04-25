<?php
$title = "Home | APM Smart Houses";
include_once "includes/header.inc.php";
include "includes/configLanguage.inc.php";
?>
<!--/ Carousel Star /-->
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
                    ';
        if ($row['category'] == 'Sale' or $row['RentLongTerm'] or $row['RentShortTerm']) {
          echo '<a href="propertySingle.php?id=' . $row['propertyID'] . '"><span class="price-a">' . $row['category'] . ' | €' . $row['totalPrice'] . '</span></a>';
        } else if ($row['category'] == 'Renovation' or $row['category'] == 'Decoration') {
          echo '<a href="renovationSingle.php?id=' . $row['propertyID'] . '"><span class="price-a">' . $row['category'] . ' | €' . $row['totalPrice'] . '</span></a>';
        }
        echo '
                      
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

<!--/ Carousel end /-->

<!--/ Services Star /-->
<section class="section-services section-t8">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="title-wrap d-flex justify-content-between">
          <div class="title-box">
            <h2 class="title-a"><?php echo $lang['services'] ?></h2>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="card-box-c foo">
          <div class="card-header-c d-flex">
            <div class="card-box-ico">
              <span class="fa fa-home"></span>
            </div>
            <div class="card-title-c align-self-center">
              <h2 class="title-c"><?php echo $lang['rl'] ?></h2>
            </div>
          </div>
          <div class="card-body-c">
            <p class="content-c">
              <?php echo $lang['rh'] ?>
            </p>
          </div>
          <div class="card-footer-c">
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card-box-c foo">
          <div class="card-header-c d-flex">
            <div class="card-box-ico">
              <span class="fa fa-home"></span>
            </div>
            <div class="card-title-c align-self-center">
              <h2 class="title-c"><?php echo $lang['rs'] ?></h2>
            </div>
          </div>
          <div class="card-body-c">
            <p class="content-c">
              <?php echo $lang['pi1'] ?>
            </p>
          </div>
          <div class="card-footer-c">
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card-box-c foo">
          <div class="card-header-c d-flex">
            <div class="card-box-ico">
              <span class="fa fa-home"></span>
            </div>
            <div class="card-title-c align-self-center">
              <h2 class="title-c"><?php echo $lang['buy'] ?></h2>
            </div>
          </div>
          <div class="card-body-c">
            <p class="content-c">
              <?php echo $lang['pi2'] ?>
            </p>
          </div>
          <div class="card-footer-c">
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card-box-c foo">
          <div class="card-header-c d-flex">
            <div class="card-box-ico">
              <span class="fa fa-home"></span>
            </div>
            <div class="card-title-c align-self-center">
              <h2 class="title-c"><?php echo $lang['reno'] ?></h2>
            </div>
          </div>
          <div class="card-body-c">
            <p class="content-c">
              <?php echo $lang['pi3'] ?>
            </p>
          </div>
          <div class="card-footer-c">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/ Services End /-->

<!--Footer-->
<?php
include_once "includes/footer.inc.php";
?>



<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
<div id="preloader"></div>

<!-- JavaScript Libraries -->
<script src="lib/jquery/jquery.min.js"></script>
<script src="lib/jquery/jquery-migrate.min.js"></script>
<script src="lib/popper/popper.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/scrollreveal/scrollreveal.min.js"></script>
<!-- Contact Form JavaScript File -->
<script src="contactform/contactform.js"></script>

<!-- Template Main Javascript File -->
<script src="js/main.js"></script>

<script src="https://code.jquery.com/jquery-3.2.1.min.js  "></script>

</body>

</html>