<!DOCTYPE html>
<html>
<title>Events:Rait Social Wing</title>
    
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
<link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-deep-purple.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="css/thumbnail-slider.css" rel="stylesheet" type="../text/css" />

<style>
    h1,body {font-family: 'Acme', sans-serif;}
     
</style>

<body>
<!-- Header -->
<div class="w3-center w3-card-2 w3-container w3-top w3-padding-16 w3-theme-d3"  >
    
    <div class=" w3-padding w3-display-topleft w3-circle ">
      <img src="../images/logo1.png" style="width: 80px">
    </div>
    
   <br>
    <div class="w3-bar ">
      <a href="images/#" class="w3-border w3-round-xxlarge w3-border-white w3-bar-item w3-button w3-hover-deep-purple w3-margin-right" >Home</a> 
        <div class="w3-dropdown-hover">
            <button class="w3-button  w3-border w3-border-white w3-hover-deep-purple w3-margin-right  w3-round-xxlarge">Events</button>
            <div class="w3-dropdown-content  w3-bar-block w3-card-24 w3-border w3-border-deep-purple">
              <a href="images/#" class="w3-bar-item w3-button w3-hover-deep-purple">Udaan: A Dream Run</a>
              <a href="images/#" class="w3-bar-item w3-button w3-hover-deep-purple">Donation Drive</a>
              <a href="images/#" class="w3-bar-item w3-button w3-hover-deep-purple">Tree Plantaion</a>
              <a href="images/#" class="w3-bar-item w3-button w3-hover-deep-purple">Joyfest</a>
              <a href="images/#" class="w3-bar-item w3-button w3-hover-deep-purple">Clean Up Drive</a>
              <a href="images/#" class="w3-bar-item w3-button w3-hover-deep-purple">Celebrations</a>
              <a href="images/#" class="w3-bar-item w3-button w3-hover-deep-purple">Teaching at Girija</a>
              <a href="images/#" class="w3-bar-item w3-button w3-hover-deep-purple">Street Play & Wall Painting</a>
            </div>
          </div>
      <a href="images/#" class="w3-bar-item w3-button w3-border w3-border-white w3-hover-deep-purple w3-round-xxlarge">About US</a>
      <a href="images/#" class="w3-bar-item w3-button w3-hide-small w3-border w3-hide-medium w3-border-white w3-hover-deep-purple w3-margin-left w3-round-xxlarge">Contact</a>
      <a href="images/#" class="w3-bar-item w3-button w3-hide-small w3-border w3-border-white w3-hover-deep-purple w3-margin-left w3-round-xxlarge">Donate </a>
      <a href="loginregister/" class="w3-bar-item w3-button w3-hide-small w3-border w3-border-white w3-deep-purple w3-hover-deep-purple w3-white w3-margin-left w3-round-xxlarge">Login/Register</a>
    </div>
  
</div>

<div style="padding-top: 200px; margin-top: 100px;">
<?php
	$Name = $_POST['Name'];
	$Email = $_POST['Email'];
	$Subject = $_POST['Subject'];
	$Message = $_POST['Message'];
	require '../PHPMailer/PHPMailerAutoload.php';
	date_default_timezone_set('Asia/Kolkata');
	$mail = new PHPMailer;
	$mail->isSMTP();
	$mail->SMTPDebug = 1;
	$mail->Debugoutput = 'html';
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = 587;
	$mail->SMTPSecure = 'tls';
	$mail->SMTPAuth = true;
	$mail->Username = "emssystememail@gmail.com";
	$mail->Password = "emssystem@123";
	$mail->setFrom('emssystememail@gmail.com', 'Ems system contact us');
	$mail->addAddress('emssystememail@gmail.com');
	if ($mail->addReplyTo($Email, $Name)) {
        $mail->Subject = 'Social Wing contact form';
        //Keep it simple - don't use HTML
        $mail->isHTML(false);
        //Build a simple message body
        $mail->Body = '<b>Name:</b> '.$Name.'<br><b>Email: </b>'.$Email.'<br><b>Subject: </b>'.$Subject.'<br><b>Message:</b><br>'.$Message;
        //Send the message, check for errors
        if (!$mail->send()) {
            //The reason for failing to send will be in $mail->ErrorInfo
            //but you shouldn't display errors to users - process the error, log it on your server.
            $msg = 'Sorry, something went wrong. Please try again later.:'.$mail->ErrorInfo;
        } else {
            $msg = 'Message sent! Thanks for contacting us. we will get back to you soon';
        }
    } else {
        $msg = 'Invalid email address, message ignored.';
    }
    echo $msg;
?>
</div>
</body>
</html>