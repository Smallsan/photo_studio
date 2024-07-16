<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require '../../scripts/database.php';

    header('Content-Type: application/json'); 

    $name = $conn->real_escape_string($_POST['name']);
    $rating = $conn->real_escape_string($_POST['rating']);
    $message = $conn->real_escape_string($_POST['message']);
    $approved = 0;
    $date = date("Y-m-d"); 

    $sql = "INSERT INTO reviews (name, rating, message, approved, date) VALUES ('$name', '$rating', '$message', '$approved', '$date')";

    if ($conn->query($sql) === TRUE) {
        echo json_encode(["message" => "Review submitted successfully. It will be visible once approved."]);
    } else {
        echo json_encode(["error" => "Error: " . $conn->error]);
    }

    $conn->close();
}
?>