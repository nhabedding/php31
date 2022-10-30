<?php 
session_start();

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Trang Chủ</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 	
	if (	isset($_SESSION['login']['username'])) {
		?>
		<a href="	logout.php" >đăng xuất</a>
		<?php
	}else{
		?>
			<a href="	login.php" title="">đăng nhập</a>
		<?php
	}
		
	 ?>
	<hr>
	<h1>trang chính zent</h1>
	<a href="index.php">Trang Chủ</a>
	<a href="course.php">Khóa Học</a>
	<a href="account.php">tài khoản</a>
	<hr>
	<p>trang chủ</p>
	<?php 

	if (isset($_SESSION['login']['username'])) {
		echo "xin chào ".$_SESSION['login']['username'] . "bạn vừa đăng nhập thành công";
	}else{
		echo " bạn cần đăng nhập vào hệ thống trước <a href='login.php'>tại đây</a>";
		//href khi ở trong echo phải đổi "" thành ''
	}

	 ?>
</body>
</html>