<?php
$title = "Edit Profile | APM Smart Houses";
include_once 'includes/header.inc.php';
?>


<div class="login-form ">

    <form action="includes/reguser.inc.php" method="post">
        <h2 class="text-center">Create an account</h2>
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

            if ($_GET['error'] == 'none') {
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
        <div class="form-group">
            <button name="submit" type="submit" class="btn btn-a">Register</button>
        </div>

    </form>

    <p class="text-center">Already have an account? <a href="login.php">Log in</a></p>
</div>






<?php

include_once 'includes/footer.inc.php';
?>