<?php
session_start();
$url =  "//{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
$escaped_url = htmlspecialchars($url, ENT_QUOTES, 'UTF-8');
$res = preg_replace('/\?[^?]*$/', '', $escaped_url);
$_SESSION['lastVisitedPage'] = $res;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $title ?></title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!--Range Slider-->

  <!--Plugin CSS file with desired skin-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/css/ion.rangeSlider.min.css" />

  <!--jQuery-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <!--Plugin JavaScript file-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/js/ion.rangeSlider.min.js"></script>



  <!-- =======================================================
    Theme Name: EstateAgency
    Theme URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>


  <div class="click-closed"></div>
  <!--/ Form Search Star /-->
  <div class="box-collapse">
    <div class="title-box-d">
      <h3 class="title-d">Search Property</h3>
    </div>
    <span class="close-box-collapse right-boxed ion-ios-close"></span>
    <div class="box-collapse-wrap form">
      <form class="form-a" action="includes/search.inc.php" method="POST">
        <div class="row">

          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="Type">Type</label>
              <select class="form-control form-control-lg form-control-a" id="Type" name="type">
                <option value="allTypes">All Types</option>
                <!--PHP script to get all cities from database-->
                <?php
                include_once 'dbh.inc.php';
                $sql = 'SELECT distinct type FROM properties where category = "RentLongTerm" OR category = "RentShortTerm" OR category = "Sale"; ';
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);
                while ($row = mysqli_fetch_assoc($result)) {
                  echo "<option value = " . $row['type'] . ">" . $row['type'] . "</option>";
                }
                ?>

              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="Category">Category</label>
              <select class="form-control form-control-lg form-control-a" id="Category" name="category" onchange="setPriceRange()">
                <option value="allCategories">All Categories</option>
                <option value="forRentShort">For Rent - Short Term</option>
                <option value="forRentLong">For Rent - Long Term</option>
                <option value="forSale">For Sale</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="city">Country</label>
              <select class="form-control form-control-lg form-control-a" id="country" name="country">
                <option value="allCountries">All Countries</option>
                <!--PHP script to get all cities from database-->
                <?php
                include_once 'dbh.inc.php';
                $sql = 'SELECT distinct country FROM properties where category = "RentLongTerm" OR category = "RentShortTerm" OR category = "Sale"; ';
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);
                while ($row = mysqli_fetch_assoc($result)) {
                  echo "<option value = " . $row['country'] . ">" . $row['country'] . "</option>";
                }
                ?>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="city">City</label>
              <select class="form-control form-control-lg form-control-a" id="city" name="city">
                <option value="allCities">All Cities</option>
                <!--PHP script to get all cities from database-->
                <?php
                include_once 'dbh.inc.php';
                $sql = 'SELECT distinct town FROM properties where category = "RentLongTerm" OR category = "RentShortTerm" OR category = "Sale"; ';
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);
                while ($row = mysqli_fetch_assoc($result)) {
                  echo "<option value = " . $row['town'] . ">" . $row['town'] . "</option>";
                }
                ?>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="region">Region</label>
              <select class="form-control form-control-lg form-control-a" id="region" name="region">
                <option value="allRegions">All Regions</option>
                <!--PHP script to get all cities from database-->
                <?php
                include_once 'dbh.inc.php';
                $sql = 'SELECT distinct area FROM properties where category = "RentLongTerm" OR category = "RentShortTerm" OR category = "Sale"; ';
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);
                while ($row = mysqli_fetch_assoc($result)) {
                  echo "<option value = " . $row['area'] . ">" . $row['area'] . "</option>";
                }
                ?>
              </select>
            </div>
          </div>

          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="bedrooms">Bedrooms</label>
              <select class="form-control form-control-lg form-control-a" id="bedrooms" name="bedrooms">
                <option value='any'>Any</option>
                <option value='0'>0</option>
                <option value='1'>1</option>
                <option value='2'>2</option>
                <option value='3'>3</option>
                <option value='4'>4</option>
                <option value='5'>5</option>
                <option value='6'>6</option>
                <option value='7'>7</option>
                <option value='8'>8</option>
                <option value='9'>9</option>
                <option value='10'>10</option>
              </select>
            </div>
          </div>

          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="bathrooms">Bathrooms</label>
              <select class="form-control form-control-lg form-control-a" id="bathrooms" name="bathrooms">
                <option value='any'>Any</option>
                <option value='0'>0</option>
                <option value='1'>1</option>
                <option value='2'>2</option>
                <option value='3'>3</option>
                <option value='4'>4</option>
                <option value='5'>5</option>
                <option value='6'>6</option>
                <option value='7'>7</option>
                <option value='8'>8</option>
                <option value='9'>9</option>
                <option value='10'>10</option>
              </select>
            </div>
          </div>
          <div class="col-md-6   mb-2">
            <label for="features">Features</label>
            <div class="form-group" id='features' name="features">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="parking" name="parking" value="parking">
                <label class="form-check-label" for="inlineCheckbox1">Parking</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="furniture" value="furniture" name="furniture">
                <label class="form-check-label" for="furniture">Furniture</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="heating" name="heating" value="heating">
                <label class="form-check-label" for="inlineCheckbox3">Heating</label>
              </div>
            </div>
          </div>
          <div class="col-md-12   mb-2">
            <label for="priceRange">Price Range</label>
            <div class="form-group" id='priceRange' name="priceRange">
              <input type="text" class="js-range-slider" name="rangePrice" value="" />

            </div>
          </div>
          <script>
            var custom_values = [0, 100, 200, 300, 400, 500, 600, 700, 800, 900, 1000, 2000, 3000, 4000, 5000, 10000, 20000, 30000, 40000, 50000, 60000, 700000, 80000, 90000, 100000, 150000, 2000000, 250000, 300000, 350000, 400000, 450000, 500000, 600000, 700000, 800000, 900000, 1000000];
            var my_from = custom_values.indexOf(0);
            var my_to = custom_values.indexOf(1000000);
            $(".js-range-slider").ionRangeSlider({
              skin: "modern",
              type: "double",
              min: my_from,
              max: my_to,
              grid: true,
              values: custom_values
            });
          </script>
          <div class="col-md-12">
            <button type="submit" class="btn btn-b" name="submitSearch">Search Property</button>
          </div>
        </div>
      </form>
    </div>
  </div>

  <!--/ Form Search End /-->

  <!--/ Nav Star /-->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container-fluid">

      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>

      <a class="navbar-brand text-brand" href="index.php">APM <span class="color-b">Smart Houses</span></a>
      <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="propertyGrid.php">Properties</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="renovationGrid.php">Before and After</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact Us</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              My Account
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">

              <?php
              if (isset($_SESSION['userID'])) {
                if ($_SESSION['role'] == 1) {
                  echo "<a class='dropdown-item' href='../Real-Estate-CMS/index.php'>Edit Website</a>";
                  echo " <a class='dropdown-item' href='editProfile.php'>Edit Profile</a>";
                  echo " <a class='dropdown-item' href='#'>Language</a>";
                  echo "<a class='dropdown-item' href='includes/logout.inc.php'>Logout</a>";
                } else if ($_SESSION['role'] == 2) {
                  echo " <a class='dropdown-item' href='favorites.php'>Favorites</a> ";
                  echo " <a class='dropdown-item' href='editProfile.php'>Edit Profile</a>";
                  echo " <a class='dropdown-item' href='#'>Language</a>";
                  echo "<a class='dropdown-item' href='includes/logout.inc.php'>Logout</a>";
                }
              } else {
                echo " <a data-toggle='modal' class='dropdown-item' href='#login'>Login</a>";
                echo " <a data-toggle='modal' class='dropdown-item' href='#register'>Register</a>";
                echo " <a class='dropdown-item' href='#'>Language</a>";
              }
              ?>
            </div>
          </li>
        </ul>
      </div>
      <button type="button" class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"> Search Property</span>
      </button>



    </div>
  </nav>
  <!--/ Nav End /-->

  <!-- Login Modal HTML -->
  <div id="login" class="modal fade">
    <div class="modal-dialog ">
      <div class="modal-content ">
        <form id="loginForm" action="includes/login.inc.php" method="POST">
          <div class="modal-header">
            <h4 class="modal-title">Login</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <input type="email" name="email" class="form-control" placeholder="Email" required>
            </div>
            <div class="form-group">
              <input type="password" name="pass" class="form-control" placeholder="Password" required>
            </div>
            <div class="form-group">

            </div>
            <!--Error messages-->
            <?php
            if (isset($_GET['error'])) {
              if ($_GET['error'] == 'wrongLogin') {
                echo '<p class = "text-danger text-center ">This user does not exist.</p>';
              } else if ($_GET['error'] == 'wrongPassword') {
                echo '<p class = "text-danger text-center ">The password you have entered is incorrect.</p>';
              } else if ($_GET['error'] == 'stmtFailed') {
                echo '<p class = "text-danger text-center " >Something went wrong. Please try again.</p>';
              } else if ($_GET['error'] == 'tryAgainReset') {
                echo '<p class = "text-danger text-center " >Reset password request went wrong. Please try again.</p>';
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

              <a href="resetPasswordRequest.php" class="pull-right">Forgot Password?</a>

            </div>
          </div>
          <div class="modal-footer">
            <input type="button" class="btn btn-a" data-dismiss="modal" value="Cancel">
            <input type="submit" class="btn btn-a" value="Login" name="submit"></input>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Register Modal HTML -->
  <div id="register" class="modal fade">
    <div class="modal-dialog ">
      <div class="modal-content ">
        <form action="includes/reguser.inc.php" method="POST">
          <div class="modal-header">
            <h4 class="modal-title">Register</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <input name="firstname" type="text" class="form-control" placeholder="Firstname" required="required">
            </div>
            <div class="form-group">
              <input name="lastname" type="text" class="form-control" placeholder="Lastname" required="required">
            </div>
            <div class="form-group">
              <input name="email" type="email" class="form-control" placeholder="Email" required="required">
            </div>
            <div class="form-group">
              <input name="telephone" type="tel" class="form-control" placeholder="Telephone" required="required">
            </div>
            <div class="form-group">
              <input name="password" type="password" class="form-control" placeholder="Password" required="required">
            </div>
            <div class="form-group">
              <input name="rePassword" type="password" class="form-control" placeholder="Re-enter Password" required="required">
            </div>
            <!--PHP script to display-->
            <?php
            if (isset($_GET['error'])) {
              if ($_GET['error'] == 'emptyinput') {
                echo '<p class = "text-danger text-center " >Fill in all the fields!</p>';
              }

              if ($_GET['error'] == 'emailExists') {
                echo '<p class = "text-danger text-center " >User already exists!</p>';
              }

              if ($_GET['error'] == 'passworddontmatch') {
                echo '<p class = "text-danger text-center " >The passwords must match!</p>';
              }

              if ($_GET['error'] == 'invalidemail') {
                echo '<p class = "text-danger text-center " >The email you have entered is invalid!</p>';
              }

              if ($_GET['error'] == 'stmtfailed') {
                echo '<p class = "text-danger text-center " >Something went wrong, try again!</p>';
              }

              if ($_GET['error'] == 'noneRegister') {
                echo '
                <script>
                $(document).ready(function(){
                  Swal.fire({
                    position: "center",
                    icon: "success",
                    title: "Account created Succesfully!",
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
          </div>
          <div class="modal-footer">
            <input type="button" class="btn btn-a" data-dismiss="modal" value="Cancel">
            <input type="submit" class="btn btn-a" value="Register" name="submit"></input>
          </div>
        </form>
      </div>
    </div>
  </div>