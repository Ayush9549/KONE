<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Document</title>
		<link rel="stylesheet" type="text/css" href="./assets/css/gl.css">
	</head>
	<body>
		<!-------------- Login Button -------------------->
		
		<div class="blur" onclick="closeLoginForm()"></div>
		<!-------------- Login popup container -------------------->
		<div class="main-container">
			<div class="login_container">
				<!-------------- Login popup left side bar content -------------------->
				<div class="box1">
					<div class="txt">
						<div class="title">Login</div>
						<div class="text">Get Access to your Orders ,wishlist and Recommendations</div>
					</div>
					
					<div class="imgs">
						<img src="./assets/img/laptop.svg">
						<img style="filter: invert(100%);" src="./assets/img/phn.svg">
					</div>
					
				</div>
				<!-------------- Login popup right side bar content -------------------->
				<div class="box2">
					<form class="log-form" action="login.php" method="post">
						<div class="login_form_close" onclick="closeLoginForm()">X</div>
						<div class="email_area">
							<input name="email" class="email input" type="text" placeholder="Enter email">
							<img class="valid" src="./assets/img/check.png" alt="">
						</div>
						<div class="email_error">Please Enter correct email</div>
						<div class="pass_area">
							<input name="password" class="password input" type="password" method="post" placeholder="Enter Password">
							<img class="valid" src="./assets/img/check.png" alt="">
						</div>
						<div class="pass_error">Please enter correct password</div>
						<button class="log-btn">LOGIN</button>
						<a class="forgot_pass" href="#">Forgot password?</a>
						<a class="create_new_account" href="#" onclick="register()">Create New Account</a>
					</form>
					
				</div>
			</div>
		</div>
		<!------------------------Register Page------------------------>
		<div class="main-container1">
			<div class="container1">
				<!-------------- Register popup right side bar content -------------------->
				<div class="box3">
					<div class="txt1">
						<div class="title1">Looks like you're new here!</div>
						<div class="text1">Sign up with your mobile number to get started</div>
					</div>
					<div class="imgs">
						<img src="./assets/img/laptop.svg">
						<img style="filter: invert(100%);" src="./assets/img/phn.svg">
					</div>
				</div>
				<!-------------- Register popup right side bar content -------------------->
				<div class="box4">
					<!-------------------- Close Btn ----------------->
					<div class="close" onclick="closeLoginForm()">X</div>
					<form class="reg-form">
						<input type="text" name="name" placeholder="Enter Name" class="name input">
						<div class="email_area">
							<input name="email" class="email" type="text" placeholder="Enter email">
							<img class="valid" src="./assets/img/check.png" alt="">
						</div>
						<div class="email_error">Please enter valid email</div>
						<div class="pass_area">
							<input name="password" class="password input" type="password" method="post" placeholder="Enter Password">
							<img class="valid" src="./assets/img/check.png" alt="">
						</div>
						<div class="pass_error">Invalid Password<span>6 Digit</span></div>
						<!-- <input type="text" name="reg" placeholder="Enter Password" class="pass pasword"> -->

						<input type="text" name="reg" placeholder="Enter Confirm Password " class="conf-pass input">
						<button class="reg-btn">REGISTER</button>
					</form>
				</div>
			</div>
		</div>
		
		
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.0.js"></script>
		<script type="text/javascript" src="./assets/js/gl.js"></script>
	</body>
</html>