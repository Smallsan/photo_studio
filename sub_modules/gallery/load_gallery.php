<?php
require '../../scripts/database.php';

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

$sql = "SELECT image FROM gallery WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    $stmt->bind_result($image);
    $stmt->fetch();
    header("Content-Type: image/jpeg"); 
    echo $image;
} else {
    header("Content-Type: image/png");
    readfile('path/to/placeholder.png');
}

$stmt->close();
$conn->close();

?>