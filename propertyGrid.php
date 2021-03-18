<!--Header-->
<?php
$title = "Properties | APM Smart Houses";
include_once "includes/header.inc.php";
?>
<!--/ Intro Single star /-->
<section class="intro-single">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-8">
        <div class="title-single-box">
          <h1 class="title-single">Our Properties</h1>
        </div>
      </div>
      <div class="col-md-12 col-lg-4">
        <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
              Properties Grid
            </li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</section>
<!--/ Intro Single End /-->

<!--/ Property Grid Star /-->
<section class="property-grid grid">
  <div class="container">
    <div class="row">
      <?php
    //Script to get data
    $sql = 'SELECT * FROM properties where category = "forRentLongTerm" OR category = "forRentShortTerm" OR category = "forSale"; ';
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
      //Present data
      
      while ($row = mysqli_fetch_assoc($result)) {
          //Prepare data
          if ($row['category'] === 'forSale') {
            $categ = 'Sale';
          } else if ($row['category'] === 'forRentLongTerm') {
            $categ = 'Rent Long Term';
          } else if ($row['category'] === 'forRentShortTerm') {
            $categ = 'Rent Short Term';
          }

          if ($row['furniture'] === '0') {
            $furnished = 'No';
          } else if ($row['furniture'] === '1') {
            $furnished = 'Yes';
          }
          echo ' <div class="col-md-4">
                            <div class="card-box-a card-shadow">
                            <div class="img-box-a">
                           <img src="img/property-1.jpg" alt="" class="img-a img-fluid">
                       </div>
                       <div class="card-overlay">
                           <div class="card-overlay-a-content">
                               <div class="card-header-a">
                                   <h2 class="card-title-a">
                                       <a href="#">' . $row["town"] . '
                                           <br />' . $row["address"] . '</a>
                                   </h2>
                               </div>
                               <div class="card-body-a">
                                   <div class="price-box d-flex">
                                       <span class="price-a">' . $categ . ' | €' . $row["totalPrice"] . '</span>
                                   </div>
                                   <a href="propertySingle.php" class="link-a">Click here to view
                                       <span class="ion-ios-arrow-forward"></span>
                                   </a>
                               </div>
                               <div class="card-footer-a">
                                   <ul class="card-info d-flex justify-content-around">
                                       <li>
                                           <h4 class="card-info-title">Area</h4>
                                           <span>' . $row["area"] . 'm
                                               <sup>2</sup>
                                           </span>
                                       </li>
                                       <li>
                                           <h4 class="card-info-title">Bedrooms</h4>
                                           <span>' . $row["bedrooms"] . '</span>
                                       </li>
                                       <li>
                                           <h4 class="card-info-title">Bathrooms</h4>
                                           <span>' . $row["bathrooms"] . '</span>
                                       </li>
                                       <li>
                                           <h4 class="card-info-title">Furnished</h4>
                                           <span>' . $furnished . '</span>
                                       </li>
                                   </ul>
                               </div>
                           </div>
                       </div>
                       </div>
                       </div>';
        }
        unset($_SESSION['properties']);
      


      ?>

    </div>
    <div class="row">
      <div class="col-sm-12">
        <nav class="pagination-a">
          <ul class="pagination justify-content-end">
            <li class="page-item disabled">
              <a class="page-link" href="#" tabindex="-1">
                <span class="ion-ios-arrow-back"></span>
              </a>
            </li>
            <li class="page-item">
              <a class="page-link" href="#">1</a>
            </li>
            <li class="page-item next">
              <a class="page-link" href="#">
                <span class="ion-ios-arrow-forward"></span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</section>
<!--/ Property Grid End /-->

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