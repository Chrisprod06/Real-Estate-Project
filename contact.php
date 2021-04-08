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
            <h1 class="title-single"><?php echo $lang['ccontact'] ?></h1>
            <span class="color-text-a">
              <p class="text-justify"> <?php echo $lang['contactparagraph'] ?>
              </p>
            </span>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.php"><?php echo $lang['chome'] ?></a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                <?php echo $lang['ccontact'] ?>
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
            <div class="col-lg-12 d-flex justify-content-center">
              <?php
              if (!isset($_SESSION['userID'])) {
                echo '<div class="col-md-5 col-lg-5 text-center">
                <div class="property-contact">
                  <form class="form-a">
                    <div class="row mt-4">
                    ' . $lang['cmessage'] . '
                      </p>            
                      <div class="col-md-12 mt-5">
                        <a data-toggle = "modal" href = "#login" class="btn btn-a">Login</a>
                      </div>
                    </div>
                  </form>
                </div>
              </div>';
              } else {
                echo '
                <div class="col-md-12 col-lg-10 text-center">
                  <div class="property-contact">
                    <form class = "form-a" action="includes/contactUs.inc.php" method = "POST">
                      <div class="form-group">
                        <input class = "form-control" id = "subject" type="text" name = "subject" placeholder="' . $lang['csubject'] . '" required>
                      </div>
                      <div class="form-group">
                      <textarea id="message" class="form-control" id = "message" placeholder="' . $lang['ctext'] . '" name="message" cols="45"
                                  rows="8" required></textarea>
                      </div>
                      <div class="form-group">
                        <input type="submit" class = "btn btn-a" value = "' . $lang['cbutton'] . '" name = "submit">
                      </div>
                    </form>
                </div>
               
             </div>';
                if (isset($_GET["error"])) {
                  if ($_GET["error"] == "stmtFailed") {
                    echo "<p class = 'text-danger text-center lead'>Something went wrong. Please start again.</p>";
                  }
                } else if (isset($_GET["mail"])) {
                  if ($_GET["mail"] == "send") {
                    echo '<script>
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
                  } else if ($_GET["mail"] == "notSend") {
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
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Contact End /-->
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



  </body>

  </html>