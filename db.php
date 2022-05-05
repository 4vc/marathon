<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "cms";
  
// Creating connection
$conn = mysqli_connect($servername, $username, $password, $db);
  
// Checking connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
  
// Creating a database named newDB
  
?>