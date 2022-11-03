<?php 

session_start();

function uploadFile($input_name,$target_dir,$allowtypes,$max_size,$override){
	$upload_status=true;
	$target_file = $target_dir .'/' .basename($_FILES[$input_name]['name']);
	//đường dẫn mong muốn lưu vào
	$errors=array();

	$types = "";
	//types lấy loại file

	if (is_array($allowtypes)) {
		foreach ($allowtypes as $key => $type) {
			$type .=$type.',';
		}
	}

	$types= trim($types,',');
	if (!isset($_FILES[$input_name])) {
		$errors[] ="Không có dữ liệu file";
		$upload_status=false;

	}
	$check=$_FILES[$input_name];
	echo "<pre>";
	print_r($check);
	echo "</pre>";
	if ($_FILES[$input_name]['error']!=0) {
		$errors[] = "Dữ liệu upload bị lỗi";
		$upload_status = false;

	}
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	if (!in_array($imageFileType, $allowtypes)) {
		$errors[] = "Chỉ được upload các định dạng" .$types;
		$upload_status = false;

	}
	// allowtypes để kiểm tra xem đúng định dạng hay không như k cho up file ảnh
	//so sánh có giống định mình muốn hay không biến chữ thường bằng chữ hoa strtolower
	if ($_FILES[$input_name]['size'] > $max_size*1024*1024) {
		$errors[] = "Không được upload ảnh lớn hơn $max_size (MB).";
		$upload_status =false;
	}
	//kiểm tra để tránh đầy server
	if (file_exists($target_file) && $override == false) {
		$errors[] = "Tên file đã tồn tại trên server, không được ghi đè";
		$upload_status = false;
	}
	//có được ghi đè lên file tiếp không

	if ($upload_status) {
		if(move_uploaded_file($_FILES[$input_name]['tmp_name'], $target_file)){
			return array(true,$target_file);
		}
		else{
			$errors[] = 'Có lỗi xảy ra khi upload file vui lòng kiểm tra lại';
			return array(false,$errors);
			//return để thông báo ra màn hình
		}
	}
	else{
		return array(false,$errors);
	}

}
//Hàm move_uploaded_file() dùng để di chuyển tập tin được tải lên vào một nơi được chỉ định.
//tmp_name là đường dẫn tạm
$upload = uploadFile('avatar','images', array('jpg','jpeg','png','gif'),1,true);

$_SESSION['upload_status']= $upload;
header('Location: uploadFile.php');

 ?>