<?php
// Database connection parameters
$host = '127.0.0.1:3307';
$db_user = 'root';  // Default for XAMPP
$db_pass = '';      // Default for XAMPP
$db_name = 'snapverse';


// Create connection
$conn = new mysqli($host, $db_user, $db_pass, $db_name);


// Check connection
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}
?>
