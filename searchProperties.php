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
                    <h1 class="title-single">Your search results</h1>
                </div>
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
            require_once 'includes/dbh.inc.php';
            $total = 6;
            if (isset($_GET['page'])) {
              $page = $_GET['page'];
            } else {
              $page = 1;
            }
            $start = ($page - 1) * $total;


            //Present data
            if (isset($_SESSION['properties'])) {
                foreach ($_SESSION['properties'] as $row) {
                    //Prepare data
                    if ($row['categ'] === 'Sale') {
                        $categ = 'Sale';
                    } else if ($row['categ'] === 'RentLongTerm') {
                        $categ = 'Rent Long Term';
                    } else if ($row['categ'] === 'RentShortTerm') {
                        $categ = 'Rent Short Term';
                    } else if ($row['categ'] === 'Renovation') {
                        $categ = 'Renovation';
                    } else if ($row['categ'] === 'Decoration') {
                        $categ = 'Decoration';
                    }

                    if ($row['furnished'] === '0') {
                        $furnished = 'No';
                    } else if ($row['furnished'] === '1') {
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
                                       <a href="#">' . $row["city"] . '
                                           <br />' . $row["addr"] . '</a>
                                   </h2>
                               </div>
                               <div class="card-body-a">
                                   <div class="price-box d-flex">
                                       <span class="price-a">' . $categ . ' | €' . $row["totPrice"] . '</span>
                                   </div>
                                   <a href="propertySingle.php?id='.$row["propertyID"].'" class="link-a">Click here to view
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
                                           <span>' . $row["beds"] . '</span>
                                       </li>
                                       <li>
                                           <h4 class="card-info-title">Bathrooms</h4>
                                           <span>' . $row["baths"] . '</span>
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
            }


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