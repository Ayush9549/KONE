<a href="index.php">
	<div class="logo">
		<img src="./assets/img/logo.png" alt="">
	</div></a>
	<div class="menus">
		<form action="search_products.php" method="POST">
			<div class="search-input">
				<input type="text" name="search" placeholder="Start shopping......" onkeyup="searchFun()" id="myInput">
				<button class="search_btn"><img src="./assets/img/search.png"></button>
			</div>
		</form>
		<a href="index.php"><div class="home">Home</div></a>
		<div class="location" onclick="popup()">
			<img class="location-img" src="./assets/img/location.png" alt="">
			<span>Delivery to 332001</span>
			<!-- <img class="dropdown-arrow" src="./assets/img/dropdown-arrow.png"> -->
		</div>
		<div class="categories">Categories<img src="./assets/img/dropdown-arrow.png"></div>
		<?php
		$cokiename="user";
		if(!isset($_COOKIE[$cokiename]))
		{
			echo '<div onclick="loginPage()" class="login-btn">Login</div></a>';
		}
		else
		{
			echo '<div class="user_pic"><img src="./assets/img/user.png" alt=""></div>';
		}
		?>
	</div>
	<!-- Category Start -->
	<ul class="categorig">
		<li class="categorig_list"><a href="category_products.php?cat_id=4"><div class="pic"><img src="https://img.freepik.com/free-photo/bottom-view-fruits-vegetables-radish-cherry-tomatoes-persimmon-tomatoes-kiwi-cucumber-apples-red-cabbage-parsley-quince-aubergines-blue-table_140725-146174.jpg?w=2000" alt="">
			
		</div>Fruits & Vegetables</a></li>
		<li class="categorig_list" href="#"><a><div class="pic"><img src="./assets/img/bread_butter.jpg" alt=""></div> Dairy,Bread & Eggs</a></li>
		<li class="categorig_list" href="#"><a><div class="pic"><img src="./assets/img/f_f.jpg" alt=""></div> Sweet Tooth</a></li>
		<li class="categorig_list" href="#"><a><div class="pic"><img src="https://cdn.grofers.com/cdn-cgi/image/f=auto,fit=scale-down,q=50,metadata=none,w=135/layout-engine/2022-11/Slice-5_4.png" alt=""></div> Snacks & Munchies</a></li>
		<li class="categorig_list" href="#"><a><div class="pic"><img src="./assets/img/f_f.jpg" alt=""></div> Bakery & Biscuits</a></li>
		<li class="categorig_list" href="#"><a><div class="pic"><img src="./assets/img/f_f.jpg" alt=""></div> Breakfast & Instant Food</a></li>
		<li class="categorig_list" href="#"><a><div class="pic"><img src="./assets/img/f_f.jpg" alt=""></div> Tea, Coffe & health Drink</a></li>
		<li class="categorig_list" href="#"><a><div class="pic"><img src="./assets/img/f_f.jpg" alt=""></div> Cold Drinks & Jucies</a></li>
		<li class="categorig_list"><a href="category_products.php?cat_id=1"><div class="pic"><img src="./assets/img/f_f.jpg" alt=""></div> Atta Rice & Dal</a></li>
		<li class="categorig_list" href="#"><a><div class="pic"><img src="./assets/img/f_f.jpg" alt=""></div> Masala Oil & More</a></li>
		<li class="categorig_list" href="#"><a><div class="pic"><img src="./assets/img/f_f.jpg" alt=""></div> Sauces & Spreads</a></li>
		<li class="categorig_list" href="#"><a><div class="pic"><img src="./assets/img/f_f.jpg" alt=""></div> Chicken,Meat & Fish</a></li>
		<li class="categorig_list" href="#"><a><div class="pic"><img src="./assets/img/f_f.jpg" alt=""></div> Organic & Healthy Living</a></li>
		<li class="categorig_list" ><a href="category_products.php?cat_id=2"><div class="pic"><img src="./assets/img/f_f.jpg" alt=""></div> Baby Care</a></li>
		<li class="categorig_list" href="#"><a><div class="pic"><img src="./assets/img/f_f.jpg" alt=""></div> Cleaning Essentials</a></li>
		<li class="categorig_list" href="#"><a><div class="pic"><img src="./assets/img/f_f.jpg" alt=""></div> Home & Office</a></li>
		<li class="categorig_list" href="#"><a><div class="pic"><img src="./assets/img/f_f.jpg" alt=""></div> Personal Care</a></li>
	</ul>
	<!-- Category End -->

	<!-- Menu Container Start -->
	<div class="menu_conatiner">
		<div class="close">X</div>
		<div class="profile menu_list">Profile</div>
		<div class="mywishlist menu_list">My Wishlist</div>
		<a href="./add_to_cart.php"><div class="myorders menu_list">My Cart</div></a>
		<a href="#"><div class="myorders menu_list">My Orders</div></a>
		<a href="logout.php"><div class="logout menu_list">Logout</div></a>
	</div>
	<div class="login_rgister">
		<?php
			include './login_register.php';
		?>
	</div>
	<!-- Menu Container End -->
	
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.0.js"></script>
	<script type="text/javascript" src="./assets/js/navigation.js"></script>