<?php

session_start();

$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "photo_studio"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$post_username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password']; 
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$stmt = $conn->prepare("INSERT INTO users (username, email, password, user_type) VALUES (?, ?, ?, ?)");
$user_type = 'user'; 
$stmt->bind_param("ssss", $post_username, $email, $hashed_password, $user_type);

if ($stmt->execute()) {
    echo "User registered successfully";

    $user_id = $stmt->insert_id;

    $_SESSION['loggedin'] = true;
    $_SESSION['email'] = $email;
    $_SESSION['user_id'] = $user_id;
    $_SESSION['username'] = $post_username;
    $_SESSION['user_type'] = $user_type;

} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>