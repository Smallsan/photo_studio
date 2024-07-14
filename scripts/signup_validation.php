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

$userInput = $_POST['username'];
$emailInput = $_POST['email'];

$stmt = $conn->prepare("SELECT id FROM users WHERE username = ?");
$stmt->bind_param("s", $userInput);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    echo "username_exists";
    $stmt->close();
    $conn->close();
    exit;
}

$stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
$stmt->bind_param("s", $emailInput);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    echo "email_exists";
} else {
    echo "not_exists";
}

$stmt->close();
$conn->close();
?>