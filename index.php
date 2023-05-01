<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>K ONE STORE</title>
		<link rel="stylesheet" type="text/css" href="./assets/css/grocery.css">
		<link rel="stylesheet" type="text/css" href="./assets/css/store_data.css">
		<link rel="stylesheet" type="text/css" href="./assets/css/popular_offer_data.css">
		<link rel="stylesheet" type="text/css" href="./assets/css/today_offers_data.css">
	</head>
	<body>
		<div class="container" id="container" >
			<div class="navigation-bar">
				<?php
				include './navigation.php';
				?>
			</div>
			<div class="space"></div>
			
			<div class="secton">
				<div class="child">
					<div class="delivery-boy">
						<div class="side-border">
							<div class="small-circle"></div>
							<div class="big-circle"></div>
							<div class="small-circle"></div>
						</div>
						<img src="./assets/img/delivery-boy.png">
						<div class="side-border1">
							<div class="small-circle"></div>
							<div class="big-circle"></div>
							<div class="small-circle"></div>
						</div>
					</div>
				</div>
				<div class="child">
					<div class="moto">Bring the <span>Store</span> to your <span> Door</span> in One hour</div>
				</div>
				<div class="child">
					<div class="tranding-items">
						<h1>Fresh Vegitables</h1>
						<div class="items-details">
							<?php
								include './tranding_offer_data.php';
							?>
						</div>
					</div>
				</div>
			</div>
			<!-- </div> -->
			<!---------- popular offers ------------>
			<div class="pop_itm">Popular Items</div>
			<div class="popular_items_container">
				<?php
					include './popular_items_data.php';
				?>
			</div>
			<div  class="add_to_wishlist">Added To Wishlist</div>
			<!--------------- today offers ------------------>
			<div class="today_ofr">Today's Offer's</div>
			<div class="today_offers_container">
				<?php
					include './today_offers_data.php';
				?>
			</div>
			<!------------ Ad ---------->
			<a href="./dry_fruits_nuts.php">
				<div class="advertisment">
					<img src="./assets/img/dry_fruits&nuts.png">
				</div>
			</a>
			<!------------ Skincare and haicare -->
			<div class="skin_haicare">Skincare, Haircare & More</div>
			<div class="skin_haircare_container">
				<?php
					include './skin_haircare.php';
				?>
			</div>
			<!------------ Household care --------------->
			<div class="household_title">
				<div class="household">Household Care <span>offer zone</span></div>
				<div class="dash_box"></div>
			</div>
			<div class="household_care_container">
				
				<?php
					include './household_care.php';
				?>
			</div>
			<!----------- HOme Kitchen  -->
			<div class="kitchen_title">
				<div class="kitchen">Home & kitchen <span>offer zone</span></div>
				<div class="dash_box"></div>
			</div>
			<div class="home_kitchen_container">
				
				<?php
					include './home_kitchen.php';
				?>
			</div>
			
			
			<footer>
				<?php
					include './footer.php';
				?>
			</footer>
		</div>
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.0.js"></script>
		<script type="text/javascript" src="./assets/js/popular_offer_data.js"></script>
		<script type="text/javascript" src="./assets/js/grocery.js"></script>
	</body>
</html>