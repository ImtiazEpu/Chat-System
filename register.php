<?php 
require_once('functions.php');

session_start();

if(logged_in()){
	header('location:chat.php');
}

if (isset($_POST['registration'])) {

	$firstname = $_POST['firstname'];
	$lastname  = $_POST['lastname'];
	$email     = $_POST['email'];
	$password  = md5($_POST['password']);

	$check = $connection->query("SELECT * FROM user WHERE email ='$email'");
	if (mysqli_num_rows($check)>=1) {
		echo "Email Already exits";
	}
	else {
		$query = $connection->query("INSERT INTO user(firstname,lastname,email,password) VALUES('$firstname','$lastname','$email','$password')"); 

		if ($query) {
			echo "You have been registered successfully";
		}
	}
	die();

}
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<title>Create Account</title>
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
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="assets/images/img-01.png" alt="IMG">
				</div>

				<form action="" method="POST" class="login100-form userregistration">
					<span class="login100-form-title">
						Create an Account
					</span>

					<div class="wrap-input100">
						<input class="input100 blank" type="text" name="firstname" placeholder="First Name">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-address-book-o" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100">
						<input class="input100 blank" type="text" name="lastname" placeholder="Last Name">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-address-book-o" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100">
						<input class="input100 blank" type="email" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100">
						<input class="input100 blank" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" value="register" name="registration">Register</button>
					</div>

					<div class="success"></div>

					<div class="text-center p-t-136">
						<div class="txt2">
							Already have an account? <a href="login.php"><span style="font-weight: 700;margin-left: 5px;">Please Login</span>
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i></a>
						</div>
					</div>
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