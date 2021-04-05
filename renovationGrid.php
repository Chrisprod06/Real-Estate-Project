<?php
$title = "Before and After | APM Smart Houses";
include_once "includes/header.inc.php";
?><!--/ Intro Single star /-->
<section class="intro-single">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-8">
        <div class="title-single-box">
          <h1 class="title-single"><?php echo $lang['rrenovations']?></h1>
        </div>
      </div>
      <div class="col-md-12 col-lg-4">
        <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.php"><?php echo $lang['pshome']?></a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
            <?php echo $lang['rrenovationsgrid']?>
            </li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</section>
<!--/ Intro Single End /-->

<!--/ Renovations Grid Star /-->
<section class="property-grid grid">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="grid-option">

        </div>
      </div>
      
      <?php
        //session_start();
        require_once 'includes/dbh.inc.php';
        
        
        
        //Pagination
        $total = 6;
        if (isset($_GET['page'])) 
        {
          $page = $_GET['page'];
        } 
        else 
        {
          $page = 1;
        }
        $start = ($page - 1) * $total;
        //End Pagination
        
        
        
        $getQuery1 = "SELECT * from renovations LIMIT $start,$total;  ";
        $setQuery1 = mysqli_query($conn, $getQuery1);
        
        $searchRen = array(); 
        
        
        while ($row = mysqli_fetch_assoc($setQuery1)) 
        {
        
          $searchRen[] = array(
          $rID= $row['renovationID'],
          $pID = $row['propertyID'] 
          
          ); 
        
          $getQuery2 = "SELECT * from properties WHERE propertyID=$pID ;";
          $setQuery2 = mysqli_query($conn, $getQuery2);
          $searchProp = array();
        
          foreach ($searchRen as $row){
          while ($row = mysqli_fetch_assoc($setQuery2)) 
          {
        
            $searchProp[] = array(
          
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
          }
        
          }
        
          foreach($searchProp as $row){
            
            if ($row['furnished'] === '0') {
              $furnished = 'No';
          } else if ($row['furnished'] === '1') {
              $furnished = 'Yes';
          }
            
            echo '<div class="col-md-4">
            <div class="card-box-a card-shadow">
              <div class="img-box-a">
              <img src="img/property-1.jpg" alt="" class="img-a img-fluid">
              </div>
              <div class="card-overlay">
                <div class="card-overlay-a-content">
                <div class="card-header-a">
                  <h2 class="card-title-a">
                    <a>' . $row["city"] . '
                    <br />' . $row["addr"] . '</a>
                  </h2>
                </div>
              <div class="card-body-a">
                <div class="price-box d-flex">
                  <span class="price-a">' . $row['categ'] . ' | €' . $row["totPrice"] . '</span>
                </div>
                  <a href="renovationSingle.php?id='.$row["propID"].'&rid='.$rID.'"  class="link-a">'.$lang['pgclick'].'
                  <span class="ion-ios-arrow-forward"></span>
                  </a>
              </div>
              <div class="card-footer-a">
                <ul class="card-info d-flex justify-content-around">
                <li>
                <h4 class="card-info-title">'.$lang['pgsqm'].'</h4>
                  <span>' . $row["area"] . 'm
                    <sup>2</sup>
                  </span>
              </li>
              <li>
                <h4 class="card-info-title">'.$lang['propertybedrooms'].'</h4>
                <span>' . $row["beds"] . '</span>
              </li>
              <li>
                <h4 class="card-info-title">'.$lang['propertybathrooms'].'</h4>
                <span>' . $row["baths"] . '</span>
              </li>
              <li>
                <h4 class="card-info-title">'.$lang['propertyfurniture'].'</h4>
                <span>' . $furnished . '</span>
              </li>
                  
                  
                  </ul>
                </div>
              </div>
              </div>
            </div>
          </div>';
          
          }
          
        } ?> 
      
    </div>
    <div class="row">
      <div class="col-sm-12">
        <nav class="pagination-a">
          <ul class="pagination justify-content-end">
            <li class="page-item <?php if ($page == 1) {
                                    echo 'disabled';
                                  } ?>">
              <a class="page-link" href="<?php if ($page == 1) {
                                            echo '#';
                                          } else { ?><?php echo $_SERVER['PHP_SELF'] ?>?page=<?php echo $page - 1;
                                                                                                                      } ?>">
                <span class="ion-ios-arrow-back"></span>
              </a>
            </li>
            <?php
            $slt = "select * from renovations";
            $rec = mysqli_query($conn, $slt);
            $total1 = mysqli_num_rows($rec);
            $total_pages = ceil($total1 / $total);
            for ($i = 1; $i <= $total_pages; $i++) { ?>
              <li class="page-item <?php if ($_GET["page"] == $i) {
                                      echo 'active';
                                    } ?>">
                <a class="page-link" href="<?php echo $_SERVER['PHP_SELF'] ?>?page=<?php echo $i; ?>"><?php echo $i; ?></a>
              </li>
            <?php
            } ?>
            <li class="page-item next <?php if($page==$total_pages){ echo 'disabled'; } ?>" >
              <a class="page-link" href="<?php if($page==$total_pages){ echo '#';} else {?><?php echo $_SERVER['PHP_SELF']?>?page=<?php echo $page+1; }?>">
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