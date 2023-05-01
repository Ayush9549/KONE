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

$sql = "SELECT email_id, password FROM user_data";
$result = $conn->query($sql);

$isMatch = false;
if ($result->num_rows > 0)
{
  // output data of each row
  while($login_data = $result->fetch_assoc())
  {
  	// echo $login_data["email_id"]."<br>";
  	// echo $login_data["password"]."<br>";
  	if ($login_data["email_id"]==$_POST['email'] && $login_data["password"]==$_POST['password'])
  	{
  		$isMatch = true;
  	}
  }
  if ($isMatch == true)
  {
  	$cokiename = "user";
  	$cokievalue = time();
  	setcookie($cokiename,$cokievalue,time()+86400,'/');  //86400 -> 1 day
  	header("Location: index.php");
  }
  else
  {
  	header("Location: login_rgister.php");

  }
}
else
{
  echo "0 results";
}
$conn->close();
?>