<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$description= $_POST['description'];

	// Database connection
	$conn = new mysqli('localhost','root','','flood');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into contact(name, email, mobile, description) values(?, ?, ?, ?)");
		$stmt->bind_param("ssis", $name, $email, $mobile, $description);
		$execval = $stmt->execute();
		echo "Contacted successfull...";
		$stmt->close();
		$conn->close();
	}
?>