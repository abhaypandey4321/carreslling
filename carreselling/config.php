<?php
$host="localhost";
$user="root";
$pass="";
$db="carsdb";
$conn=mysqli_connect($host,$user,$pass,$db);
if($conn == FALSE){
  echo "Connection Failed";
}
?>