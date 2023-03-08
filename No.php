<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fyp";

$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Database Connection failed: " . mysqli_connect_error());
$request=$_POST["request4"];
$sql="UPDATE request SET status=2 WHERE request_id=$request";
mysqli_query($conn, $sql);
header('Location: ProjectPlan(Student).php');
?>