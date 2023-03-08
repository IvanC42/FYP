<?php

//load.php
session_start();
$conn = mysqli_connect("127.0.0.1","root","","fyp");
$gpID=$_SESSION["GroupID"];

$connect = new PDO('mysql:host=localhost;dbname=fyp', 'root', '');

$data = array();

$query = "SELECT * FROM availability,student_in_group WHERE availability.student_id = student_in_group.student_id AND student_in_group.group_id=$gpID";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

foreach($result as $row)
{
 $data[] = array(
  'id'   => $row["id"],
  'title'   => $row["title"],
  'start'   => $row["start_time"],
  'end'   => $row["end_time"]
 );
}

echo json_encode($data);

?>