<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fyp";
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Database Connection failed: " . mysqli_connect_error());
$group=$_POST['groupID'];
$name=$_POST['superivsor'];
foreach($group as $a => $b){
    $sql='SELECT user_id from user WHERE user_name="'.$name[$a].'"';
	$user=$_POST['choose'];
	$rs = mysqli_query($conn, $sql);
    $rc = mysqli_fetch_assoc($rs);
	$id=$rc['user_id'];
    $sql='UPDATE project_group SET supervisor_id="'.$id.'" WHERE group_id="'.$group[$a].'"';
	mysqli_query($conn, $sql);
	}

header('Location: ViewProject(Supervisor).php');
?>