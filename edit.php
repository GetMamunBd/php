<?php 
$conn=mysqli_connect('localhost','root','','batch477');

session_start();

if (!isset($_SESSION['login'])) {
	header('location: login.php');
	$_SESSION['plzlogin']="true";
}

$id=$_GET['id'];

$sql="SELECT* FROM registration WHERE id=$id";

$result=mysqli_query($conn,$sql);

$row=mysqli_fetch_assoc($result);

 ?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width" initial-scale=1>
	<title>Edit Data</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="text-center text-uppercase text-info">Edit Data</h1>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">

				<form action="update.php?id=<?=$row['id']?>" method="post">
					<div class="form-group">
						<label for="">Name</label>
						<input class="form-control" name="name" type="text" value="<?=$row['name']?>">
					</div>		

					<div class="form-group">
						<label for="">Email</label>
						<input class="form-control" name="email" type="email" value="<?=$row['email']?>">
					</div>

					<div class="form-group">
						<label for="">Address</label>
						<input class="form-control" name="address" type="text" value="<?=$row['address']?>">
					</div>

					<input class="btn btn-outline-info" type="submit" value="Update">
				</form>
			</div>
		</div>


	</div>



	<script src="js/jquery-3.5.1.slim.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>