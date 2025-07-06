<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - SnapVerse</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <nav class="navbar navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="../assets/logo.png" alt="SnapVerse Logo" style="width: 150px;">
            </a>
            <a href="logout.php" class="btn btn-danger">Logout</a>
        </div>
    </nav>

    <div class="container mt-5">
        <h1 class="text-center">Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
        <p class="text-center">Explore your social media platform, SnapVerse!</p>
    </div>
</body>
</html>
