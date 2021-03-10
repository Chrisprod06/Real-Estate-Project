<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Unsubscribe | APM Smart Houses</title>
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

    <?php
        session_start();
        if(!isset($_SESSION['userID'])){
            echo '<div class="login-form">
                <form action="includes/login.inc.php" method="POST">
                    <h2 class="text-center">Unsubscribe from newsletter</h2>       
                    <p class="text-center">Please login in order to be able to unsubscribe.</p>
                    <div class="form-group">
                        <button type="submit" value="sumbit" class="btn btn-primary btn-block">Login</button>
                    </div>
                </form>
            </div>';

        }else{
            echo'<div class="login-form">
                <form action="includes/delnews.inc.php" method="POST">
                    <h2 class="text-center">Unsubscribe from newsletter</h2>       
                    <p class="text-center">We are sorry to see you go.</p>
                    <div class="form-group">
                        <button type="submit" value="sumbit" class="btn btn-primary btn-block">Unsubscribe</button>
                    </div>
                </form>
            </div>';

             
            } 
        
        if(isset($_GET['error'])){    
            if($_GET['error'] == 'stmtFailed')
                {
               echo '<p class = "text-danger text-center " >Something went wrong, try again!</p>';
                }
        
            else if ($_GET['error'] == 'none' )
                {
                echo '<p class = "text-danger text-center " >Unsubscribed Successfully.</p>';
                }
        
        
                        }          
               ?>
             
             
    
</div>
</body>
</html>                                		