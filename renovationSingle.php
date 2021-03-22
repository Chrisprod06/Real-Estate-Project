   <!--Header-->
 <?php
    $title = "Property | APM Smart Houses";
    include_once "includes/header.inc.php";
  ?>
  <script src="/path/to/cdn/jquery.min.js"></script>
<script src="automatic-image-comparison-slider/js/jquery.anyimagecomparisonslider.min.js"></script>

<script>$('#aics-autostart').anyImageComparisonSlider();
</script>

  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <?php echo'<h1 class="title-single">Renovation no.'.$_GET['id'].'</h1>';?>
            <?php include_once "includes/renovationSingle.inc.php";
            foreach ($searchProp as $row){
              echo '<span class="color-text-a">'.$row['city'].', '.$row['addr'].'</span>'; }?>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.html">Home</a>
              </li>
              <li class="breadcrumb-item">
                <a href="renovationGrid.php">Renovations</a>
              </li><?php
              echo '<li class="breadcrumb-item active" aria-current="page">
                Renovation no.'.$_GET['id'].' ';?>
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
    <section class="property-single nav-arrow-b">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div id="property-single-carousel" class="owl-carousel owl-arrow gallery-property">
            <?php include_once "includes/updateCarouselRen.inc.php";?>
          </div>
          <div class="row justify-content-between">
            <div class="col-md-5 col-lg-4">
              
              <?php 
              if ($row['categ'] === 'forRenovation') {
                $categ = 'Yes';
              } else {
                $categ = 'No';
              } 

              if ($row['furnished'] === '0') {
                $furnished = 'No';
              } else if ($row['furnished'] === '1') {
                $furnished = 'Yes';
              }

              if ($row['heat'] === '0') {
                $heat = 'Not Included';
              } else if ($row['heat'] === '1') {
                $heat = 'Included';
              }

              foreach ($searchProp as $row){
              echo '<div class="property-summary">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="title-box-d section-t4">
                      <h3 class="title-d">Quick Summary</h3>
                    </div>
                  </div>
                </div>
                <div class="summary-list">
                  <ul class="list">
                    <li class="d-flex justify-content-between">
                      <strong>Property ID:</strong>
                      <span>'.$_GET['id'].'</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Location:</strong>
                      <span>'.$row['city'].','.$row["addr"].'</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Property Type:</strong>
                      <span>'.$row["types"].'</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Status:</strong>
                      <span>'.$row["categ"].'</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Area:</strong>
                      <span>'.$row["area"].'m
                        <sup>2</sup>
                      </span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Beds:</strong>
                      <span>'.$row["beds"].'</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Baths:</strong>
                      <span>'.$row["baths"].'</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Garage:</strong>
                      <span>'.$row["garage"].'</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Renovated:</strong>
                      <span>'.$categ.'</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Furnished</strong>
                      <span>'.$furnished.'</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Date of Construction:</strong>
                      <span>'.$row["dateBuild"].'</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Floors:</strong>
                      <span>'.$row["floors"].'</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Available From:</strong>
                      <span>'.$row["dateAvail"].'</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Heating System:</strong>
                      <span>'.$heat.'</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Price per m<sup>2</sup>:</strong>
                      <span>€'.$row["priceSqm"].'</span>
                    </li>
                  </ul>
                  <div class="post-share">
                    <span>Share: </span>
                    <ul class="list-inline socials">
                      <li class="list-inline-item">
                        <a href="#">
                          <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#">
                          <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#">
                          <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div> '; }?>
            
            <div class="col-md-7 col-lg-7 section-md-t3">
              <div class="row">
                <div class="col-sm-12">
                  <div class="title-box-d">
                    <h3 class="title-d">Property Description</h3>
                  </div>
                </div>
              </div>
              <div class="property-description">
                <?php foreach ($searchProp as $row){
                echo'<p class="description color-text-a text-justify">
                  '.$row["desc"].'
                </p>';}?>
              
              </div>
              <div class="row section-t3">
                <div class="col-sm-12">
                  <div class="title-box-d">
                    <h3 class="title-d">Amenities</h3>
                  </div>
                </div>
              </div>
              <div class="property-description">
                <?php foreach ($searchProp as $row){
                echo'<p class="description color-text-a text-justify">
                  '.$row["amen"].'
                </p>';}?>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-md-12">
          <div class="row section-t3">
            <div class="col-sm-12">
              <div class="title-box-d">
                <h3 class="title-d">Contact </h3>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 col-lg-4">
              <img src="img/logo.png" alt="" class="img-fluid">
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="property-agent">
                <h4 class="title-agent">The Company</h4>
                
                <ul class="list-unstyled">
                  <li class="d-flex justify-content-between">
                    <strong>Office:</strong>
                    <span class="color-text-a">+357 25778899</span>
                  </li>
                  <li class="d-flex justify-content-between">
                    <strong>Email:</strong>
                    <span class="color-text-a">apm.smarthouses@gmail.com</span>
                  </li>
                  <li class="d-flex justify-content-between">
                    <strong>Skype:</strong>
                    <span class="color-text-a">live:.cid.d64cd0a5de872755</span>
                  </li>
                </ul>
                <div class="socials-a">
                  <ul class="list-inline">
                    <li class="list-inline-item">
                      <a href="#">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
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

  <script src="/path/to/cdn/jquery.min.js"></script>

</body>

</html>