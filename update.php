<?php

//update.php

$connect = new PDO('mysql:host=localhost;dbname=fyp', 'root', '');

if(isset($_POST["id"]))
{
 $query = "
 UPDATE availability
 SET title=:title, start_time=:start_time, end_time=:end_time 
 WHERE id=:id
 ";
 $statement = $connect->prepare($query);
 $statement->execute(
  array(
   ':title'  => $_POST['title'],
   ':start_time' => $_POST['start'],
   ':end_time' => $_POST['end'],
   ':id'   => $_POST['id']
  )
 );
}

?>