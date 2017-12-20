<?php 
require("config.php");
$fname = trim($con->real_escape_string($_POST['first']));
$lname = trim($con->real_escape_string($_POST['last']));
$email = trim($con->real_escape_string($_POST['email']));
$phone = trim($con->real_escape_string($_POST['phone']));
$password = trim($con->real_escape_string($_POST['password']));
$cpassword = trim($con->real_escape_string($_POST['cpassword']));

if($password != $cpassword)
{
	echo "<script type='text/javascript'>alert('passwords did not match please try again')</script>";
	header("Refresh:0; url=index.html");
}else{
	$query = "INSERT INTO user(fname,lname,email,password) values('$fname','$lname','$email','$password')";
	if(mysqli_query($con,$query))
	{
		echo "<script type='text/javascript'>alert('Registration successfull')</script>";
		header("Refresh:0; url=../index.html");
		session_start();
		$_SESSION['email'] = $email;
	}else{
		echo "Something went wrong. Please try again".$con->error;
	}
}





?>