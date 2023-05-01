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

$sql = "INSERT INTO user_data (email_id, password)
VALUES ('".$_POST["gmail"]."', '".$_POST["password"]."') AND is_deleted=""";

if ($conn->query($sql) === TRUE)
{
  header("Location: index.php");
}
else
{
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>