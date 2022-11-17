<?php 

require_once('connection.php');

$data=$_POST;
$file =$_FILES['thumbnail'];
$file_name=$file['name'];
move_uploaded_file($file['tmp_name'], 'image/'.$file_name);

// echo "<pre>";
// print_r($file_name);
// echo "</pre>";


 $sql = "INSERT INTO posts (title,description,thumbnail,content,slug,view_count,user_id,category_id,create_at) VALUES ('".$data['title']."','".$data['description']."','".$file_name."','".$data['content']."','".$data['slug']."','".$data['view_count']."','".$data['user_id']."','".$data['category_id']."','".$data['create_at']."')";

$status = $conn->query($sql);

if ($status == true) {
	header('location: posts.php');
}
else{

	header('location: posts_add.php');
}

 ?>