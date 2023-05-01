<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>K ONE STORE</title>
		<link rel="stylesheet" type="text/css" href="./assets/css/grocery.css">
	</head>
	<body>
		<div class="navigation-bar">
			<?php
			include './navigation.php';
			?>
		</div>
		<div class="space"></div>
		<div class="add_new_address">+ Add New Address</div>
		<address class="address_container">
			<div>
			<div class="add_new_address_title">Add New Address</div>
			<div class="full_name"><input type="text" placeholder="Full Name (Required)*"><div class="error">Please provide the necessary details.</div></div>
			<div class="phone"><input type="text" placeholder="Phone Number (Required)*"><div class="error">Please provide the necessary details.</div></div>
			<div class="pincode"><input type="text" placeholder="Pincode (Required)*"><div class="error">Please provide the necessary details.</div></div>
			<div class="state"><input type="text" placeholder="State (Required)*"><div class="error">Please provide the necessary details.</div></div>
			<div class="city"><input type="text" placeholder="City (Required)*"><div class="error">Please provide the necessary details.</div></div>
			<div class="add"><input type="text" placeholder="House No.,Flat No.,Building Name (Required)*"><div class="error">Please provide the necessary details.</div></div>
			<div class="road_area_colony"><input type="text" placeholder="Road name, Area, Colony (Required)*"><div class="error">Please provide the necessary details.</div></div>
			<div class="address_btn"><button>Save Address</button> <button>Cancle</button></div>
			</div>
		</address>
		<footer>
			<?php
			include './footer.php'
			?>
		</footer>
		<script type="text/javascript" src="./assets/js/grocery.js"></script>
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.0.js"></script>
	</body>
</html>