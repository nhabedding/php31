<?php 	
session_start();
//cập nhajao username từ lengocha sang ngocha bedding
$_SESSION['login']['username']= 'ngocha bedding';
echo $_SESSION['login']['username'];

 ?>