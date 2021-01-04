<?php session_start(); ?>
<?php
	require "../config.php";
	require "../models/db.php";
	require "../models/user.php";

	$user = new User;

	if(isset($_POST['submit'])) {
		if (!isset($_POST['user'])) {
			$mess_err = "Username is required";
		} elseif (!isset($_POST['pass'])) {
			$mess_err = "Password is required";
		} elseif (!isset($_POST['passAgain'])) {
			$mess_err = "Password again is required";
		} else {
			$username = $_POST['user'];
			if ($_POST['passAgain'] != $_POST['pass']) {
				$mess_err = "Password confirm are not matching";
			} else {
				$password = $_POST['pass'];
				$hashPass = password_hash($password, PASSWORD_DEFAULT);
				$password_again = $_POST['passAgain'];
			}
		}

		$login = $user->register($username,$hashPass);
		if (!isset($mess_err)) {
			header('Location:index.php');
		} else {
			$mess_err = "Something went wrong. Please try again later.";
		}
	}

	//var_dump($username,$password,$password_again,$hashPass);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" href="../../public/images/icon/logo.png" type="image/icon type">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>


	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

				<form action="register.php" method="post" class="login100-form validate-form">
					<span class="login100-form-title">
						Register
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid user is required">
						<input class="input100" type="text" name="user" placeholder="Username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Password again is required">
						<input class="input100" type="password" name="passAgain" placeholder="Password Again">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					<?php 
					if (isset($mess_err)) { ?>
					<span style="color: red; font-size: 12px;"><?=$mess_err?></span>
					<?php } ?>
					<div class="container-login100-form-btn">
						<button type="submit" name="submit" class="login100-form-btn">
							Register
						</button>
					</div>
					<div class="text-center p-t-136">
						Already have an account?
						<a class="txt2" href="index.php">
							Login here
							<!-- <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i> -->
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>