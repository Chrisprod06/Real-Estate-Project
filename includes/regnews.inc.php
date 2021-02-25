<?php

if(isset($_POST['sumbit']))
{
	include_once "dbh.inc.php";
	$email = mysqli_real_escape_string($conn,$_POST['email']);

	if(!filter_var($email, FILTER_VALIDATE_EMAIL))
		{
        header("Location: ../index.php?entry=invalidemail");
        exit();
		}

	else
		{
		$sql = "INSERT INTO newsletter(email) VALUES(?);";

		$stmt = mysqli_stmt_init($conn);
		

		if(!mysqli_stmt_prepare($stmt,$sql))
		{
			echo "SQL error";
		}
	
		else
		{
			mysqli_stmt_bind_param($stmt,"s", $email);
			mysqli_stmt_execute($stmt);
		}

		
		header("Location: ../index.php?entry=success");
	}
}

else
{

	header("Location: ../index.php?entry=error");

}
