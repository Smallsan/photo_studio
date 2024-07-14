<?php

$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "photo_studio"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$stmt = $conn->prepare("SELECT password FROM users WHERE email = ?");
$stmt->bind_param("s", $email);

$email = $_POST['email'];


$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($_POST['password'], $row['password'])) {
        echo "Login successful";
    } else {
        echo "Invalid email or password";
    }
} else {
    echo "User not found";
}

$stmt->close();
$conn->close();
?>