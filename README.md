# SnapVerse – Social Media Platform

**SnapVerse** is a social media web application developed using PHP, MySQL, HTML, CSS, and JavaScript. It provides users with the ability to create accounts, share posts, view others' content, and interact through likes and comments — all in a clean and responsive interface.

This project was built as part of an academic initiative to simulate a simplified version of platforms like Instagram.

## Features

- User registration and login
- Profile creation and editing
- Image upload and post sharing
- Like and comment on posts
- View newsfeed of all posts
- Mobile-responsive UI

## Technologies Used

- **Frontend**: HTML, CSS, JavaScript
- **Backend**: PHP (Core PHP)
- **Database**: MySQL

## Database Setup

1. Open **phpMyAdmin**
2. Create a new database named:
3. Run the following SQL to create required tables:

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    profile_image VARCHAR(255) DEFAULT 'default.png'
);

CREATE TABLE posts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    image VARCHAR(255),
    caption TEXT,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id)
);

CREATE TABLE likes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    post_id INT,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (post_id) REFERENCES posts(id)
);

CREATE TABLE comments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    post_id INT,
    comment TEXT,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (post_id) REFERENCES posts(id)
);

How to Run the Project
Install XAMPP and start Apache & MySQL

Place the project folder inside:
C:\xampp\htdocs\SnapVerse
Import snapverse.sql into phpMyAdmin under the snapverse database

Open the app in your browser:
http://localhost/SnapVerse/index.php
