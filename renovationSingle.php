   <!--Header-->
 <?php
    $title = "Property | APM Smart Houses";
    include_once "includes/header.inc.php";
  ?>
  <link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css"
  rel="stylesheet"/>
  <link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
  <link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
  rel="stylesheet"
/>

<script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js" integrity="sha512-Bbn2GxMX2ePx4if/heU6eS4avbu2ac+V1q2jb4mlh1WofyrKV/vm6/mMWmuzgoHQlxvgg7dPuyTtTZSX/Zgk3Q==" crossorigin="anonymous"></script>
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">Renovation no.1</h1>
            <span class="color-text-a">Limassol, Odos Ellados, 14</span>
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
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Renovation no.1
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

 <?php echo 'THIS IS THE ID OF THE PROPERTY FROM THE URL: ' .$_GET['id']. ''; 
 
  $id =   $_GET['id'];
  require_once 'includes/dbh.inc.php';

  $getQuery = "SELECT * from properties WHERE propertyID=2;  ";
  $setQuery = mysqli_query($conn, $getQuery);

  $search = array();
 
  while ($row = mysqli_fetch_assoc($setQuery)) 
  {

    $search[] = array(
    
    'propID'=> $row['propertyID'],
    'city' => $row['town'],
    'addr' => $row['address'],
    'categ' => $row['category'],
    'totPrice' => $row['totalPrice'],
    'area' => $row['squarem'],
    'baths' => $row['bathrooms'],
    'beds' => $row['bedrooms'],
    'furnished' => $row['furniture']
    );

    foreach ($search as $row){
      echo '<br>THIS IS THE ID: ' .$row['propID']. '<br>';
      echo '<br>THIS IS THE category: ' .$row['categ']. '<br>';
    }
      
  } 
 
  ?>


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