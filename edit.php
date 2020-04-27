<?php 
	
	include ('connection.php');

	$id = $_GET['id'];

	$sql = "SELECT * FROM users WHERE id = $id";

	$result = $connection->query($sql);

	if ($result->num_rows > 0) {
		$user = $result->fetch_assoc();
	} else {
		die('User not found');
	}

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Edit</title>
 	<!-- Latest compiled and minified CSS & JS -->
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
 </head>
 <body>
 	<div class="container">
 		<div class="row">
 			<div class="col-md-12">
 				<form action="update.php" method="POST" role="form">
 					<legend>Edit <?php echo $id; ?></legend>
 					<input type="hidden" name="id" value="<?php echo $id ?>">
 				
 					<div class="form-group">
 						<label for="">Username</label>
 						<input type="text" name="username" class="form-control" id="" value="<?php echo $user['username'] ?>" placeholder="Username">
 					</div>

 					<div class="form-group">
 						<label for="">Password</label>
 						<input type="password" name="password" class="form-control" id="" value="<?php echo $user['password'] ?>" placeholder="Password">
 					</div>
 				
 					<div class="radio">
 						<label>
 							<input type="radio" name="gender" id="input" value="1" <?php echo $user['gender'] === 1 ? 'checked' : ' '?> >
 							Male
 						</label>

 						<label>
 							<input type="radio" name="gender" id="input" value="2" <?php echo $user['gender'] === 2 ? 'checked': ' ' ?>>
 							Female
 						</label>
 					</div>

 					<div class="form-group">
 						<label for="">Address</label>
 						<input type="text" name="address" class="form-control" id="" value="<?php echo $user['address'] ?>" placeholder="Address">
 					</div>
 				
 					<button type="submit" class="btn btn-primary" name="btnSave">Update</button>
 				</form>
 			</div>
 		</div>
 	</div>

 	<script src="//code.jquery.com/jquery.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
 </body>
 </html>