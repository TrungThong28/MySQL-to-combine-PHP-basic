<?php 
	$host = 'localhost';
	$username = 'root';
	$password = '';
	$database = 'dev1907';

	$connection = new mysqli($host, $username, $password, $database);

	if ($connection->connect_error) {
		die('Can\'t not connect to database');
	}


 ?>