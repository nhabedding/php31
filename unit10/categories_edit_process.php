<?php 

require_once('connection.php');

$data=$_POST;

$file =$_FILES['thumbnail'];
$file_name=$file['name'];
move_uploaded_file($file['tmp_name'], 'image/'.$file_name);

 $sql = "update categories set name='".$data['name']."', parent_id='".$data['parent_id']."', thumbnail='".$file_name."', slug='".$data['slug']."', description='".$data['description']."', created_at='".$data['created_at']."' where id =" .$data['id'];

$status = $conn->query($sql);




if ($status == true) {
	header('location: categories.php');
}
else{

	header('location: categories_edit.php');
}


 ?>