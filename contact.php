
  <<!--Navbar-->
  <?php
    $title = "Contact Us | APM Smart Houses";
    include_once "includes/header.inc.php";
    
  ?>

  <!--/ Intro Single star /-->
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">Contact US</h1>
            <span class="color-text-a">
              <p class = "text-justify"> Need help? Leave your message down below or send us an Email. Also you can message us to our socia media. We would love to help you out!
            </p>
            </span>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.html">Home</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Contact Us
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

  <!--/ Contact Star /-->
  <section class="contact">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 section-t8">
          <div class="row">
            <div class="col-md-7">
             <?php
              if(!isset($_SESSION['userID'])){
                echo '<div class="col-md-12 col-lg-10">
                <div class="property-contact">
                  <form class="form-a">
                    <div class="row text-center mt-4">
                      Please login in order to send us a message about any inquiry you may have.
                      </p>            
                      <div class="col-md-12 mt-5">
                        <a href = "login.php" class="btn btn-a">Login</a>
                      </div>
                    </div>
                  </form>
                </div>
              </div>';              
              }else{
                echo'
                <div class="col-md-12 col-lg-10">
                  <div class="property-contact">
                    <form class = "form-a" action="includes/contactUs.inc.php" method = "POST">
                      <div class="form-group">
                        <input class = "form-control" id = "subject" type="text" name = "subject" placeholder="Enter subject" required>
                      </div>
                      <div class="form-group">
                      <textarea id="message" class="form-control" id = "message" placeholder="Leave us a message and we will get back to you as soon as possible!" name="message" cols="45"
                                  rows="8" required></textarea>
                      </div>
                      <div class="form-group">
                        <input type="submit" class = "btn btn-a" value = "Send Message" name = "submit">
                      </div>
                    </form>
                </div>
               
             </div>';
             if(isset($_GET["error"])){
              if($_GET["error"] == "stmtFailed"){
                echo "<p class = 'text-danger text-center lead'>Something went wrong. Please start again.</p>";
              }
            }else if(isset($_GET["mail"])) {
              if($_GET["mail"] == "send" ){
                echo'<script>
                $(document).ready(function(){
                  Swal.fire({
                    position: "center",
                    icon: "success",
                    title: "Message has been sent succesfuly!",
                    showConfirmButton: false,
                    timer: 1500                 
                  })
                });                 
                </script>';
              }else if($_GET["mail"] == "notSend") {
                echo '<script>
                $(document).ready(function(){
                  Swal.fire({
                    position: "center",
                    icon: "error",
                    title: "Email has not been send. Please try again.",
                    showConfirmButton: false,
                    timer: 1500                 
                  })
                });                 
                </script>';
              }
            }
              }            
             ?>

             
            </div>
            <div class="col-md-5 section-md-t3">
              <div class="icon-box section-b2">
                <div class="icon-box-icon">
                  <span class="ion-ios-paper-plane"></span>
                </div>
                <div class="icon-box-content table-cell">
                  <div class="icon-box-title">
                    <h4 class="icon-title">Say Hello</h4>
                  </div>
                  <div class="icon-box-content">
                    <p class="mb-1">Email.
                      <span class="color-a">apm.smarthouses@gmail.com</span>
                    </p>
                    <p class="mb-1">Phone.
                      <span class="color-a">+357 99436309, +357 99252247, +30 6943059942</span>
                    </p>
                  </div>
                </div>
              </div>
              <div class="icon-box">
                <div class="icon-box-icon">
                  <span class="ion-ios-redo"></span>
                </div>
                <div class="icon-box-content table-cell">
                  <div class="icon-box-title">
                    <h4 class="icon-title">Social networks</h4>
                  </div>
                  <div class="icon-box-content">
                    <div class="socials-footer">
                      <ul class="list-inline">
                        <li class="list-inline-item">
                          <a href="#" class="link-one">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                          </a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#" class="link-one">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                          </a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#" class="link-one">
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
      </div>
    </div>
  </section>
  <!--/ Contact End /-->

<!--Footer-->
<?php
      include_once "includes/footer.inc.php";
  ?>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  

</body>

</html>