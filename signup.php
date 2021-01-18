<?php 
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width" initial-scale=1>
	<title>Signup</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="text-center text-uppercase text-info">User Signup</h1>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">

				<?php if (isset($_SESSION['signup'])) {?>
					<div class="alert alert-success">
						Successfully Signup!!
					</div>
				<?php } ?>

				<?php if (isset($_SESSION['emailexit'])) {?>
					<div class="alert alert-danger">
						Email Already Used! Please Try Another one..
					</div>
				<?php } ?>


				<form action="confirm_signup.php"  method="post">
					<div class="form-group">
						<label for="">Name</label>
						<input class="form-control" name="name" type="text" placeholder="Name">
					</div>		

					<div class="form-group">
						<label for="">Email</label>
						<input class="form-control" name="email" type="email" placeholder="Email" required="">
					</div>

					<div class="form-group">
						<label for="">Password</label>
						<input class="form-control" name="password" type="password" id="password" placeholder="Password">
					</div>

					<div class="form-group">
						<label for="">Confirm Password</label>
						<input class="form-control" name="cpassword" type="password" id="cpassword" placeholder="Confirm Password"><h5 id="message"></h5>
					</div>

					<input class="btn btn-outline-info" type="submit" value="Signup">
				</form>
			</div>
		</div>


	</div>



	<script src="js/jquery-3.5.1.slim.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

<script>
	$(document).ready(function(){
		$('#password,#cpassword').on('keyup',function(){
			if ($('#password').val()==$('#cpassword').val()) {
				$('#message').html('Password Matched!!').css('color','green');
			}else{
				$('#message').html('Password did not Matched!!').css('color','red');
			}
		})
	})
</script>

<?php 
unset($_SESSION['signup']);
unset($_SESSION['emailexit']);

 ?>
</body>
</html>