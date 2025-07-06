<?php
require '../includes/session_check.php';
require '../includes/database.php';

$user_id = $_SESSION['user_id'];
$post_id = $_POST['post_id'];

$sql = "INSERT INTO likes (user_id, post_id) VALUES (?, ?) ON DUPLICATE KEY UPDATE id=id";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ii", $user_id, $post_id);
$stmt->execute();

$sql = "SELECT COUNT(*) FROM likes WHERE post_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $post_id);
$stmt->execute();
$stmt->bind_result($like_count);
$stmt->fetch();

echo json_encode(["success" => true, "like_count" => $like_count]);
?>
