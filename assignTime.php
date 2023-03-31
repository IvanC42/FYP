<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fyp";
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Database Connection failed: " . mysqli_connect_error());
$group=$_POST['groupID'];
$date=$_POST['date'];
$time=$_POST['time'];
foreach($group as $a => $b){
    $sql='INSERT INTO demostration  VALUE (NULL,"'.$group[$a].'","'.$date[$a].'","'.$time[$a].'")';
	mysqli_query($conn, $sql);
	}
header('Location: ViewProject(Supervisor).php');
?>