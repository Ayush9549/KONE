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
$sql = "SELECT id, pimage1, pname,pprice,prating FROM product_list LIMIT 7";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($pdata = $result->fetch_assoc()) {
?>
<div class="child">
  <div class="card">
    <div class="wishlist">
      <img id="wishlist_icon" src="./assets/img/heart.png" alt="">
    </div>
    <a href="./products_details.php?product_id=<?php echo $pdata['id']; ?>">
      <div class="pic">
        <img src="./assets/img/<?php echo $pdata['pimage1']; ?>" alt="">
      </div>
      <div class="details">
        <div class="product_name"><?php echo $pdata['pname']; ?></div>
        <div class="product_price">₹ 1000</div>
        <div class="product_weight">10kg</div>
        <div class="rating">
          ★ 4.5
        </div>
      </div>
    </a>
    
  </div>
</div>

<?php
}
} else {
echo "0 results";
}
$conn->close();
?>
