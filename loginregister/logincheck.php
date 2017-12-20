<?php
require("config.php");
session_start();
if(isset($_SESSION['email']))
{
	$response['login_status'] = true;
}else {
	$response['login_status'] = false;
}
echo json_encode($response);

?>