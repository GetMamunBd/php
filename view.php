
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
	<title>View Data</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="text-center text-uppercase text-warning">View Data</h1>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<table class="table table-bordered table-striped text-center">
					<tr>
						<th>Serial Number</th>
						<td><?=$row['id']?></td>
					</tr>
					<tr>
						<th>Name</th>
						<td><?=$row['name']?></td>
					</tr>
					<tr>
						<th>Email</th>
						<td><?=$row['email']?></td>
					</tr>
					<tr>
						<th>Addreaa</th>
						<td><?=$row['address']?></td>
					</tr>
				</table>
			</div>
		</div>

		<a class="btn btn-danger mt-4" href="display.php">Back</a>

	</div>
</body>
</html>