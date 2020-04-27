<?php 
	$host = 'localhost';
	$username = 'root';
	$password = '';
	$database = 'dev1907';

	$connection = new mysqli($host, $username, $password, $database);

	if ($connection->connect_error) {
		die('Connect failt');
	} else {
		echo "connect success";
	}

	//Create table
	$sql = "CREATE TABLE users(
		id integer auto_increment primary key,
		username varchar(255),
		password varchar(255),
		gender tinyint default 0,
		address varchar(255),
		created_at datetime 

	)";

	if ($connection->query($sql) === true) {
		echo "Create table success";
	} else {
		echo "create table fail". $connection->error;
	}

	// Insert data
	// $sql = "INSERT INTO users (username, password, gender, address, created_at) VALUES ('Thong', 1234, 'Nam', 'Ha Noi', '2019-12-30 12:20:45')";

	// if ($connection->query($sql) === true) {
		// echo "Insert into DB success";
	// } else {
		// echo "Insert into DB fail". $connection->error;
	// }

 ?>