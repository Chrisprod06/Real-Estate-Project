<?php
$title = "Property | APM Smart Houses";
include_once "includes/header.inc.php";
include_once "includes/propertySingle.inc.php";
include "includes/configLanguage.inc.php";
?>
<!--/ Intro Single star /-->
<section class="intro-single">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-8">
        <div class="title-single-box">
          <?php echo '<h1 class="title-single">' . $lang['propertyno'] . ' ' . $_GET['id'] . '</h1>';
          foreach ($property as $row) {
            echo '<span class="color-text-a">' . $row['country'] . ', ' . $row['city'] . ', ' . $row['address'] . ', ' . $row['area'] . 'm<sup>2</sup>, €' . $row['totalPrice'] . '</span>';
          }
          ?>

        </div>
      </div>
      <div class="col-md-12 col-lg-4">
        <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.php"><?php echo $lang['pshome'] ?></a>
            </li>
            <li class="breadcrumb-item">
              <a href="propertyGrid.php"><?php echo $lang['psproperties'] ?></a>
            </li>
            <?php
            echo '<li class="breadcrumb-item active" aria-current="page">
            ' . $lang['propertyno'] . ' ' . $_GET['id'] . ' '; ?>
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
          <?php include_once 'includes/updateCarouselProperty.inc.php'; ?>
        </div>

        <?php



        foreach ($property as $row) {
          $videoProperty = 'SELECT video FROM multimediaproperties WHERE propertyID = ' . $row['propertyID'] . ';';


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
            <div class="col-md-5 col-lg-12">
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
                      <h3 class="title-d">' . $lang['prsummary'] . '</h3>
                    </div>
                  </div>
                </div>
                <div class="summary-list">
                  <ul class="list">
                  <div class="row">
                  <div class="col-lg-6 col-md-12">
                  <li class="d-flex justify-content-between">
                              <strong class = "text-right">' . $lang['propertyid'] . '</strong>
                              <span>' . $row['propertyID'] . '</span>
                            </li>
                            <li class="d-flex justify-content-between">
                              <strong>' . $lang['propertylocation'] . '</strong>
                              <span>' . $row['country'] . ', ' . $row['city'] . ', ' . $row["address"] . '</span>
                            </li>
                            <li class="d-flex justify-content-between">
                              <strong>' . $lang['propertytype'] . '</strong>
                              <span>' . $row['type'] . '</span>
                            </li>
                            <li class="d-flex justify-content-between">
                              <strong>' . $lang['propertystatus'] . '</strong>
                              <span>' . $row['category'] . '</span>
                            </li>
                           
                            <li class="d-flex justify-content-between">
                              <strong>' . $lang['propertybedrooms'] . '</strong>
                              <span>' . $row['bedrooms'] . '</span>
                            </li>
                            <li class="d-flex justify-content-between">
                              <strong>' . $lang['propertybathrooms'] . '</strong>
                              <span>' . $row['bathrooms'] . '</span>
                            </li>
                            <li class="d-flex justify-content-between">
                              <strong>' . $lang['propertyparking'] . '</strong>
                              <span>' . $parking . '</span>
                            </li>
                  </div>
                  <div class="col-lg-6 col-md-12">
                  <li class="d-flex justify-content-between">
                  <strong>' . $lang['propertyfurniture'] . '</strong>
                  <span>' . $furnished . '</span>
                </li>
                <li class="d-flex justify-content-between">
                  <strong>' . $lang['propertyheating'] . '</strong>
                  <span>' . $heating . '</span>
                </li>
                <li class="d-flex justify-content-between">
                  <strong>' . $lang['propertyfloors'] . '</strong>
                  <span>' . $row['floors'] . '</span>
                </li>
                <li class="d-flex justify-content-between">
                  <strong>' . $lang['propertydoc'] . '</strong>
                  <span>' . $row['dateOfBuild'] . '</span>
                </li>
                
                <li class="d-flex justify-content-between">
                  <strong>' . $lang['propertyaf'] . '</strong>
                  <span>' . $row['availableFrom'] . '</span>
                </li>      
                <li class="d-flex justify-content-between">
                <strong>' . $lang['pgsqm'] . '</strong>
                <span>' . $row['area'] . 'm
                  <sup>2</sup>
                </span>
              </li>              
                <li class="d-flex justify-content-between">
                  <strong>' . $lang['propertypps'] . '</strong>
                  <span>€' . $row['pricePerSqm'] . '</span>
                </li>
                  </div>
                  </div>
                   <br>';



          echo '
                  </ul>
                  
                </div>
              </div>
            </div>
            <div class="col-md-12 col-lg-12 section-md-t3">
              <div class="row">
                <div class="col-sm-12">
                  <div class="title-box-d">
                    <h3 class="title-d">' . $lang['prdescription'] . '</h3>
                  </div>
                </div>
              </div> 
              <div class="property-description">
                <p class="description color-text-a text-justify">
                  ' . $row['description'] . '
               </p>

              </div>
              <div class="row section-t3">
                <div class="col-sm-12">
                  <div class="title-box-d">
                    <h3 class="title-d">' . $lang['prsamenities'] . '</h3>
                  </div>
                </div>
              </div>
              <div class="property-description">
                <p class="description color-text-a text-justify">
                  ' . $row['amenities'] . '
               </p>

              </div>
              <br>';
          include_once 'includes/selectFavorites.inc.php';
          echo '
              <div class="post-share">
                    <span>' . $lang['propertyshare'] . ' </span>
                    <ul class="list-inline socials">
                      <li class="list-inline-item">
                        <a href="http://www.facebook.com/share.php?u=destini-h2020.com/Real-Estate-Website/renovationSingle.php?id=' . $_GET['id'] . '">
                          <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="https://twitter.com/intent/tweet?url=destini-h2020.com/Real-Estate-Website/renovationSingle.php?id=' . $_GET['id'] . '">
                          <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
            </div>
          </div>
          </div>
          <div class="col-md-10 offset-md-1">
          <ul class="nav nav-pills-a nav-pills mb-3 section-t3" id="pills-tab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="pills-video-tab" data-toggle="pill" href="#pills-video" role="tab" aria-controls="pills-video" aria-selected="true">' . $lang['propertyvideo'] . '</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-map-tab" data-toggle="pill" href="#pills-map" role="tab" aria-controls="pills-map" aria-selected="false">' . $lang['propertylc'] . '</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-plans-tab" data-toggle="pill" href="#pills-plans" role="tab" aria-controls="pills-plans" aria-selected="false">' . $lang['propertyvt'] . '</a>
            </li>
            
          </ul>
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-video" role="tabpanel" aria-labelledby="pills-video-tab">
            
              ';
          include_once 'includes/updateVideoProperty.inc.php';
        }
        foreach ($property as $row) {
          echo '</div>
          <div class="tab-pane fade" id="pills-map" role="tabpanel" aria-labelledby="pills-map-tab">
              ' . $row['location'] . '
            </div>';
        }
        echo '
              <div class="tab-pane fade" id="pills-plans" role="tabpanel" aria-labelledby="pills-plans-tab">
              ';
              include_once 'includes/updateVirtualTour.inc.php';
       

        echo '</div>
        </div>
        </div>
        </div>

             ';

        ?>



        <div class="col-md-12">
          <div class="row section-t3">
            <div class="col-sm-12">
              <div class="title-box-d">
                <h3 class="title-d"><?php echo $lang['prcontact'] ?> </h3>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 col-lg-4">
              <img src="img/logo.png" alt="" class="img-fluid">
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="property-agent">
                <h4 class="title-agent"><?php echo $lang['prcompany'] ?></h4>

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
                      <a href="https://www.facebook.com/APM-Smart-Houses-348888093013180">
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

            <?php
            if (!isset($_SESSION['userID'])) {
              echo '<div class="col-md-12 col-lg-4">
                  <div class="property-contact">
                    <form class="form-a">
                      <div class="row text-center mt-4">
                        <p class="color-text-a">
                        ' . $lang['prmessage'] . '
                        </p>            
                        <div class="col-md-12 mt-5">
                        <a data-toggle = "modal" href = "#login" class="btn btn-a">' . $lang['login'] . '</a>
                          
                        </div>
                      </div>
                    </form>
                  </div>
                </div>';
            } else {

              echo ' <div class="col-md-12 col-lg-4">
                <div class="property-contact">
                <form class="form-a" action="includes/propertyContact.inc.php" method = "POST">
                <div class="row">
                  <div class="col-md-12 mb-1">
                    <div class="form-group">
                      <textarea id="textMessage" class="form-control" id = "message" placeholder="' . $lang['ctext'] . '" name="message" cols="45"
                        rows="8" required></textarea>
                    </div>
                  </div>                      
                  <div class="col-md-12">
                  <input type="hidden" value='.$_GET['id'].' name = "propertyID">
                    <button type="submit" name="propertyContact" class="btn btn-a">' . $lang['cbutton'] . '</button>
                  </div>
                </div>
              </form>
                </div>
              </div>';
            }
            ?>

          </div>
        </div>
      </div>
    </div>
</section>

<!--/ Property Single End /-->
 <!-- Login Modal HTML -->
 <div id="login" class="modal fade">
    <div class="modal-dialog ">
      <div class="modal-content ">
        <form id="loginForm" action="includes/login.inc.php" method="POST">
          <div class="modal-header">
            <h4 class="modal-title"><?php echo $lang['login'] ?></h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <input type="email" name="email" class="form-control" placeholder="Email" required value=>
            </div>
            <div class="form-group">
              <input type="password" name="pass" class="form-control" placeholder="<?php echo $lang['password'] ?>" required="required">
            </div>
            <div class="form-group">

            </div>
            <!--Error messages-->
            <?php
            if (isset($_GET['error'])) {
              if ($_GET['error'] == 'wrongLogin') {
                echo '<p class = "text-danger text-center ">' . $lang['wronglogin'] . '</p>';
              } else if ($_GET['error'] == 'wrongPassword') {
                echo '<p class = "text-danger text-center ">' . $lang['wrongpass'] . '</p>';
              } else if ($_GET['error'] == 'stmtFailed') {
                echo '<p class = "text-danger text-center " >' . $lang['stmtfail'] . '</p>';
              } else if ($_GET['error'] == 'tryAgainReset') {
                echo '<p class = "text-danger text-center " >' . $lang['resetpass'] . '</p>';
              } else if ($_GET['error'] == 'noneLogin') {
                echo '
                    <script>
                    $(document).ready(function(){
                      Swal.fire({
                        position: "center",
                        icon: "success",
                        title: "Login Successful!",
                        showConfirmButton: false,
                        timer: 1500                 
                      }).then(function() {
                        
                      })
                    });                 
                    </script>
                    ';
              }
            }
            ?>

            <div class="clearfix">

              <a href="resetPasswordRequest.php" class="pull-right"><?php echo $lang['forgotpassword'] ?></a>

            </div>
          </div>
          <div class="modal-footer">
            <input type="button" class="btn btn-a" data-dismiss="modal" value="<?php echo $lang['cancel'] ?>">
            <input type="submit" class="btn btn-a" value="<?php echo $lang['Login'] ?>" name="submit"></input>
          </div>
        </form>
      </div>
    </div>
  </div>

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