<?php
session_start();
	//database connection (need to change)
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "fyp";

	$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Database Connection failed: " . mysqli_connect_error());

	extract($_POST);

	//group ID (need to change)
	$groupID = $_SESSION["GroupID"];

	//delete the logsheet
	$sql = 'DELETE FROM logsheet WHERE groupID=' . $groupID . ' AND logsheetID = ' . $logsheetID;
	mysqli_query($conn, $sql);

	//back to the logsheet page
	header('Location: logsheet.php');
?>