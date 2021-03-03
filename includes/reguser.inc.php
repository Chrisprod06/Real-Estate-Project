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
	$useractive = 1;


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

	//In the statement use the names of the variables from the database
	$statement = $conn->prepare("INSERT INTO users (firstname,lastname,phoneNo,email,password,role,userActive) VALUES(?, ?, ?, ?, ?, ?, ?)"); //prepare sql insert query
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	$statement->bind_param('ssissii', $firstname,$lastname,$telephone,$email,$password,$role,$useractive); //bind values and execute insert query
	
	if($statement->execute()){
		header('location: ../register.php?error=none');
        exit();
	}else{
		header('location: ../register.php?error=stmtfailed');
        exit();
	}
}
?>
