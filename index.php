<?php 
session_start();
 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width" initial-scale=1>
	<title>PHP</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="text-center text-uppercase text-info">User Registration</h1>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">

				<?php 

				if (isset($_SESSION['message'])) {?>
					
					<div class="alert alert-success ">
						Data Insert Successfully!!
					</div>

				<?php } ?>




				<form action="store.php" method="post">
					<div class="form-group">
						<label for="">Name</label>
						<input class="form-control" name="name" type="text" placeholder="Name">
					</div>		

					<div class="form-group">
						<label for="">Email</label>
						<input class="form-control" name="email" type="email" placeholder="Email">
					</div>

					<div class="form-group">
						<label for="">Address</label>
						<input class="form-control" name="address" type="text" placeholder="Address">
					</div>

					<input class="btn btn-outline-info" type="submit" value="Registration">
				</form>
				<a class="btn btn-success mt-3" href="display.php">Data Display</a>
				<a class="btn btn-info mt-3 text-uppercase" href="signup.php">signup</a>
				<a class="btn btn-warning mt-3 text-uppercase" href="login.php">Login</a>
			</div>
		</div>


	</div>



	<script src="js/jquery-3.5.1.slim.min.js"></script>
	<script src="js/bootstrap.min.js"></script>


	<?php 
	unset($_SESSION['message']);
	 ?>
</body>
</html>