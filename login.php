<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap Simple Login Form</title>
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
            <input type="email" name = "email" class="form-control" placeholder="Email" required="required">
        </div>
        <div class="form-group">
            <input type="password" name = "pass" class="form-control" placeholder="Password" required="required">
        </div>
        <div class="form-group">
        <input type="submit" class="btn btn-a" value ="Login" name = "submitLogin"></input>
        </div>
        <div class="clearfix">
            <label class="pull-left checkbox-inline"><input type="checkbox"> Remember me</label>
            <a href="renewPassword.php" class="pull-right">Forgot Password?</a>
        </div>        
    </form>
    <p class="text-center"><a href="register.php">Create an Account</a></p>
</div>
</body>
</html>                                		