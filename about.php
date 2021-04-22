<?php 
$title = "About | APM Smart Houses";
include_once "includes/header.inc.php";
?><!--/ Intro Single star /-->
<section class="intro-single">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-8">
        <div class="title-single-box">
          <h1 class="title-single"><?php echo $lang['atitle'] ?></h1>
        </div>
      </div>
      <div class="col-md-12 col-lg-4">
        <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.php"><?php echo $lang['ahomepage'] ?></a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
              <?php echo $lang['acompany'] ?>
            </li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</section>
<!--/ Intro Single End /-->

<!--/ About Star /-->
<section class="section-about">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="about-img-box">
          <img src="img/aboutProfile.jpg" alt="" class="img-fluid">
        </div>  
      </div>
      <div class="col-md-12 section-t8">
        <div class="row">
          <div class="col-md-6 col-lg-7">
            <img src="img/logo.png" alt="" class="img-fluid">
          </div>

          <div class="col-md-6 col-lg-5 section-md-t3">
            <div class="title-box-d">
              <h3 class="title-d"><?php echo $lang['companymessage'] ?>
              </h3>
            </div>
            <p class="color-text-a text-justify">
              <?php echo $lang['amessage'] ?>
            </p>
            <p class="color-text-a">
              <?php echo $lang['athanks'] ?>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/ About End /-->

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