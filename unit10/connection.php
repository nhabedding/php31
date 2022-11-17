<?php 
class Connection{
   $servername = "127.0.0.1";
   $username = "root";
   $password ="";
   $dbname ="blogs";

  public function connect(){
    $conn = new mysqli($servername, $username, $password, $dbname);
    if($conn->connect_errno){
      echo "Failed to connect to Mysql: " .$conn->connect_error;
      exit();
    }
    return $conn;
  }
}



 ?>