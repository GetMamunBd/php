<?php 
$conn=mysqli_connect('localhost','root','','batch477');
session_start();

$email=$_POST['email'];
$password=$_POST['password'];

$password=md5($password);

$sql="UPDATE users SET password='$password' WHERE email='$email'";



if (mysqli_query($conn,$sql)) {
	header('location: login.php');
	$_SESSION['forget']="true";
}
 ?>