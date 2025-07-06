<?php
// Include database connection
require_once('../includes/database.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form data
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email =  $_POST['email'];
    
        
        // Check if username already exists
        $query = "SELECT * FROM users WHERE username='$username' OR email='$email'";
        $result = $conn->query($query);
        
        if ($result->num_rows > 0) {
            $error = "Username or email already exists!";
        } else {
            // Insert into database
            $query = "INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email')";
            if ($conn->query($query) === TRUE) {
                
                header("Location: login.php"); // Redirect to login page after successful registration
                exit();
            } else {
                $error = "Error: " . $query . "<br>" . $conn->error;
            }
        }
    }

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account - SnapVerse</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #eaf6ff; margin: 0; padding: 0; display: flex; justify-content: center; align-items: center; height: 100vh;">
    <div style="background-color: white; padding: 30px; border-radius: 10px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); width: 300px; text-align: center;">
        <h2>Create Account</h2>
        
        
        <form method="POST" action="" style="display: flex; flex-direction: column;">
            <input type="text" name="username" placeholder="Username" required style="padding: 10px; margin-bottom: 10px; border-radius: 5px; border: 1px solid #ddd;" autocomplete="off">
            <input type="password" name="password" placeholder="Password" required style="padding: 10px; margin-bottom: 10px; border-radius: 5px; border: 1px solid #ddd;" autocomplete="off">
            <input type="email" name="email" placeholder="Email" required style="padding: 10px; margin-bottom: 10px; border-radius: 5px; border: 1px solid #ddd;" autocomplete="off">
            
            <button type="submit" name="submit" style="padding: 10px; background-color: #0073e6; color: white; border: none; border-radius: 5px; cursor: pointer;">Create Account</button>
        </form>
        
        <p style="margin-top: 10px;">Already have an account? <a href="login.php" style="color: #0073e6;">Login here</a></p>
    </div>
</body>
</html>
