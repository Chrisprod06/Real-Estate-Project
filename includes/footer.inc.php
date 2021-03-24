<!--/ footer Star /-->
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
              Send us an e-mail or phone us to resolve any problem you may ecounter.
            </p>
          </div>
          <div class="w-footer-a">
            <ul class="list-unstyled">
              <li class="color-a">
                <span class="color-text-a">Phone:</span>
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
                <span class="color-text-a"></span><a href="#">Download our app here!</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-4 section-md-t3">
        <div class="widget-a">
          <div class="w-header-a">
            <h3 class="w-title-a text-brand">The Company</h3>
          </div>
          <div class="w-body-a">
            <div class="w-body-a">
              <ul class="list-unstyled">
                <li class="item-list-a">
                  <i class="fa fa-angle-right"></i> <a href="#">Privacy Policy</a>
                </li>
                <li class="item-list-a">
                  <i class="fa fa-angle-right"></i> <a href="#">Terms of Service</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-4 section-md-t3">
        <div class="widget-a">
          <div class="w-header-a">
            <h3 class="w-title-a text-brand">Subscribe to our newsletter!</h3>
          </div>
          <div class="w-body-a">
            <div class="w-body-a">
              <form class="form-a contactForm" action="includes/regnews.inc.php" method="post" role="form">
                <div id="sendmessage">You are subscribed succesfully. Thank you!</div>
                <div id="errormessage"></div>
                <div class="row">
                  <div class="col-md-12 mb-3">
                    <div class="form-group">
                      <input name="email" type="email" class="form-control form-control-lg form-control-a" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
                      <div class="validation"></div>
                    </div>
                  </div>
                  <div class="from-group">
                    <div class="col-md-12">
                      <input name="submit" type="submit" value="Subscribe" class="btn btn-a"></input>
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
              <a href="#">Find us on:</a>
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
            <span class="color-a">APM Smart Houses</span> All Rights Reserved.
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

<!-- Template Main Javascript File -->
<script src="js/main.js"></script>

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