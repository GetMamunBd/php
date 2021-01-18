

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width" initial-scale=1>
	<title>Forget Password</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="text-center text-uppercase text-info">Forget Password</h1>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">

				<form action="confirm_pass.php" method="post">	

					<div class="form-group">
						<label for="">Email</label>
						<input class="form-control" name="email" type="email" placeholder="Email">
					</div>

					<div class="form-group">
						<label for="">New Password</label>
						<input class="form-control" name="password" type="password" placeholder="New Password">
					</div>

					<input class="btn btn-outline-info" type="submit" value="Forget">
				</form>
			</div>
		</div>


	</div>

	<script src="js/jquery-3.5.1.slim.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

</body>
</html>