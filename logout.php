<?php

$cokiename = "user";
setcookie($cokiename,"",time()-10,"/");
header("Location: index.php");
?>