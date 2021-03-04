<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Reset Password Request | APM Smart Houses</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
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
    <form action="/examples/actions/confirmation.php" method="post">
        <h2 class="text-center">Reset your password</h2>  
        <p class = "text-center">Type your email and we will send you instructions on how to reset your password.</p>     
        <div class="form-group">
            <input type="email" name = "email" class="form-control" placeholder="Email" required="required">
        </div>
        <!--Error messages-->
        <?php
            if(isset($_GET['error'])){       
                if ($_GET['error'] == 'stmtFailed'){
                    echo '<p class = "text-danger text-center " >Something went wrong. Please try again.</p>';
                }
            }
            
            if (isset($_GET['request'])){
                if($_GET['request'] == 'success'){
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
                }else if ($_GET['request'] == 'fail'){
                    echo '<p class = "text-danger text-center " >Something went wrong. Please try again.</p>';
                }

            }
        ?>

        <div class="form-group">
            <button type="submit" name = "submitResetPasswordRequest" class="btn btn-a">Send Request</button>
        </div>             
    </form>
    
</div>
</body>
</html>                                		