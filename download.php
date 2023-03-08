<?php

$task_id = $_GET['task_id'];

// Connect to the database
$conn = mysqli_connect("127.0.0.1","root","","fyp");

// Get the file information from the database
$selectfile = mysqli_query($conn, "SELECT file, file_content FROM task WHERE task_id = $task_id");
$row = mysqli_fetch_array($selectfile);
$file = $row['file'];
$file_content = base64_decode($row['file_content']);

// Set the header information for the file
header("Content-Type: application/octet-stream");
header("Content-Disposition: attachment; filename=" . $file);
header("Content-Length: " . strlen($file_content));

// Output the file
echo $file_content;

?>