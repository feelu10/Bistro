<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bistro";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
function convertTo12HrFormat($time) {
  return date('h:i A', strtotime($time));
}


?>
