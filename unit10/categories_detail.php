<?php 
require_once('connection.php');
$id =(isset($_GET['id'])?$_GET['id']:0);
$sql = 'select *from categories where id = ' .$id;
$category = $conn->query($sql)->fetch_assoc();

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1 style="text-align: center;">Trang chi tiết  danh mục quản lý bài viết</h1>
	<h1>tên danh muc: <?= $category['name'] ?></h1>
	<h1>parent_id: <?= $category['parent_id'] ?></h1>
	<h1>hình ảnh:  <img src="./image/<?= $category['thumbnail'] ?>" width="100px" height="100px"></h1>
	<h1>slug: <?= $category['slug'] ?></h1>
	<h1>description: <?= $category['description'] ?></h1>
	<h1>Ngày tạo: <?= $category['created_at'] ?></h1>


</body>
</html>