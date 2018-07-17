<?php 
session_start();
require_once('functions.php');

if(!logged_in()){
	header('location:index.php');
}

if (isset($_POST['send'])) {

	$email    = $_SESSION['email'];
	$message = $_POST['message'];


	$query = $connection->query("INSERT INTO conversation(email,message) VALUES('$email','$message')"); 
	


die();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Chat</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="assets/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="assets/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
	<div class="container-login100">
		<a href="logout.php"><button class="login100-form-btn logut_style">Logout</button></a>
			<div class="chatbox-holder">
  				<div class="chatbox">
  					<p class="fullname">Imtiaz Epu: Hi</p>
  				</div>

  					<form action="" method="POST" class="sendmessage chat-input-holder">
	    				<input class="chat-input type_input blank message" type="text" placeholder="Type Somthing" name="message">
	      				<input type="submit" value="Send" class="message-send" name="send" />
	      			</form>
				
  			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/bootstrap/js/popper.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="assets/js/main.js"></script>

</body>
</html>
