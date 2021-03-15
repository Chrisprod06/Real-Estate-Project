<?php
session_start();
//Check it is comming from a form
if ($_SERVER["REQUEST_METHOD"] == "POST") {

	include_once "dbh.inc.php";

	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$telephone = $_POST['telephone'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$rePassword = $_POST['rePassword'];
	$token = $_POST['token'];
	$role = 2;
	$useractive = 0;


	//Error Handlers

	if ($password != $rePassword) {
		if ($token == '5') {
			echo 'Passwords don\'t match';
			exit();
		}
		$_SESSION['lastVisitedPage'] .= '?error=passworddontmatch&modal=register';
		header('location: ' . $_SESSION['lastVisitedPage']);
		exit();
	}

	$select = mysqli_query($conn, "SELECT `email` FROM `users` WHERE `email` = '" . $_POST['email'] . "'") or exit(mysqli_error($conn));
	if (mysqli_num_rows($select)) {
		if ($token == '5') {
			echo 'Email already exists';
			exit();
		}
		$_SESSION['lastVisitedPage'] .= '?error=emailExists&modal=register';
		header('location: ' . $_SESSION['lastVisitedPage']);

		exit();
	}

	if (empty($firstname || $lastname || $telephone || $email || $password || $role  || $useractive)) {
		$_SESSION['lastVisitedPage'] .= '?error=emptyinput&modal=register';
		header('location: ' . $_SESSION['lastVisitedPage']);

		exit();
	}

	if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
		if ($token == '5') {
			echo 'Please enter a valid email';
			exit();
		}
		$_SESSION['lastVisitedPage'] .= '?error=invalidemail&modal=register';
		header('location: ' . $_SESSION['lastVisitedPage']);
		exit();
	}

	$hashedPassword = password_hash($password, PASSWORD_DEFAULT);
	//In the statement use the names of the variables from the database
	$sql = 'INSERT INTO users (firstname,lastname,phoneNo,email,password,role,userActive) VALUES(?, ?, ?, ?, ?, ?, ?);';
	$stmt = mysqli_stmt_init($conn);
	mysqli_stmt_prepare($stmt, $sql);
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	mysqli_stmt_bind_param($stmt, 'ssissii', $firstname, $lastname, $telephone, $email, $hashedPassword, $role, $useractive); //bind values and execute insert query

	if (mysqli_stmt_execute($stmt)) {
		if ($token == '5') {
			echo 'test';
			exit();
		}

		$_SESSION['lastVisitedPage'] .= '?error=none&modal=register';
		header('location: ' . $_SESSION['lastVisitedPage']);
		exit();
	} else {
		if ($token == '5') {
			echo 'no test';
			exit();
		}
		$_SESSION['lastVisitedPage'] .= '?error=stmtFailed&modal=register';
		header('location: ' . $_SESSION['lastVisitedPage']);
		exit();
	}

	mysqli_stmt_close($stmt);
} else {

	header('location: ' . $_SESSION['lastVisitedPage']);
	exit();
}
