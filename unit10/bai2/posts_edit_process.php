<?php 

require_once('connection.php');

$data=$_POST;
$file =$_FILES['thumbnail'];
$file_name=$file['name'];
move_uploaded_file($file['tmp_name'], 'image/'.$file_name);

 $sql = "update posts set title='".$data['title']."', description='".$data['description']."', thumbnail='".$file_name."', content='".$data['content']."', slug='".$data['slug']."', view_count='".$data['view_count']."', user_id='".$data['user_id']."', category_id='".$data['category_id']."', create_at='".$data['create_at']."' where id =" .$data['id'];

$status = $conn->query($sql);

if ($status == true) {
	header('location: posts.php');
}
else{

	header('location: posts_edit.php');
}


 ?>