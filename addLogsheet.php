<?php
session_start();
	//database connection (need to change)
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "fyp";

	$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Database Connection failed: " . mysqli_connect_error());
			//group ID (need to change)
	$groupID = $_SESSION["GroupID"];
	//Get logsheetID
	$sql = "SELECT MAX(logsheetID) AS logsheetID FROM logsheet WHERE groupID='$groupID'";
	$rs = mysqli_query($conn, $sql);
	//default logsheetID is 1
	$logsheetID = 1;
	//if already have logsheet, set to the max logsheetID + 1
	while ($rc = mysqli_fetch_assoc($rs)) {
		$logsheetID = (int)$rc["logsheetID"] + 1;
	}



	//add logsheet to database
	$sql = 'INSERT INTO logsheet VALUES(' . $logsheetID . ', ' . $groupID . ', null, null, null, CURDATE())';
	mysqli_query($conn, $sql);

	//back to the logsheet page
	header('Location: logsheet.php');
?>