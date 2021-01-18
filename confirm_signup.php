<?php 
$conn=mysqli_connect('localhost','root','','batch477');
session_start();

$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];

if ($password==$cpassword) {
	$password=md5($password);
}

$valid="SELECT* FROM users WHERE email='$email'";

$result=mysqli_query($conn,$valid);

$rowcount=mysqli_num_rows($result);

if ($rowcount==1) {
	header('location: signup.php');
	$_SESSION['emailexit']="true";
}else{


$sql="INSERT INTO users VALUES ('','$name','$email','$password')";


if (mysqli_query($conn,$sql)) {
	header('location: signup.php');
		$_SESSION['signup']="true";
}
}

 ?>