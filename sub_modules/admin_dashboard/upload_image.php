<?php
require '../../scripts/database.php';

header('Content-Type: application/json');

if ($conn->connect_error) {
    echo json_encode(["error" => "Connection failed: " . $conn->connect_error]);
    exit;
}

if (!isset($_FILES['image'])) {
    echo json_encode(["error" => "No file uploaded."]);
    exit;
}

if ($_FILES['image']['error'] !== UPLOAD_ERR_OK) {
    echo json_encode(["error" => "Error uploading file: " . $_FILES['image']['error']]);
    exit;
}

// Check file size (e.g., 5MB max)
if ($_FILES['image']['size'] > 5000000) {
    echo json_encode(["error" => "File is too large. Maximum size is 5MB."]);
    exit;
}

$imageFileType = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
$validTypes = ['jpg', 'jpeg', 'png', 'gif'];
if (!in_array($imageFileType, $validTypes)) {
    echo json_encode(["error" => "Invalid file type. Only JPG, JPEG, PNG, & GIF files are allowed."]);
    exit;
}

// Assuming you want to store the image content directly into the database
$imageData = file_get_contents($_FILES['image']['tmp_name']);
$uploadDate = date('Y-m-d H:i:s');
$sql = "INSERT INTO gallery (upload_date, image) VALUES (?, ?)";

$stmt = $conn->prepare($sql);
if (false === $stmt) {
    echo json_encode(["error" => "Failed to prepare statement: " . $conn->error]);
    exit;
}

// Null for the blob data placeholder
$null = null;
$stmt->bind_param("sb", $uploadDate, $null);
$stmt->send_long_data(1, $imageData);

if ($stmt->execute()) {
    echo json_encode(["message" => "Image uploaded successfully."]);
} else {
    echo json_encode(["error" => "Error uploading image to the database: " . $stmt->error]);
}

$stmt->close();
$conn->close();
?>