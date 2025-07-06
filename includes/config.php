<?php
// Database configuration
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root'); // Replace 'root' with your MySQL username if different
define('DB_PASSWORD', '');    // Replace '' with your MySQL password if set
define('DB_NAME', 'snapverse');

// Connect to MySQL database
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if (!$link) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
