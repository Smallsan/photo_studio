<?php
require '../../scripts/database.php'; 

if (isset($_POST['id']) && isset($_POST['approved'])) {
    $id = $_POST['id'];
    $approved = $_POST['approved'];

    $stmt = $conn->prepare("UPDATE reviews SET approved = ? WHERE id = ?");
    $stmt->bind_param("ii", $approved, $id);

    if ($stmt->execute()) {
        echo json_encode(['success' => 'Review status updated successfully.']);
    } else {
        echo json_encode(['error' => 'Error updating review status.']);
    }

    $stmt->close();
} else {
    echo json_encode(['error' => 'Missing required parameters.']);
}

$conn->close();
?>