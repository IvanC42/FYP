<?php

//insert.php
session_start();
$connect = new PDO('mysql:host=localhost;dbname=fyp', 'root', '');
$loginId=$_SESSION["LoginUserID"];
if(isset($_POST["title"]))
{
 $query = "
 INSERT INTO availability 
 (student_id,title, start_time, end_time) 
 VALUES ($loginId,:title, :start_time, :end_time)
 ";
 $statement = $connect->prepare($query);
 $statement->execute(
  array(
   ':title'  => $_POST['title'],
   ':start_time' => $_POST['start'],
   ':end_time' => $_POST['end']
  )
 );
}


?>