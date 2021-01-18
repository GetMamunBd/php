
<?php 
session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width" initial-scale=1>
	<title>Login</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="text-center text-uppercase text-info">User Login</h1>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">

				<?php if (isset($_SESSION['plzlogin'])) {?>
					<div class="alert alert-warning">
						Please Login
					</div>
				<?php } ?>

				<?php if (isset($_SESSION['errorlogin'])) {?>
					<div class="alert alert-warning">
						Email & Password did not matched
					</div>
				<?php } ?>

				<?php if (isset($_SESSION['forget'])) {?>
					<div class="alert alert-success">
						Password susscesfully Updated
					</div>
				<?php } ?>

				<form action="confirm_login.php" method="post">	

					<div class="form-group">
						<label for="">Email</label>
						<input class="form-control" name="email" type="email" placeholder="Email">
					</div>

					<div class="form-group">
						<label for="">Password</label>
						<input class="form-control" name="password" id="password" type="password" placeholder="Password"><span id="show">Show</span>
					</div>

					<input class="btn btn-outline-info" type="submit" value="Login">
				</form>
				<a class="btn btn-primary mt-5" href="forgetpass.php">Forget Password</a>
			</div>
		</div>


	</div>



	<script src="js/jquery-3.5.1.slim.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

<script>
	$(document).ready(function(){

		const password=$('#password');

		$('#show').click(function(){
		if (password.prop('type')=='password') {
			password.attr('type','text');
		}else{
			password.attr('type','password');
		}
		})

	})
</script>


<?php 
unset($_SESSION['plzlogin']);
unset($_SESSION['errorlogin']);
unset($_SESSION['forget']);
 ?>
</body>
</html>