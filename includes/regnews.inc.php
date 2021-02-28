<?php

//Check it is comming from a form
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{

	include_once "dbh.inc.php";
	
	//set PHP variables like this so we can use them anywhere in code below
	$email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);

	
	if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
		die("Please enter valid email address");
	}
		
	
	$statement = $conn->prepare("INSERT INTO newsletter (email) VALUES(?)"); //prepare sql insert query
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	$statement->bind_param('s', $email); //bind values and execute insert query
	
	if($statement->execute()){
		print "You have subscribed successfully!";
	}else{
		print $conn->error; //show mysql error if any
	}
}
?>
