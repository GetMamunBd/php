<?php 
$conn=mysqli_connect('localhost','root','','batch477');
session_start();

$id=$_GET['id'];

$sql="DELETE FROM registration WHERE id=$id";


if (mysqli_query($conn,$sql)) {
	header('location: display.php');

	$_SESSION['delete']="true";
}
?>