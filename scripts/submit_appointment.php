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

if (!isset($_SESSION['user_id'])) {
    echo "User is not logged in.";
    exit; 
}

$user_id = $_SESSION['user_id']; 

$name = $_POST['name']; 
$email = $_SESSION['email']; 
$phone = $_POST['phone']; 
$date = $_POST['date'];
$time = $_POST['time'];
$packageType = $_POST['packageType']; 

$stmt = $conn->prepare("INSERT INTO appointments (name, email, phone, date, time, booking_type, confirmed, user_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
$confirmed = 0; 
$stmt->bind_param("ssssssii", $name, $email, $phone, $date, $time, $packageType, $confirmed, $user_id);

if ($stmt->execute()) {
    echo "Appointment booked successfully";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>