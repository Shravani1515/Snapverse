<?php
// Start session
session_start();

// Include database connection
require_once('../includes/database.php');


// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    // Get user input
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query to check user
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Check if the password matches
        if ($password === $user['password']) {
            $_SESSION['username'] = $user['username']; // Store username in session
            header("Location: home.php"); // Redirect to home page
            exit();
        } else {
            $error = "Incorrect password.";
        }
    } else {
        $error = "Username not found.";
    }

    // Close the connection
    $conn->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    
    <div class="login-container">
        <img src="../uploads/img.png" alt="SnapVerse logo" class="logo">
        
        <form action="login.php" method="POST" autocomplete="off">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>
        <p style="margin-top: 10px;">Don't have an account? <a href="create_account.php" style="color: #0073e6;">Create one here</a></p>

        <?php if (!empty($error)) { echo "<p class='error'>$error</p>"; } ?>
    </div>

</body>
</html>
