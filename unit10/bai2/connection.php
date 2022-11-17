<?php 

$servername = '127.0.0.1';
$username= 'root';
$password='';
$dbname='blogs';

$conn= new mysqli($servername, $username, $password, $dbname);

if ($conn -> connect_errno) {
  echo "Failed to connect to MySQL: " .$conn -> connect_error;
  exit();
}
 ?>