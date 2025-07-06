<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("location: login.php");
    exit;
}

require_once '../includes/config.php';

$post_err = "";

// Process form data when submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty(trim($_POST['content']))) {
        $post_err = "Post content cannot be empty.";
    } else {
        $content = trim($_POST['content']);
        $sql = "INSERT INTO posts (user_id, content) VALUES (?, ?)";
        if ($stmt = mysqli_prepare($link, $sql)) {
            mysqli_stmt_bind_param($stmt, "is", $param_user_id, $param_content);
            $param_user_id = $_SESSION['id'];
            $param_content = $content;

            if (mysqli_stmt_execute($stmt)) {
                header("location: feed.php");
                exit;
            } else {
                $post_err = "Something went wrong. Please try again later.";
            }
            mysqli_stmt_close($stmt);
        }
    }
    mysqli_close($link);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post - SnapVerse</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <nav class="navbar navbar-light">
        <div class="container">
            <a class="navbar-brand" href="dashboard.php">
                <img src="../assets/logo.png" alt="SnapVerse Logo" style="width: 150px;">
            </a>
            <a href="feed.php" class="btn btn-secondary">View Feed</a>
            <a href="logout.php" class="btn btn-danger">Logout</a>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="card mx-auto" style="max-width: 500px;">
            <div class="card-body">
                <h3 class="text-center">Create a New Post</h3>
                <?php if (!empty($post_err)): ?>
                    <div class="alert alert-danger"><?php echo $post_err; ?></div>
                <?php endif; ?>
                <form action="post.php" method="POST">
                    <div class="mb-3">
                        <label for="content">Your Post</label>
                        <textarea id="content" name="content" class="form-control" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Post</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
