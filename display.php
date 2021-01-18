<?php 

$conn=mysqli_connect('localhost','root','','batch477');

session_start();

if (!isset($_SESSION['login'])) {
	header('location: login.php');
	$_SESSION['plzlogin']="true";
}

$sql="SELECT* FROM registration";

$result=mysqli_query($conn,$sql);


 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width" initial-scale=1>
	<title>Display</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="text-center text-uppercase text-warning">Data Table</h1>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">

				<?php if (isset($_SESSION['update'])) {?>
					
					<div class="alert alert-success">
						Data Update Successfully!!
					</div>
				<?php } ?>

				<?php if (isset($_SESSION['delete'])) {?>
					
					<div class="alert alert-danger">
						Data Delete Successfully!!
					</div>
				<?php } ?>


				<table class="table table-bordered text-center">
					<tr>
						<th>Serial No</th>
						<th>Name</th>
						<th>Email</th>
						<th>Address</th>
						<th>Action</th>
					</tr>

					<?php while ($row=mysqli_fetch_assoc($result)) {?>
						
					<tr>
						<td><?=$row['id'] ?></td>
						<td><?=$row['name'] ?></td>
						<td><?=$row['email'] ?></td>
						<td><?=$row['address'] ?></td>
						<td>
							<a class="btn btn-success" href="view.php?id=<?=$row['id']?>">View</a>
							<a class="btn btn-info" href="edit.php?id=<?=$row['id']?>">Edit</a>
							<a class="btn btn-danger" onclick="return confirm('Are You Sure?')" href="delete.php?id=<?=$row['id']?>">Delete</a>
						</td>
					</tr>

					<?php } ?>

				</table>
			</div>
		</div>

		<a class="btn btn-danger mt-4" href="index.php">Back</a>
		<a class="btn btn-warning mt-4" href="logout.php">Logout</a>

	</div>

<?php 
unset($_SESSION['update']); 
unset($_SESSION['delete']); 
?>

</body>
</html>