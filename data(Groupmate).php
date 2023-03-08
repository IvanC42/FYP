<?php
session_start();
$conn = mysqli_connect("127.0.0.1","root","","fyp");
$gpID=$_SESSION["GroupID"];

$result = mysqli_query($conn, "SELECT user.user_name FROM user INNER JOIN student_in_group ON user.user_id = student_in_group.student_id WHERE student_in_group.group_id = '$gpID'");
$data= array();

while($row= mysqli_fetch_assoc($result)){
$data[]=$row;
}
  echo json_encode($data);
?>