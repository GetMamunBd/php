<?php 
$conn=mysqli_connect('localhost','root','','batch477');

session_start();

$id=$_GET['id'];

$name=$_POST['name'];
$email=$_POST['email'];
$address=$_POST['address'];


$sql="UPDATE registration SET name='$name', email='$email', address='$address' WHERE id=$id";


if (mysqli_query($conn,$sql)) {
	header('location: display.php');

	$_SESSION['update']="true";
}
 ?>