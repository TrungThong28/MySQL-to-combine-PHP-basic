<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Register Form</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<form action="insert.php" method="POST" role="form">
					<legend>Register</legend>
				
					<div class="form-group">
						<label for="">Username</label>
						<input type="text" class="form-control" id="username" name="username" placeholder="Username">
					</div>

					<div class="form-group">
						<label for="">Password</label>
						<input type="password" class="form-control" id="password" name="password" placeholder="*******">
					</div>

					<div class="form-group">
						<div class="radio">
							<label>
								<input type="radio" name="gender" id="inputGender" value="1" checked="checked">
								Male
							</label>

							<label>
								<input type="radio" name="gender" id="inputGender" value="0">
								Female
							</label>
						</div>
					</div>

					<div class="form-group">
						<label for="">Address</label>
						<input type="text" class="form-control" id="address" name="address" placeholder="Address">
					</div>

					<button type="submit" class="btn btn-success">Register</button>
				</form>
				
			</div>
			
		</div>
	</div>

	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>