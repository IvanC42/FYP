<?php

//delete.php

if(isset($_POST["id"]))
{
 $connect = new PDO('mysql:host=localhost;dbname=fyp', 'root', '');
 $query = "
 DELETE from availability WHERE id=:id
 ";
 $statement = $connect->prepare($query);
 $statement->execute(
  array(
   ':id' => $_POST['id']
  )
 );
}

?>