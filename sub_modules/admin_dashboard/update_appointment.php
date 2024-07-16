<?php
require '../../scripts/database.php';

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