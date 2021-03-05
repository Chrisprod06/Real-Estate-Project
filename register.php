<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Register | APM Smart Houses</title>
<link href="img/favicon.png" rel="icon">
<link href="img/apple-touch-icon.png" rel="apple-touch-icon">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="css/style.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style>
	.login-form {
		width: 340px;
    	margin: 50px auto;
	}
    .login-form form {
    	margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .btn {        
        font-size: 15px;
        font-weight: bold;
    }
</style>
</head>
<body>
<div class="login-form">
   
    <form action="includes/reguser.inc.php" method="post">
        <h2 class="text-center">Create an account</h2>
        <div class="form-group">
            <input name= "firstname" type="text" class="form-control" placeholder="Firstname" required="required">
        </div>
        <div class="form-group">
            <input name= "lastname" type="text" class="form-control" placeholder="Lastname" required="required">
        </div>       
        <div class="form-group">
            <input name= "email" type="email" class="form-control" placeholder="Email" required="required">
        </div>
        <div class="form-group">
            <input name= "telephone" type="tel" class="form-control" placeholder="Telephone" required="required">
        </div>
        <div class="form-group">
            <input name= "password" type="password" class="form-control" placeholder="Password" required="required">
        </div>
        <div class="form-group">
            <input name= "rePassword" type="password" class="form-control" placeholder="Re-enter Password" required="required">
        </div>
        <!--PHP script to display-->
        <?php
        if(isset($_GET['error']))
        {
            if($_GET['error'] == 'emptyinput')
            {          
            echo '<p class = "text-danger text-center " >Fill in all the fields!</p>';

            }

            if($_GET['error'] == 'emailExists')
            {
            echo '<p class = "text-danger text-center " >User already exists!</p>';
            }
            
            if($_GET['error'] == 'passworddontmatch')
            {
            echo '<p class = "text-danger text-center " >The passwords must match!</p>';
            }

            if($_GET['error'] == 'invalidemail')
            {
                echo '<p class = "text-danger text-center " >The email you have entered is invalid!</p>';
            }
            
            if($_GET['error'] == 'stmtfailed')
            {
                echo '<p class = "text-danger text-center " >Something went wrong, try again!</p>';
            }

            if($_GET['error'] == 'none')
            {
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
            <button name= "submit" type="submit" class="btn btn-a">Register</button>
        </div>
              
    </form>
    
    <p class="text-center">Already have an account? <a href="login.php">Log in</a></p>
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