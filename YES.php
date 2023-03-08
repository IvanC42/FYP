<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "fyp";

	$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Database Connection failed: " . mysqli_connect_error());
    $receiver=$_POST["receiver3"];
    $sender=$_POST["sender3"];
    $request=$_POST["request3"];
    $sql="SELECT * FROM student_in_group WHERE student_id='.$sender.'";
    $rs = mysqli_query($conn, $sql);
    while ($rc = mysqli_fetch_assoc($rs)) {
		$group=$rc['group_id'];
        $sql="INSERT INTO student_in_group (student_id,group_id,role) VALUES($receiver,$group,1);";
        mysqli_query($conn, $sql);
        $sql="UPDATE request SET status=1 WHERE request_id=$request";
        mysqli_query($conn, $sql);
	}
    header('Location: ProjectPlan(Student).php');
?>