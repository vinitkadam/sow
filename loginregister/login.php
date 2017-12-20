<?php
require("config.php");
$email = trim($con->real_escape_string($_POST['email']));
$password = trim($con->real_escape_string($_POST['password']));

$query = "select * from user where email='$email'  and password='$password' ";

if($result = $con->query($query))
{
	if($result->num_rows>0)
	{
		session_start();
		$_SESSION['email'] = $email;
		header("location: ../index.html");
	}else{
		echo "<string type='text/javascript'>alert('Email/password is incorrect. Please try again')</script>";
		header("Refresh: 0 url=index.html");
	}
}

?>