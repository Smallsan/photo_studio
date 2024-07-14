<?php

$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "photo_studio"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$stmt = $conn->prepare("INSERT INTO appointments (name, email, phone, date, time, confirmed) VALUES (?, ?, ?, ?, ?, ?)");
$confirmed = 0; 
$stmt->bind_param("sssssi", $name, $email, $phone, $date, $time, $confirmed);

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone']; 
$date = $_POST['date'];
$time = $_POST['time'];

if ($stmt->execute()) {
    echo "Appointment booked successfully";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>