


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contact</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<style>
	.emailForm {
		border: 1px solid grey;
		border-radius: 20px;
		padding: 10px;
		margin-top: 30px;
	}
</style>
</head>
<body>
	<div class="container-fluid">
		<div class="row">

			<div class="col-md-6 col-md-push-3">
				<form class="emailForm" action="" method="POST">
				<h1 style="color:grey;">Contact Us</h1>
				<p class="lead">Get in touch with us.</p>

				<?php 
				
				if(!empty($_POST['submit'])){
						
					

						if(empty($_POST['name'])){
							$error = "<li>Please enter your name</li>";
						}

						if(empty($_POST['email'])){
							$error .= "<br>Please enter your email";
						}

						if(empty($_POST['message'])){
							$error .= "<br>Please enter your message";
						} else {
							mail("minaeid90@gmail.com", "Comment from website", "Name: ".$_POST['name']."<br>"."Email: ".$_POST['email']."<br>"."Message: ".$_POST['message']);
						}

					}
			


				 ?>
				 <div class="alert alert-danger"><strong><?php echo $error; ?></strong></div>

				<div class="form-group">
					<label for="name" >Name</label>
					<input type="text" class="form-control" name="name" placeholder="Name">
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" class="form-control" name="email" placeholder="Email">
				</div>
				<div class="form-group">
					<label for="message">Message</label>
					<textarea name="message" class="form-control" cols="30" rows="10" placeholder="Message"></textarea>
				</div>
				<input class="btn btn-success" type="submit" value="Submit"  name="submit">
				</form>

			</div>
		</div>
	</div>
</body>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</html>