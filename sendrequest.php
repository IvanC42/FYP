<?php
session_start();
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "fyp";
	$loginId=$_SESSION["LoginUserID"];
	$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Database Connection failed: " . mysqli_connect_error());
	$groupName=$_POST['groupName'];
	$sql = 'INSERT INTO project_group (group_name,grade,supervisor_id) values ("'.$groupName.'",null,null);';
	mysqli_query($conn, $sql);
	$sql='SELECT group_id from project_group WHERE group_name="'.$groupName.'"';
	$user=$_POST['choose'];
	$rs = mysqli_query($conn, $sql);
	while ($rc = mysqli_fetch_assoc($rs)) {
		$group_id=$rc['group_id'];
		$sql='INSERT INTO student_in_group(student_id,group_id,role) values("'.$loginId.'","'.$group_id.'",0)';
		mysqli_query($conn, $sql);
		foreach($user as $user_id){
			$sql='INSERT INTO request (receiver_id,sender_id,content,status) VALUES("'.$user_id.'","'.$loginId.'","We want to invite you to my group",0)';
			mysqli_query($conn, $sql);
	}
}

	header('Location: ProjectPlan(Student).php');
?>