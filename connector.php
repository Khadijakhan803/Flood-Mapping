<?php
	$name = $_POST['name'];
	$address = $_POST['address'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$type = $_POST['type'];

	// Database connection
	$conn = new mysqli('localhost','root','','flood');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into donations(name, address, email, mobile, type) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("sssss", $name, $address, $email, $mobile, $type);
		$execval = $stmt->execute();
		echo "Donations successfull...";
		$stmt->close();
		$conn->close();
	}
?>