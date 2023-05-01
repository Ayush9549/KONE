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

$sql = "SELECT id, p_image, p_name,p_price,p_discount_price,p_price_off FROM similar_product_list LIMIT 6";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($pdata = $result->fetch_assoc()) {
    ?>

			<div class="child">
				<div class="card">
					<div class="wishlist">
                <img id="wishlist_icon" onclick="AddToWishlist()" src="./assets/img/heart.png" alt="">
              </div>
					<a href="./products_details.php?product_id=<?php echo $pdata['id']; ?>">
					<div class="pic">
						<img src="./assets/img/<?php echo $pdata['p_image'];?>" alt="">
					</div>
					<div class="details">
						<div class="product_name"><?php echo $pdata['p_name']; ?></div>
						<div class="product_price">₹<?php echo $pdata['p_price']; ?> <del>₹ <?php echo $pdata['p_discount_price']; ?></del><span><?php echo $pdata['p_price_off']; ?>%</span></div>
					</div>
				</div>
			</div>
		</a>
 <?php 
  }
} else {
  echo "0 results";
}
$conn->close();
?>

<!-- <script>
	let isLikeClicked = false;
let add_to_wishlist = document.getElementsByClassName('add_to_wishlist')[0];
let wishlistIcon = document.getElementById('wishlist_icon');
  

function AddToWishlist()
      {
        if (isLikeClicked==false)
        {
         wishlistIcon.src = "./assets/img/heartf.png";
         add_to_wishlist.style.display = "flex";
         hideWishlist();
         add_to_wishlist.innerText = "Added to wishlist";
         isLikeClicked=true;
        }
        else
        {
          wishlistIcon.src = "./assets/img/heart.png";
          hideWishlist();
          add_to_wishlist.style.display = "flex";
          add_to_wishlist.innerText = "Remove to wishlist";
          isLikeClicked=false;
        }
      }

      function hideWishlist()
      {
        setTimeout(function(){
          add_to_wishlist.style.display = "none";
        },1000);
      }
</script> -->