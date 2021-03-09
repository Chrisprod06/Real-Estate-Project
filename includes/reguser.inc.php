<?php

//Check it is comming from a form
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{

	include_once "dbh.inc.php";
	
	$firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $telephone = $_POST['telephone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $rePassword = $_POST['rePassword'];
	$role = 2;
	$useractive = 0;


	//Error Handlers
	if($password != $rePassword)
	{
		header('location: ../register.php?error=passworddontmatch');
        exit();
	}

	$select = mysqli_query($conn, "SELECT `email` FROM `users` WHERE `email` = '".$_POST['email']."'") or exit(mysqli_error($conn));
	if(mysqli_num_rows($select)) 
	{
    	header('location: ../register.php?error=emailExists');
    	exit();
	}

	if(empty($firstname || $lastname || $telephone || $email || $password || $role  || $useractive))
	{
		header('location: ../register.php?error=emptyinput');
        exit();
	}

	if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
		header('location: ../register.php?error=invalidemail');
        exit();
	}

	$hashedPassword = password_hash($password,PASSWORD_DEFAULT);
	//In the statement use the names of the variables from the database
	$sql = 'INSERT INTO users (firstname,lastname,phoneNo,email,password,role,userActive) VALUES(?, ?, ?, ?, ?, ?, ?);';
	$stmt = mysqli_stmt_init( $conn);
	mysqli_stmt_prepare($stmt,$sql);
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	mysqli_stmt_bind_param($stmt,'ssissii', $firstname,$lastname,$telephone,$email,$hashedPassword,$role,$useractive); //bind values and execute insert query
	
	if(mysqli_stmt_execute($stmt)){
		header('location: ../login.php?error=none');
        exit();
	}else{
		header('location: ../login.php?error=stmtFailed');
        exit();
	}

	mysqli_stmt_close($stmt);
}
?>
