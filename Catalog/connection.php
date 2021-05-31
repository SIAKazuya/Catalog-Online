<?php
$servername = "localhost";
$username = "sia";
$password = "12345";
$dbname="catalog";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
?>