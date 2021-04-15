<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    $email =$_POST['email'];

    $sql = 'DELETE FROM newsletter where email = "'.$email.'" ;';
	$stmt = mysqli_stmt_init( $conn);
	mysqli_stmt_prepare($stmt,$sql);
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	//bind values and execute insert query
	mysqli_stmt_bind_param($stmt,'s', $email); 

    if(mysqli_stmt_execute($stmt)){
		header('location: ../unsubscribeNewsletter.php?unsubscribe=success');
        exit();
	}else{
		header('location: ../unsubscribeNewsletter.php?error=stmtFailed');
        exit();
	}

	mysqli_stmt_close($stmt);


}else{
    header('Location: ../unsubscribeNewsletter.php');
    exit();
}