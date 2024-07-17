<!DOCTYPE html>
<html lang="en" style="height: 100%;">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Photography Studio - User_Profile</title>
    <link rel="stylesheet" href="assets/stylesheet/styles.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body
    style="height: 100%; display: flex; align-items: center; justify-content: center; background-image: url('../assets/images/change_password/background.png'); background-size: cover; background-position: center;">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17aFzNFEe6kCce8v6kqoFg4bghjB4CGWvTn" crossorigin="anonymous">
    </script>

</body>

</html>
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

$user_id = $_SESSION['user_id'];

$sql = "SELECT * FROM users_profile WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo '<div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">User Profile</h5>
                <p class="card-text">Name: ' . $row['name'] . '</p>
                <p class="card-text">Birthday: ' . $row['birthday'] . '</p>
                <p class="card-text">Address: ' . $row['address'] . '</p>
                <p class="card-text">Phone: ' . $row['phone'] . '</p>
                <button type="button" class="btn btn-secondary" onclick="window.location.href=\'../index.php\'">Go Back</button>
            </div>
          </div>';
} else {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'];
        $birthday = $_POST['birthday'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];

        $insertSql = "INSERT INTO users_profile (id, name, birthday, address, phone) VALUES (?, ?, ?, ?, ?)";
        $insertStmt = $conn->prepare($insertSql);
        $insertStmt->bind_param("issss", $user_id, $name, $birthday, $address, $phone);
        
        if ($insertStmt->execute()) {
            echo '<div class="alert alert-success" role="alert">Profile created successfully.</div>';
            header("Refresh:0");
        } else {
            echo '<div class="alert alert-danger" role="alert">Error: ' . $insertStmt->error . '</div>';
        }
    } else {
        echo '<div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Create User Profile</h5>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="birthday">Birthday:</label>
                            <input type="date" class="form-control" name="birthday" required>
                        </div>
                        <div class="form-group">
                            <label for="address">Address:</label>
                            <input type="text" class="form-control" name="address" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone:</label>
                            <input type="text" class="form-control" name="phone" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Create Profile</button>
                    </form>
                </div>
              </div>';
    }
}

$conn->close();
?>