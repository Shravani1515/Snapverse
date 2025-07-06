<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SnapVerse - Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">SnapVerse</a>
        <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link" href="home.php">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="explore.php">Explore</a></li>
            <li class="nav-item"><a class="nav-link" href="notifications.php">Notifications</a></li>
            <li class="nav-item"><a class="nav-link" href="messages.php">Messages</a></li>
        </ul>
    </div>
</nav>

<!-- Profile Section -->
<div class="container mt-5">
    <div class="row">
        <div class="col-md-4 text-center">
            <img src="https://via.placeholder.com/150" alt="Profile Picture" class="img-thumbnail rounded-circle mb-3">
            <h4>John Doe</h4>
            <p>@johndoe</p>
            <button class="btn btn-primary">Edit Profile</button>
        </div>
        <div class="col-md-8">
            <div class="d-flex justify-content-between">
                <div><strong>120</strong> Posts</div>
                <div><strong>300</strong> Followers</div>
                <div><strong>200</strong> Following</div>
            </div>
            <hr>
            <div class="row">
                <!-- Example posts -->
                <div class="col-md-4 mb-3">
                    <img src="https://via.placeholder.com/150" class="img-fluid rounded">
                </div>
                <div class="col-md-4 mb-3">
                    <img src="https://via.placeholder.com/150" class="img-fluid rounded">
                </div>
                <div class="col-md-4 mb-3">
                    <img src="https://via.placeholder.com/150" class="img-fluid rounded">
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
