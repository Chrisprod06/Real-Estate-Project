<?php
$title = "Reset Password Request | APM Smart Houses";
include_once 'includes/header.inc.php';
?>
<section class="intro-single">
<div class="login-form">
    <form action="includes/resetPassword.inc.php" method="post">
        <h2 class="text-center">Change Password</h2>       
        <div class="form-group">
            <input type="hidden" class="form-control" name = "selector" value = "<?php echo $_GET['selector']?>">
        </div>
        <div class="form-group">
            <input type="hidden" class="form-control" name = "validator" value = "<?php echo $_GET['validator']?>">
        </div>
        <div class="form-group">
            <input type="password" name = "pass" class="form-control" minlength="6" placeholder="Password" required="required">
        </div>
        <div class="form-group">
            <input type="password" name = "rePass" class="form-control" minlength="6" placeholder="Re-enter Password" required="required">
        </div>
         <!--Error messages-->
         <?php
            if(isset($_GET['error'])){       
                if ($_GET['error'] == 'stmtFailed'){
                    echo '<p class = "text-danger text-center " >Something went wrong. Please try again.</p>';
                }
                else if ($_GET['error'] == 'passwordDontMatch'){
                    echo '<p class = "text-danger text-center " >Passwords must match.</p>';
                }
                else if ($_GET['resetPassword'] == 'success'){
                    echo '
                    <script>
                    $(document).ready(function(){
                      Swal.fire({
                        position: "center",
                        icon: "success",
                        title: "Password changed successfuly!",
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
        <div class="form-group">
            <button type="submit" name = "submitResetPassword" class="btn btn-a">Change Password</button>
        </div>
       

              
    </form>
    
</div>
</section>

<?php
include_once "includes/footer.inc.php";
?>


                              		