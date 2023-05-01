<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>K ONE STORE DASHBORD</title>
		<link rel="stylesheet" type="text/css" href="./assets/css/admin_panel.css">
	</head>
	<body>
		<div class="products_container">
			<nav class="navbar">
				<?php
				include "./admin_navbar.php"
				?>
			</nav>
			<div class="total_products">Total Products = 13 </div>
			<div class="category_list">
				<select id="">
					<option bydeafult>All</option>
					<option>Fruits & Vegetables</option>
					<option>Dairy,Bread & Eggs</option>
					<option>Sweet Tooth</option>
					<option>Snacks & Munchies</option>
					<option>Bakery & Biscuits</option>
					<option>Breakfast & Instant Food</option>
					<option>Tea, Coffe & health Drink</option>
					<option>Cold Drinks & Jucies</option>
					<option>Atta Rice & Dal</option>
					<option>Masala Oil & More</option>
					<option>Sauces & Spreads</option>
					<option>Chicken,Meat & Fish</option>
					<option>Organic & Healthy Living</option>
					<option>Baby Care</option>
					<option>Cleaning Essentials</option>
					<option>Home & Office</option>
					<option>Personal Care</option>
				</select>
			</div>
			<div class="product_lists_container">
				<div class="product_lists_title">
					<div class="ids">Id</div>
					<div class="imgs">Image</div>
					<div class="details">Details</div>
					<div class="pstatus">Status</div>
					<div class="pprice_title">Customize</div>
				</div>
				<div class="product_lists">
					<div class="id_no">1</div>
					<div class="pics">
						<img src="./assets/img/chinif.webp" alt="">
						<img src="./assets/img/chinif.webp" alt="">
						<img src="./assets/img/chinif.webp" alt="">
						<img src="./assets/img/chinif.webp" alt="">
						<img src="./assets/img/chinif.webp" alt="">
						<span>+1</span>
					</div>
					<div class="details">
						<div class="pname">Gajdant Sugar</div>
						<div class="pweight">5kg</div>
						<div class="pprice">₹180</div>
					</div>
					<select class="pstatus">
						<option>In Stock</option>
						<option class="oos">Out of Stock</option>
					</select>
					<div class="customize">
						<div class="edit">edit</div>
						<div class="delete">Delete</div>
					</div>
				</div>
			</div>
		</div>
		
	</body>
</html>