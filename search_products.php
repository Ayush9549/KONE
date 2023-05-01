<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>K One Store</title>
    <link rel="stylesheet" type="text/css" href="./assets/css/grocery.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/popular_offer_data.css">
  </head>
  <body>
    <div class="navigation-bar">
      <?php
      include './navigation.php';
      ?>
    </div>
    <div class="space"></div>
    <div class="category_container">
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
    $sql =  "SELECT * FROM `product_list` WHERE `pname` LIKE '%".$_POST['search']."%' AND `is_delete`=0 ";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    // output data of each row
    while($pdata = $result->fetch_assoc()) {
    ?>
    <div class="category_product_container">
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
              <div class="product_price">₹ <?php echo $pdata['pprice']?></div>
              <div class="product_weight"><?php echo $pdata['pweight']?>kg</div>
              <div class="rating">
                ★ <?php echo $pdata['prating']?>
              </div>
            </div>
          </a>
          
        </div>
      </div>
    </div>
    <?php
    }
    } else {
    echo "0 results";
    }
    $conn->close();
    ?>
    </div>

    <footer>
      <?php
      include './footer.php';
      ?>
    </footer>
  </div>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.0.js"></script>
  <script type="text/javascript" src="./assets/js/grocery.js"></script>
</body>
</html>