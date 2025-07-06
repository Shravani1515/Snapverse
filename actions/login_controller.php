<?php
session_start();
require_once '../includes/database.php';



// Initialize error variable
$error = '';

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve the username and password from the form
    $username = $_POST['username'];
    $password = $_POST['password'];


    // Simple function to connect to the database
    function connectDB($host, $db_username, $db_password, $db_name) {
        try {
            $conn = new PDO("mysql:host=$host;dbname=$db_name", $db_username, $db_password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    // Simple function to verify login credentials
    function verifyLogin($conn, $username, $password) {
        // Query to fetch the user details by username
        $query = "SELECT * FROM users WHERE username = :username LIMIT 1";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        
        // Fetch user data
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        // Verify if the password is correct
        if ($user && password_verify($password, $user['password'])) {
            // Password is correct, start session and store user data
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            
            // Redirect to home page
            header("Location: ../views/home.php");
            exit();
        } else {
            // If login fails, return an error message
            return 'Incorrect username or password.';
        }
    }

    // Connect to the database
    $conn = connectDB($host, $db_username, $db_password, $db_name);

    // Verify the login credentials
    $error = verifyLogin($conn, $username, $password);
}


?>
