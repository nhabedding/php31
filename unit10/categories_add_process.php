<?php 

require_once('connection.php');

$data=$_POST;

$file =$_FILES['thumbnail'];
$file_name=$file['name'];
move_uploaded_file($file['tmp_name'], 'image/'.$file_name);


 $sql = "INSERT INTO categories (name,parent_id,slug,thumbnail,description,created_at) VALUES ('".$data['name']."','".$data['parent_id']."','".$data['slug']."','".$file_name."','".$data['description']."','".$data['created_at']."')";

$status = $conn->query($sql);

if ($status == true) {
	header('location: categories.php');
}
else{

	header('location: categories_add.php');
}

 ?>