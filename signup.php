<?php

$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "photo_studio"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$stmt = $conn->prepare("INSERT INTO users (email, password) VALUES (?, ?)");
$stmt->bind_param("ss", $email, $hashed_password);

$email = $_POST['email'];
$password = $_POST['password']; 
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

if ($stmt->execute()) {
    echo "User registered successfully";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>