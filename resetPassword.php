<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Reset Password | APM Smart Houses</title>
<!-- Main Stylesheet File -->
<link href="css/style.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
    <form action="includes/resetPassword.inc.php" method="post">
        <h2 class="text-center">Change Password</h2>       
        <div class="form-group">
            <input type="hidden" class="form-control" name = "selector" value = "<?php echo $_GET['selector']?>">
        </div>
        <div class="form-group">
            <input type="hidden" class="form-control" name = "validator" value = "<?php echo $_GET['validator']?>">
        </div>
        <div class="form-group">
            <input type="password" name = "pass" class="form-control" placeholder="Password" required="required">
        </div>
        <div class="form-group">
            <input type="password" name = "rePass" class="form-control" placeholder="Re-enter Password" required="required">
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
</body>
</html>                                		