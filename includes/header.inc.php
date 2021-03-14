<?php
session_start();
$url =  "//{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
$escaped_url = htmlspecialchars( $url, ENT_QUOTES, 'UTF-8' );
$res=preg_replace('/\?[^?]*$/', '', $escaped_url);
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
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" >
  
  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css" >

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">



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
                <option value="flat">Flat</option>
                <option value="house">House</option>

              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="Category">Category</label>
              <select class="form-control form-control-lg form-control-a" id="Category" name="category">
                <option value="allCategories">All Categories</option>
                <option value="forRentShort">For Rent - Short Term</option>
                <option value="forRentLong">For Rent - Long Term</option>
                <option value="forSale">For Sale</option>
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
                $sql = 'SELECT town FROM properties where category = "forRentLongTerm" OR category = "forRentShortTerm" OR category = "forSale"; ';
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
                $sql = 'SELECT area FROM properties where category = "forRentLongTerm" OR category = "forRentShortTerm" OR category = "forSale"; ';
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
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="squarem">Area</label>
              <select class="form-control form-control-lg form-control-a" id="squarem" name="squarem">
                <option value="any">Any</option>
                <option value="sqm50_100">50-100</option>
                <option value="sqm100_150">100-150</option>
                <option value="sqm150_200">150-200</option>
                <option value="sqm200_300">200-300</option>
                <option value="sqm300+">300+</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="features">Features</label>
              <select  multiple data class=" selectpicker form-control form-control-lg form-control-a" id="features" name="features">
                <option value="any">Any</option>
                <option value="parking">Parking</option>
                <option value="heating">Heating</option>
                <option value="furniture">Furniture</option>
              </select>
            </div>
          </div>
          
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="MaxYear">Maximum Years</label>
              <select class="form-control form-control-lg form-control-a" id="MaxYear" name=maxYear>
                <option value="any">Any</option>
                <option value="twoYears">2</option>
                <option value="fiveYears">5</option>
                <option value="sevenYears">7</option>
                <option value="tenYears">10</option>
              </select>
            </div>
          </div>
         
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="price">Maximum Price</label>
              <select class="form-control form-control-lg form-control-a" id="price" name = "maxPrice">
                <option value="any" >Any</option>
                <option value="100k">$100,000</option>
                <option value="150k">$150,000</option>
                <option value="200k">$200,000</option>
              </select>
            </div>
          </div>
          <div class="col-md-12">
            <button type="submit" class="btn btn-b" name = "submitSearch">Search Property</button>
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

      <a class="navbar-brand text-brand" href="index.php"><img src="img/logo.png" alt="logo" width="200" height="80"> <span class="color-b"></span></a>
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
            <a class="nav-link" href="beforeAndAfter.php">Before And After</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact Us</a>
          </li>
          <?php
          if (isset($_SESSION['userID'])) {
            if ($_SESSION['role'] == 1) {
              echo "<li class='nav-item'>
                         <a class='nav-link' href='../Real-Estate-Admin/index.php'>Edit Website</a>
                     </li>";
              echo "<li class='nav-item'>
                        <a class='nav-link' href='includes/logout.inc.php'>Logout</a>
                      </li>";
            } else if ($_SESSION['role'] == 2) {
              echo "<li class='nav-item'>
                        <a class='nav-link' href='login.php'>Favorites</a>
                     </li>";
              echo "<li class='nav-item'>
                         <a class='nav-link' href='includes/logout.inc.php'>Logout</a>
                      </li>";
            }
          } else {
            echo "<li class='nav-item'>
                     <a data-toggle='modal' class='nav-link' href='#login'>Login</a>
                  </li>";
            echo "<li class='nav-item'>
                    <a data-toggle='modal' class='nav-link' href='#register'>Register</a>
                  </li>";
          }
          ?>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Language
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Greek</a>
              <a class="dropdown-item" href="#">English</a>
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
				<form action="includes/login.inc.php" method="POST">
					<div class="modal-header">
						<h4 class="modal-title">Login</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
          <div class="form-group">
            <input type="email" name = "email" class="form-control" placeholder="Email" required value =>
        </div>
        <div class="form-group">
            <input type="password" name = "pass" class="form-control" placeholder="Password" required="required">
        </div>
        <div class="form-group">
        
        </div>
        <!--Error messages-->
        <?php
        
            if(isset($_GET['error'])){
                if($_GET['error'] == 'wrongLogin'){
                    echo '<p class = "text-danger text-center ">This user does not exist.</p>';
                }
                else if ($_GET['error'] == 'wrongPassword'){
                    echo '<p class = "text-danger text-center ">The password you have entered is incorrect.</p>';
                }
                else if ($_GET['error'] == 'stmtFailed'){
                    echo '<p class = "text-danger text-center " >Something went wrong. Please try again.</p>';
                }
                else if ($_GET['error'] == 'tryAgainReset'){
                    echo '<p class = "text-danger text-center " >Reset password request went wrong. Please try again.</p>';
                }
                else if ($_GET['error'] == 'none' ){
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
                        window.location.href = "index.php";
                      })
                    });                 
                    </script>
                    ';
                }
            }
        ?>

        <div class="clearfix">
            
            <a href="resetPasswordRequest.php" class="pull-right">Forgot Password?</a>
            <a href="register.php" class="pull-left">Create Account</a>
        </div>        
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-a" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-a" value ="Login" name = "submitLogin"></input>
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
            <input name= "firstname" type="text" class="form-control" placeholder="Firstname" required="required">
        </div>
        <div class="form-group">
            <input name= "lastname" type="text" class="form-control" placeholder="Lastname" required="required">
        </div>       
        <div class="form-group">
            <input name= "email" type="email" class="form-control" placeholder="Email" required="required">
        </div>
        <div class="form-group">
            <input name= "telephone" type="tel" class="form-control" placeholder="Telephone" required="required">
        </div>
        <div class="form-group">
            <input name= "password" type="password" class="form-control" placeholder="Password" required="required">
        </div>
        <div class="form-group">
            <input name= "rePassword" type="password" class="form-control" placeholder="Re-enter Password" required="required">
        </div>
        <!--PHP script to display-->
        <?php
        if(isset($_GET['error']))
        {
            if($_GET['error'] == 'emptyinput')
            {          
            echo '<p class = "text-danger text-center " >Fill in all the fields!</p>';

            }

            if($_GET['error'] == 'emailExists')
            {
            echo '<p class = "text-danger text-center " >User already exists!</p>';
            }
            
            if($_GET['error'] == 'passworddontmatch')
            {
            echo '<p class = "text-danger text-center " >The passwords must match!</p>';
            }

            if($_GET['error'] == 'invalidemail')
            {
                echo '<p class = "text-danger text-center " >The email you have entered is invalid!</p>';
            }
            
            if($_GET['error'] == 'stmtfailed')
            {
                echo '<p class = "text-danger text-center " >Something went wrong, try again!</p>';
            }

            if($_GET['error'] == 'none')
            {
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
                    window.location.href = "login.php";
                  })
                });                 
                </script>
                ';
            }
                        
        }
    ?>
             
        <div class="clearfix">
            
            
            <a href="register.php" class="pull-left">Already have an account? Log in</a>
        </div>        
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-a" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-a" value ="Register" name = "submit"></input>
					</div>
				</form>
			</div>
		</div>
	</div>
  
  
