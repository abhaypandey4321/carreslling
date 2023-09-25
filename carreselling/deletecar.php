<?php 
$id = $_GET['id'];
//echo $id;
include 'config.php';
$query = "DELETE FROM `uploaddetails` WHERE `Id` = '$id'";
$result = mysqli_query($conn, $query);
if ($result == true){
//    header("location: client_List.php");
   echo "<script>alert('Car Details Deleted')+window.open('viewcar.php');</script>";
}
?>