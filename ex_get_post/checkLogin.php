<?php 
$user ='';
$password ='';
if (isset($_POST['user'])) {
	// code...
	$user = $_POST['user'];

}
if (isset($_POST['pwd'])) {
	// code...
	$password = $_POST['pwd'];
	
}

if ($user == 'ha' && $password == 'ha'){
	echo "<br> login thanh cong";

	// code...
} else{
	echo "<br> login that bai";
}
die();
echo "<pre>";
print_r($_POST);
 ?>