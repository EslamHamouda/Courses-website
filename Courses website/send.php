<?php
$servername = "localhost";
$username = "radmin";
$password = "123";
$dpname = "hp";



$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$age = $_POST['age'];
$type = $_POST['type'];
$duration = $_POST['duration'];

$conn = new mysqli('localhost','radmin','123','hp');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into hp(name, email, phone, age, type, duration) values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssi", $name, $email, $phone, $age, $type, $duration);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}






?>