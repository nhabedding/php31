<?php 
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</head>
<body>
	<div class="container">
		<h4>Upload ảnh đại diện</h4>
		<form action="upload.php" method="POST" enctype="multipart/form-data">
			<p>Chọn ảnh đại diện</p>
			<input type="file" name="avatar"><br>
			<button type="submit" value="submit" class="mt-2 btn btn-primary" name="btn_login">Up load ảnh</button>
		</form>
		<br>
		<?php if (isset($_SESSION['upload_status']) && $_SESSION['upload_status'][0] ==false) {?>
			<div class="alert alert-danger" role= "alert">
				<?php 
				foreach ($_SESSION['upload_status'][1] as $error) {
					echo "<p> - " .$error .'</p>';
				}
				unset($_SESSION['upload_status']); 

				?>
			</div>
		<?php } ?>
		<?php if (isset($_SESSION['upload_status']) && $_SESSION['upload_status'][0]==true) { ?>
			<div class="alert alert-info" role= "alert">
				Đường dẫn file sau khi upload: <?= $_SESSION['upload_status'][1]; ?>
			</div>
			<?php  
			unset($_SESSION['upload_status']); 

		}?>
	</div>	
</body>
</html>