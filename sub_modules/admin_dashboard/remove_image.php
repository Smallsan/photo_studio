<?php
require '../../scripts/database.php';

$imageId = isset($_POST['id']) ? intval($_POST['id']) : 0;

$sql = "DELETE FROM gallery WHERE id = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $imageId);

if ($stmt->execute()) {
    echo "Image removed successfully.";
} else {
    echo "Error removing image.";
}

$stmt->close();
$conn->close();
?>