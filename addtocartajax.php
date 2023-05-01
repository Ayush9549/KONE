<?php
      require_once './db_connection.php';
      if($is_db_connected)
      {
            $sql = "SELECT * FROM `product_list` WHERE id=".$_POST['p_id'];
            $result = $conn->query($sql);
            if ($result->num_rows > 0)
            { 
                  $data  = array();
                  while($productlist = $result->fetch_assoc())
                  {
                        $data[]= $productlist;
                  }
                  header("Content-Type: application/json");
                  echo json_encode($data);
                  exit();
            }
            else
            {
                  echo "0 results";
            }
      }
?>