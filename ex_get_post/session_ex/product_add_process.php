<?php 
session_start();
//bước 1 khởi tạo sesion
$product =$_POST;
//bước 2 add vào sesion 1 lưu tât cả sp
$_SESSION['product'][]=$product;

header('Location: product_list.php');
//để xem danh sách san phẩm sau khi thêm vào

 ?>