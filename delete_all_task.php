<?php
  $conn = mysqli_connect("127.0.0.1","root","","fyp");
  $pjid = $_POST["pjid"];
  $sqlDeleteAll = "DELETE FROM task WHERE ProjectID = " .$pjid;
  mysqli_query($conn,$sqlDeleteAll);
?>