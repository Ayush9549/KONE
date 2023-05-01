<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Add To Cart</title>
		<link rel="stylesheet" type="text/css" href="./assets/css/grocery.css">
	</head>
	<body>
		<div class="navigation-bar">
			<?php
			include './navigation.php';
			?>
		</div>
		<div class="space1"></div>
		<div class="add_to_cart_container">
			<div class="p_all_details">
				<div class="deliver_to">Deliver To: Sikar - 332001</div>
				<div class="plist">
										
				</div>
				
			<div class="place_order"><a href="./add_address.php" >Next Process</a></div>
			</div>
			<!--============== PRICE DETAILS =================-->
			<div class="right_side_content">
				<div class="p_total_price">
					<div class="price_details">
						<div class="title">PRICE DETAILS</div>
						<ul class="p_mrp price_indiv">
							<li>MRP(<span id="count">3</span> item)</li>
							<li>₹<span class="t_price">600</span></li>
						</ul>
						<ul class="pdiscount">
							<li>Product Discount</li>
							<li class="green">-₹0</li>
						</ul>
						<ul class="p_delivery_fee price_indiv">
							<li>Delivery Fee</li>
							<li>₹<span class="green d_fees">20.0</span></li>
						</ul>
						<ul class="total_amount total-amt">
							<li>Total Amount</li>
							<li >₹<span class="total_cart_amt">0.00</span></li>
						</ul>
					</div>
					<div class="save green">You will save ₹63 on this order</div>
				</div>
				<div class="safe">
					<img src="./assets/img/shield.png" alt="">Safe and Secure Payments & Easy returns.100% Authentic products.
				</div>
			</div>
		</div>
		<footer>
			<?php
				include './footer.php'
			?>
		</footer>
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.0.js"></script>
		<script type="text/javascript" src="./assets/js/grocery.js"></script>
	</body>
</html>