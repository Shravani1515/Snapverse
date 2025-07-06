<?php
require '../includes/session_check.php';
require '../includes/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_id = $_SESSION['user_id'];
    $content = $_POST['content'];

    $sql = "INSERT INTO posts (user_id, content, created_at) VALUES (?, ?, NOW())";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("is", $user_id, $content);

    if ($stmt->execute()) {
        echo json_encode(["success" => true, "message" => "Post created successfully"]);
    } else {
        echo json_encode(["success" => false, "message" => "Failed to create post"]);
    }
}
?>
