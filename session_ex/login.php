<?php 

session_start();
ob_start();
$_SESSION['login']['username'] = 'lengocha';

// echo "<pre>";
// print_r($_SESSION);
// echo $_SESSION['login']['username'];
header('Location: index.php');

 ?>