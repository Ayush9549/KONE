<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>K ONE STORE DASHBORD</title>
		<link rel="stylesheet" type="text/css" href="./assets/css/admin_panel.css">
	</head>
	<body>
		
		<div class="category_container">
			<nav class="navbar">
				<?php
				include "./admin_navbar.php"
				?>
			</nav>
			<div class="title">Add New Category</div>
			<form>
				<label>Category Name</label>
				<input type="text" name="cate_name"><br>
				<label>Category Image</label>
				<input type="file" name="cat_image">
			<button>Submit</button>
			</form>
		</div>
	</body>
</html>