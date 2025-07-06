<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("location: login.php");
    exit;
}

require_once '../includes/config.php';

// Fetch posts from the database
$sql = "SELECT posts.id, posts.content, posts.created_at, users.username FROM posts JOIN users ON posts.user_id = users.id ORDER BY posts.created_at DESC";
$result = mysqli_query($link, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feed - SnapVerse</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <nav class="navbar navbar-light">
        <div class="container">
            <a class="navbar-brand" href="dashboard.php">
                <img src="../assets/logo.png" alt="SnapVerse Logo" style="width: 150px;">
            </a>
            <a href="post.php" class="btn btn-primary">Create Post</a>
            <a href="logout.php" class="btn btn-danger">Logout</a>
        </div>
    </nav>

    <div class="container mt-5">
        <h1 class="text-center">Your Feed</h1>
        <div class="posts mt-4">
            <?php if (mysqli_num_rows($result) > 0): ?>
                <?php while ($row = mysqli_fetch_assoc($result)): ?>
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo htmlspecialchars($row['username']); ?></h5>
                            <p class="card-text"><?php echo htmlspecialchars($row['content']); ?></p>
                            <p class="text-muted small"><?php echo date("F j, Y, g:i a", strtotime($row['created_at'])); ?></p>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <p class="text-center">No posts yet. Be the first to create one!</p>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>
