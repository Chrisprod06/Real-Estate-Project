<?php
$title = "Reset Password Request | APM Smart Houses";
include_once 'includes/header.inc.php';
?>
<section class="intro-single">
    <div class="login-form">
        <form action="includes/resetPasswordRequest.inc.php" method="post">
            <h2 class="text-center">Reset your password</h2>
            <p class="text-center">Type your email and we will send you instructions on how to reset your password.</p>
            <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Email" required="required">
            </div>
            <!--Error messages-->
            <?php
            if (isset($_GET['error'])) {
                if ($_GET['error'] == 'stmtFailed') {
                    echo '<p class = "text-danger text-center " >Something went wrong. Please try again.</p>';
                }else if ($_GET['error'] == 'tryAgainReset'){
                    echo '<p class = "text-danger text-center " >Reset went wrong. Please try again.</p>';
                }
            }

            if (isset($_GET['request'])) {
                if ($_GET['request'] == 'success') {
                    echo '
                    <script>
                    $(document).ready(function(){
                      Swal.fire({
                        position: "center",
                        icon: "success",
                        title: "Your request has been sent! Please check your inbox.",
                        showConfirmButton: false,
                        timer: 1500                 
                      }).then(function() {
                        window.location.href = "index.php";
                      })
                    });                 
                    </script>
                    ';
                } else if ($_GET['request'] == 'fail') {
                    echo '<p class = "text-danger text-center " >Something went wrong. Please try again.</p>';
                }
            }
            ?>

            <div class="form-group">
                <button type="submit" name="submitResetPasswordRequest" class="btn btn-a">Send Request</button>
            </div>
        </form>

    </div>
</section>

<?php
include_once "includes/footer.inc.php";
?>