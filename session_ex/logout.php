<?php 	

session_start();

ob_start();
//nếu không chuyển hướng được thì dùng ob_star 
unset($_SESSION['login']);

header('Location: index.php');
//chuyển hướng sang trang chủ index
 ?>