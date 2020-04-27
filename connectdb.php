<?php 
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$connection = new mysqli($servername, $username, $password);

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

//Create DB
$sql = "CREATE DATABASE dev1907";

if ($connection->query($sql) === true) {

	echo "DB create successfully";

} else {

	echo "Error create database". $connection->error;
}



 ?>