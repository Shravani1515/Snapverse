<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SnapVerse - Home</title>

    <!-- Bootstrap CSS Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Styles -->
    <style>
        /* Custom styles for the page */
        body {
            font-family: Arial, sans-serif;
            background-color: #fafafa;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: #ffffff;
            border-bottom: 1px solid #e6e6e6;
        }

        .navbar-brand {
            font-weight: bold;
            color: #0073e6;
        }

        .navbar-nav .nav-link {
            color: #333;
        }

        .navbar-nav .nav-link:hover {
            color: #0073e6;
        }

        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 250px;
            background-color: #fff;
            padding-top: 50px;
            box-shadow: 2px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .sidebar a {
            display: block;
            padding: 15px;
            color: #333;
            text-decoration: none;
        }

        .sidebar a:hover {
            background-color: #f1f1f1;
        }

        .main-content {
            margin-left: 250px;
            padding: 20px;
        }

        .feed-post {
            background-color: white;
            margin-bottom: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 500px; /* Normal size for the post */
        }

        .feed-post img {
            width: 100%;
            border-radius: 0 0 10px 10px;
        }

        .feed-post .username {
            font-weight: bold;
        }

        .actions button {
            background: none;
            border: none;
            color: #0073e6;
            cursor: pointer;
        }

        .actions button:hover {
            text-decoration: underline;
        }

        .feed-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: flex-start; /* Align posts to the left */
        }
    </style>
</head>
<body>

    <!-- Navbar (Header) -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">SnapVerse</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Messages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Sidebar -->
    <div class="sidebar">
        <div class="text-center">
            <img src="https://via.placeholder.com/100" alt="Profile Picture" class="img-fluid rounded-circle" style="width: 80px; height: 80px;">
        </div>
        <a href="#">Home</a>
        <a href="#">Explore</a>
        <a href="#">Notifications</a>
        <a href="#">Messages</a>
        <a href="#">Settings</a>
    </div>

    <!-- Main Content (Feed) -->
    <div class="main-content">
        <div class="feed-container">
            <!-- Feed Post 1 -->
            <div class="feed-post">
                <div class="p-3">
                    <div class="d-flex justify-content-between">
                        <div>
                            <span class="username">John Doe</span> <span class="text-muted">@johndoe</span>
                        </div>
                        <div>
                            <button>...</button>
                        </div>
                    </div>
                    <img src="https://via.placeholder.com/800x600" alt="Post Image" class="mt-3">
                    <div class="p-3">
                        <p class="caption">This is a beautiful day at the beach! #beach #sunshine</p>
                        <div class="actions">
                            <button><i class="bi bi-heart"></i> Like</button>
                            <button><i class="bi bi-chat"></i> Comment</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Feed Post 2 -->
            <div class="feed-post">
                <div class="p-3">
                    <div class="d-flex justify-content-between">
                        <div>
                            <span class="username">Jane Smith</span> <span class="text-muted">@janesmith</span>
                        </div>
                        <div>
                            <button>...</button>
                        </div>
                    </div>
                    <img src="https://via.placeholder.com/800x600" alt="Post Image" class="mt-3">
                    <div class="p-3">
                        <p class="caption">Chilling by the poolside! #pooltime #vacation</p>
                        <div class="actions">
                            <button><i class="bi bi-heart"></i> Like</button>
                            <button><i class="bi bi-chat"></i> Comment</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Feed Post 3 -->
            <div class="feed-post">
                <div class="p-3">
                    <div class="d-flex justify-content-between">
                        <div>
                            <span class="username">Alice Cooper</span> <span class="text-muted">@alicecooper</span>
                        </div>
                        <div>
                            <button>...</button>
                        </div>
                    </div>
                    <img src="https://via.placeholder.com/800x600" alt="Post Image" class="mt-3">
                    <div class="p-3">
                        <p class="caption">Vacation vibes! #beachlife #paradise</p>
                        <div class="actions">
                            <button><i class="bi bi-heart"></i> Like</button>
                            <button><i class="bi bi-chat"></i> Comment</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</body>
</html>
