<!-- <div class="container"> -->
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "grocery";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT id, pimage, pname,pprice,pweight,prating FROM category_products LIMIT 4";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    // output data of each row
    while($pdata = $result->fetch_assoc()) {
?>

<div class="child">
	<a href="./household_products.php">
		<div class="card">
			<div class="pic">
				<img src="./assets/img/coconut_oil.png" alt="">
			</div>
			<div class="details">
				<div class="brand">Hair Oil</div>
				<div class="view_offer">₹ 50-150 <span>18%off</span><span></div>
			</div>
		</div>
	</a>
</div>
<?php
    }
    } else {
    echo "0 results";
    }
    $conn->close();
    ?>
<a href="./household_products.php" class="btn">
	<button>View More <span>
		<img src="./assets/img/down.png">
	</span></button>
</a>

