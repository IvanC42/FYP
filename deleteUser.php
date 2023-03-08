<?php
	//database connection
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "fyp";

	$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Database Connection failed: " . mysqli_connect_error());

	extract($_POST);

    //delete the request related to the user
	$sql = 'DELETE FROM request WHERE receiver_id = ' . $userID . ' OR sender_id = ' . $userID;
	mysqli_query($conn, $sql);

    //delete the student_in_group related to the user
	$sql = 'DELETE FROM student_in_group WHERE student_id = ' . $userID;
	mysqli_query($conn, $sql);

    //delete the supervisor in project_group related to the user
	$sql = 'UPDATE project_group SET supervisor_id = null WHERE supervisor_id = ' . $userID;
	mysqli_query($conn, $sql);

	//delete the logsheet
	$sql = 'DELETE FROM user WHERE user_id = ' . $userID;
	mysqli_query($conn, $sql);

	//back to the logsheet page
	header('Location: admin.php');
?>