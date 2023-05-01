<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="./assets/css/grocery.css">
</head>
<body>
	

<div class="navigation-bar">
	<?php
	include './navigation.php';
	?>
</div>

<div class="menu_conatiner">
	<div class="close">X</div>
	<div class="profile menu_list">Profile</div>
	<div class="mywishlist menu_list">My Wishlist</div>
	<a href="./add_to_cart.php"><div class="myorders menu_list">My Cart</div></a>
	<a href="#"><div class="myorders menu_list">My Orders</div></a>
	<a href="logout.php"><div class="logout menu_list">Logout</div></a>
</div>


<footer>
	<?php
		include './footer.php';
	?>
</footer>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.0.js"></script>
		<!-- <script type="text/javascript" src="./assets/js/popular_offer_data.js"></script> -->
		<script type="text/javascript" src="./assets/js/grocery.js"></script>
</body>
</html>