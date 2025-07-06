<?php
require_once 'includes/config.php';

if ($link) {
    echo "Database connection successful!";
} else {
    echo "Database connection failed!";
}
?>
