<?php
// Database configuration
$servername = "localhost";
$username = "u593341949_dev_arienza";
$password = "20211733Arienza";
$database = "u593341949_db_arienza";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
