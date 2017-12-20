<?php
	session_start();
	unset($_SESSION['logout']);
	echo "<script type='text/javascript'>alert('Logout successfull')</script>";
	header("Refresh: 0; url=../index.html");
	session_destroy();
?>