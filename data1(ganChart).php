<?php
session_start();
$groupID = $_SESSION["gp"];;
$conn = mysqli_connect("127.0.0.1","root","","fyp");
$result = mysqli_query($conn, "SELECT * FROM project WHERE group_id = $groupID ");
$data= array();

while($row= mysqli_fetch_assoc($result)){
$data[]=$row;
}
  echo json_encode($data);
?>