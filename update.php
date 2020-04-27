<?php

include ('connection.php');

	if (isset($_POST['btnSave'])) {

		$username = $_POST['username'];
		$password = $_POST['password'];
		$gender = $_POST['gender'];
		$address = $_POST['address'];
		$id = $_POST['id'];

	$sql = "UPDATE users SET username = '{$username}', password = '{$password}', gender = $gender, address = '{$address}' WHERE id = $id";
		
		if ($connection->query($sql) === true) {
			header('Location: index.php');
		} else {
			echo "Update fail". $connection->error;
		}

	}

 ?>