<?php
$title = "Renovation | APM Smart Houses";
include_once "includes/header.inc.php";
include_once "includes/renovationSingle.inc.php";
?><!--/ Intro Single star /-->
<style>
/* Bottom right text */
.text-block {
  position: absolute;
  bottom: 20px;
  right: 20px;
  background-color: black;
  color: white;
  padding-left: 20px;
  padding-right: 20px;
}
</style>
<section class="intro-single">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-8">
        <div class="title-single-box">

          <?php 
              echo '<h1 class="title-single">'.$lang['renono'].' ' . $_GET['rid'] . '</h1>';
          foreach ($searchProp as $row) {
            echo '<span class="color-text-a">' . $row['country'] . ', ' . $row['city'] . ', ' . $row['address'] . ', ' . $row['area'] . 'm<sup>2</sup>, €'.$row['totalPrice'].'</span>';
          }
          ?>

        </div>
      </div>
      <div class="col-md-12 col-lg-4">
        <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.php"><?php echo $lang['pshome']?></a>
            </li>
            <li class="breadcrumb-item">
              <a href="renovationGrid.php"><?php echo $lang['rrenovations']?></a>
            </li>
            <?php
            echo '<li class="breadcrumb-item active" aria-current="page">
                '.$lang['renono'].' ' . $_GET['rid'] . ' '; ?>
            </li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</section>
<!--/ Intro Single End /-->

<!--/ Property Single Star /-->
<section class="property-single nav-arrow-b">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div id="property-single-carousel" class="owl-carousel owl-arrow gallery-property">
          <?php include_once 'includes/updateCarouselRen.inc.php'; ?>
        </div>

        <?php


        foreach ($searchProp as $row) {

          if ($row['parking'] === '0') {
            $parking = 'No';
          } else if ($row['parking'] === '1') {
            $parking = 'Yes';
          }
          if ($row['furniture'] === '0') {
            $furnished = 'No';
          } else if ($row['furniture'] === '1') {
            $furnished = 'Yes';
          }

          if ($row['heating'] === '0') {
            $heating = 'Not Included';
          } else if ($row['heating'] === '1') {
            $heating = 'Included';
          }

          echo ' 
          <div class="row justify-content-between">
            <div class="col-md-5 col-lg-4">
              <div class="property-price d-flex justify-content-center foo">
                <div class="card-header-c d-flex">
                  <div class="card-box-ico">
                    <span class="ion-money">€</span>
                  </div>
                  <div class="card-title-c align-self-center">
                    <h5 class="title-c">' . $row['totalPrice'] . '</h5>
                  </div>
                </div>
              </div>
              <div class="property-summary">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="title-box-d section-t4">
                      <h3 class="title-d">'.$lang['prsummary'].'</h3>
                    </div>
                  </div>
                </div>
                <div class="summary-list">
                  <ul class="list">
                    <li class="d-flex justify-content-between">
                      <strong>'.$lang['propertyid'].'</strong>
                      <span>' . $row['propertyID'] . '</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>'.$lang['propertylocation'].'</strong>
                      <span>' . $row['country'] . ', ' . $row['city'] . ', ' . $row["address"] . '</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>'.$lang['propertytype'].'</strong>
                      <span>' . $row['type'] . '</span>
                    </li>
                   
                    <li class="d-flex justify-content-between">
                      <strong>'.$lang['propertybedrooms'].'</strong>
                      <span>' . $row['bedrooms'] . '</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>'.$lang['propertybathrooms'].'</strong>
                      <span>' . $row['bathrooms'] . '</span>
                    </li>
                  </li>              
                    <br> ';}
                    include_once "includes/selectFavorites.inc.php"?> 
                  </ul> 
                  <div class="post-share">
                    <span><?php echo $lang['propertyshare']?> </span>
                    <ul class="list-inline socials">
                      <li class="list-inline-item">
                        <a href="http://www.facebook.com/share.php?u=localhost/Real-Estate-Website/renovationSingle.php?id='.$_GET['id'].'">
                          <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="https://twitter.com/intent/tweet?url=localhost/Real-Estate-Website/renovationSingle.php?id='.$_GET['id'].'">
                          <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-7 col-lg-7 section-md-t3">
              <div class="row">
                <div class="col-sm-12">
                  <div class="title-box-d">
                    <h3 class="title-d"><?php echo $lang['prdescription']?></h3>
                  </div>
                </div>
              </div>
               <?php foreach ($searchRen as $row){  echo '<div class="property-description">
                <p class="description color-text-a text-justify">
                  ' . $row['renDesc'] . '
               </p>';} 
               foreach ($searchProp as $row){ echo'
              </div>
              <div class="row section-t3">
                <div class="col-sm-12">
                  <div class="title-box-d">
                    <h3 class="title-d">'.$lang['prsamenities'].'</h3>
                  </div>
                </div>
              </div>
              <div class="property-description">
                <p class="description color-text-a text-justify">
                  ' . $row['amenities'] . '
               </p>
              </div>
            </div>
          </div>
          </div>
          <div class="col-md-10 offset-md-1">
          <ul class="nav nav-pills-a nav-pills mb-3 section-t3" id="pills-tab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="pills-video-tab" data-toggle="pill" href="#pills-video" role="tab" aria-controls="pills-video" aria-selected="true">'.$lang['videobefore'].'</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" id="pills-video-tab" data-toggle="pill" href="#pills-video" role="tab" aria-controls="pills-video" aria-selected="false">'.$lang['videoafter'].'</a>
            </li>
          </ul>
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-video" role="tabpanel" aria-labelledby="pills-video-tab">
              <iframe src="https://player.vimeo.com/video/73221098" width="100%" height="460" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </div>
            <div class="tab-pane fade" id="pills-plans" role="tabpanel" aria-labelledby="pills-plans-tab">
              <img src="img/plan2.jpg" alt="" class="img-fluid">
            </div>
            <div class="tab-pane fade" id="pills-map" role="tabpanel" aria-labelledby="pills-map-tab">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.1422937950147!2d-73.98731968482413!3d40.75889497932681!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25855c6480299%3A0x55194ec5a1ae072e!2sTimes+Square!5e0!3m2!1ses-419!2sve!4v1510329142834" width="100%" height="460" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
          </div>
          </div>';
        }



        ?>
</section>
<!--/ Property Single End /-->

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

</body>

</html>