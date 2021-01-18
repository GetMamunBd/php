<?php 


$conn=mysqli_connect('localhost','root','','batch477');

session_start();

$name=$_POST['name'];
$email=$_POST['email'];
$address=$_POST['address'];


$sql="INSERT INTO registration VALUES('','$name','$email','$address')";


if (mysqli_query($conn,$sql)) {
	header('location: index.php');

	$_SESSION['message']="true";
}


 ?>