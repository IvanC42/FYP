
<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fyp";
$loginId=$_SESSION["LoginUserID"];
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Database Connection failed: " . mysqli_connect_error());
$description=$_POST["description"];
$sql='UPDATE user SET description="'.$description.'" WHERE user_id="'.$loginId.'"';
mysqli_query($conn, $sql);
header('Location: app-profile.php'); 
?>