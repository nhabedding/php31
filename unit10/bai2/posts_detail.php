<?php 
require_once('connection.php');
$id =(isset($_GET['id'])?$_GET['id']:0);
$sql = 'select *from posts where id = ' .$id;

$post = $conn->query($sql)->fetch_assoc();

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1 style="text-align: center;">Trang POSTS</h1>
	<h1>ID: <?= $post['id'] ?></h1>
	<h1>title: <?= $post['title'] ?></h1>
	<h1>description: <?= $post['description'] ?></h1>
	<h1>hình ảnh:  <img src="./image/<?= $post['thumbnail'] ?>" width="100px" height="100px"></h1>
	<h1>content: <?= $post['content'] ?></h1>
	<h1>slug: <?= $post['slug'] ?></h1>
	<h1>view_count: <?= $post['view_count'] ?></h1>
	
	<h1>category_id: <?= $post['category_id'] ?></h1>
	<h1>Ngày tạo: <?= $post['create_at'] ?></h1>


</body>
</html>