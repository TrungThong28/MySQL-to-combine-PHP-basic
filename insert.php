<?php 

include ('connection.php');

if (isset($_POST['username'])) {
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	$gender   = $_POST['gender'];
	$address  = $_POST['address'];
	$createdAt = date('Y-m-d H:i:s');
	$hashedPassword = md5($password);

	$sql = " INSERT INTO users(username, password, gender, address, created_at) VALUES ('$username', '$hashedPassword', $gender, '$address', '$createdAt')";

	if ($connection->query($sql) === true) {
		header('Location: index.php');
	} else {
		echo 'Register fail';
	}

}


 ?>