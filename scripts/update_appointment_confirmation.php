<?php
session_start();

if (!isset($_SESSION['user_type']) || $_SESSION['user_type'] !== 'admin') {
    echo json_encode(['error' => 'Unauthorized access.']);
    exit;
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "photo_studio";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['id']) && isset($_POST['confirmed'])) {
    $id = $_POST['id'];
    $confirmed = $_POST['confirmed'];

    $stmt = $conn->prepare("UPDATE appointments SET confirmed = ? WHERE id = ?");
    $stmt->bind_param("ii", $confirmed, $id);

    if ($stmt->execute()) {
        echo json_encode(['success' => 'Appointment confirmation updated successfully.']);
    } else {
        echo json_encode(['error' => 'Error updating appointment confirmation.']);
    }

    $stmt->close();
} else {
    echo json_encode(['error' => 'Missing required parameters.']);
}

$conn->close();
?>