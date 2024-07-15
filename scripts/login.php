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

$stmt = $conn->prepare("SELECT id, username, user_type, password, name, phone, birthday, address FROM users WHERE email = ?");
$stmt->bind_param("s", $email);

$email = $_POST['email'];

$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($_POST['password'], $row['password'])) {
        $_SESSION['loggedin'] = true;
        $_SESSION['email'] = $email;
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['user_type'] = $row['user_type'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['phone'] = $row['phone'];
        $_SESSION['birthday'] = $row['birthday'];
        $_SESSION['address'] = $row['address'];

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