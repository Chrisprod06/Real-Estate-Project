<!--/ footer Star /-->
<?php
include "configLanguage.inc.php";
?>
<section class="section-footer">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-4">
        <div class="widget-a">
          <div class="w-header-a">
            <h3 class="w-title-a text-brand">APM Smart Houses</h3>
          </div>
          <div class="w-body-a">
            <p class="w-text-a color-text-a">
              <?php echo $lang['fparagraph'] ?>
            </p>
          </div>
          <div class="w-footer-a">
            <ul class="list-unstyled">
              <li class="color-a">
                <span class="color-text-a"><?php echo $lang['fphone'] ?></span>
              <li>
                <span class="color-text-a">+357 99436309</span>
              </li>
              <li>
                <span class="color-text-a"> +357 99252247</span>
              </li>
              <li>
                <span class="color-text-a">+30 6943059942</span>
              </li>


              </li>
              <li class="color-a">
                <span class="color-text-a">Email: </span> apm.smarthouses@gmail.com
              </li>
              <li class="color-a">
                <span class="color-text-a"></span><a href="#"><?php echo $lang['downloadapp'] ?></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-4 section-md-t3">
        <div class="widget-a">
          <div class="w-header-a">
            <h3 class="w-title-a text-brand"><?php echo $lang['thecompany'] ?></h3>
          </div>
          <div class="w-body-a">
            <div class="w-body-a">
              <ul class="list-unstyled">
                <li class="item-list-a">
                  <i class="fa fa-angle-right"></i> <a data-toggle='modal' href='#privacyPolicy'><?php echo $lang['privacypolicy'] ?></a>
                </li>
                <li class="item-list-a">
                  <i class="fa fa-angle-right"></i> <a data-toggle='modal' href='#termsOfService'><?php echo $lang['tos'] ?></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-4 section-md-t3">
        <div class="widget-a">
          <div class="w-header-a">
            <h3 class="w-title-a text-brand"><?php echo $lang['fnewsletter'] ?></h3>
          </div>
          <div class="w-body-a">
            <div class="w-body-a">
              <form class="form-a contactForm" action="includes/regnews.inc.php" method="post">
                <div class="row">
                  <div class="col-md-12 mb-3">
                    <div class="form-group">
                      <input name="email" type="email" class="form-control form-control-lg form-control-a" placeholder="Your Email">
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="from-group">
                      <input name="submit" type="submit" value="<?php echo $lang['fsubscribe'] ?>" class="btn btn-a"></input>
                    </div>
                  </div>

                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>
<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <nav class="nav-footer">
          <ul class="list-inline">
            <li class="list-inline-item">
              <a href="#"><?php echo $lang['finduson'] ?></a>
            </li>
          </ul>
        </nav>
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
        <div class="copyright-footer">
          <p class="copyright color-text-a">
            &copy; Copyright
            <span class="color-a">APM Smart Houses <?php echo date("Y") ?></span>
          </p>
        </div>
        <div class="credits">
          <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=EstateAgency
            -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
        <div class="credits mt-5">

          <p class="text-center">Το σύστημα αναπτύχθηκε από τους Χριστόφορο Προδρόμου, Σίμο Ιμπραήμ, Χρήστο Ξενοφώντος, Μιχάλη Παπά, Κυριάκο Αντωνίου ,
            φοιτητές του τμήματος Ηλεκτρολόγων Μηχανικών και Μηχανικών Ηλεκτρονικών Υπολογιστών και Πληροφορικής του Τεχνολογικού Πανεπιστημίου Κύπρου,
            υπό την επίβλεψη του Καθηγητή Ανδρέα Σ. Ανδρέου
            στα πλαίσια του μαθήματος “Εργασία Τεχνολογίας Λογισμικού και Επαγγελματική Πρακτική” του πτυχίου Μηχανικών Ηλεκτρονικών Υπολογιστών και Πληροφορικής.
            Λεμεσός, Μάιος 2021
            Copyright © Cyprus University of Technology
          </p>
          <img src="img/uni.jpg" alt="logo">
        </div>

      </div>
    </div>
  </div>


  <!-- Privacy Policy Modal HTML -->
  <div id="privacyPolicy" class="modal fade">
    <div class="modal-dialog modal-xl">
      <div class="modal-content ">

        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">
          <?php include_once 'privacy.html' ?>
          <div class="modal-footer">
            <input type="button" class="btn btn-a" data-dismiss="modal" value="Ok">
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Terms of service Modal HTML -->
  <div id="termsOfService" class="modal fade">
    <div class="modal-dialog modal-xl">
      <div class="modal-content ">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">
          <?php include_once 'terms.html' ?>
          <div class="modal-footer">
            <input type="button" class="btn btn-a" data-dismiss="modal" value="Ok">
          </div>
        </div>
      </div>
    </div>
  </div>

</footer>
<!--/ Footer End /-->
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>

<script type="text/javascript" src="js/bootstrap-multiselect.js"></script>

<!--Sweet Alert-->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js"></script>

<!-- Template Main Javascript File -->
<script src="js/main.js"></script>
<!--Panorama-->

<script src="panorama\jquery.pano.js"></script>



<!--Sweet alerts used in the website-->
<?php
if (isset($_GET['update'])) {
  if ($_GET['update'] == 'successful') {
    echo '<script>
    $(document).ready(function(){
      Swal.fire({
        position: "center",
        icon: "success",
        title: "Password Change Successful!",
        showConfirmButton: false,
        timer: 1600                 
      }).then(function() {
        
      })
    });                 
    </script>';
  }
}
?>

<?php
if (isset($_GET['newsletter'])) {
  if ($_GET['newsletter'] == 'success') {
    echo '<script>
    $(document).ready(function(){
      Swal.fire({
        position: "center",
        icon: "success",
        title: "Subscribed to Newsletter Successfuly!",
        showConfirmButton: false,
        timer: 1600                 
      }).then(function() {
        
      })
    });                 
    </script>';
  } else if ($_GET['newsletter'] == 'fail') {
    echo '<script>
    $(document).ready(function(){
      Swal.fire({
        position: "center",
        icon: "error",
        title: "Subscribed Failed!",
        showConfirmButton: false,
        timer: 1600                 
      }).then(function() {
        
      })
    });                 
    </script>';
  }
}
?>
<?php
if (isset($_GET['delete'])) {
  if ($_GET['delete'] == 'successful') {
    echo '<script>
    $(document).ready(function(){
      Swal.fire({
        position: "center",
        icon: "success",
        title: "Account Deleted Successfuly!",
        showConfirmButton: false,
        timer: 1600                 
      }).then(function() {
        
      })
    });                 
    </script>';
  } else if ($_GET['delete'] == 'unsuccessful') {
    echo '<script>
    $(document).ready(function(){
      Swal.fire({
        position: "center",
        icon: "error",
        title: "Account Delete Failed!",
        showConfirmButton: false,
        timer: 1600                 
      }).then(function() {
        
      })
    });                 
    </script>';
  }
}
?>

<!--Script to show login modal when form is submitted-->
<?php if (isset($_GET['modal']) && 'login' == $_GET['modal']) { ?>
  <script type='text/javascript'>
    $("#login").modal();
  </script>
<?php } ?>
<!--Script to show register modal when form is submitted-->
<?php if (isset($_GET['modal']) && 'register' == $_GET['modal']) { ?>
  <script type='text/javascript'>
    $("#register").modal();
  </script>
<?php } ?>