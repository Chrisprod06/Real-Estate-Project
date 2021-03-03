<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login | APM Smart Houses</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="css/style.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 


</head>
<body>
<div class="login-form">
    <form action="includes/login.inc.php" method="POST">
        <h2 class="text-center">Login</h2>       
        <div class="form-group">
            <input type="email" name = "email" class="form-control" placeholder="Email" required="required" value =>
        </div>
        <div class="form-group">
            <input type="password" name = "pass" class="form-control" placeholder="Password" required="required">
        </div>
        <div class="form-group">
        <input type="submit" class="btn btn-a" value ="Login" name = "submitLogin"></input>
        </div>
        <!--Error messages-->
        <?php
            if(isset($_GET['error'])){
                if($_GET['error'] == 'wrongLogin'){
                    echo '<p class = "text-danger text-center lead">This user does not exist.</p>';
                }
                else if ($_GET['error'] == 'wrongPassword'){
                    echo '<p class = "text-danger text-center lead">The password you have entered is incorrect.</p>';
                }
                else if ($_GET['error'] == 'stmtFailed'){
                    echo '<p >Something went wrong. Please try again.</p>';
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
    </form>
   
</div>

<!--Sweet Alert-->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<!-- JavaScript Libraries -->
<script src="lib/jquery/jquery.min.js"></script>
<script src="lib/jquery/jquery-migrate.min.js"></script>
<script src="lib/popper/popper.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/scrollreveal/scrollreveal.min.js"></script>

</body>
</html>                                		