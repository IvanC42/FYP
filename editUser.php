<?php
session_start();
	//database connection
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "fyp";

	$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Database Connection failed: " . mysqli_connect_error());

	extract($_POST);

	//update the user
	$sql = 'UPDATE user SET email="' . $email . '", user_name="' . $name . '", password="' . $pwd . '", role="' . $role . '", phone_number="' . $phoneNum . '" WHERE user_id=' . $userID;
	mysqli_query($conn, $sql);

	//back to the logsheet page
	header('Location: admin.php');
?>