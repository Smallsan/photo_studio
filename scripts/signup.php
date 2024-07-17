<?php
// Check if email or username already exists
$checkQuery = "SELECT email, username FROM users WHERE email = ? OR username = ?";
$stmt = $conn->prepare($checkQuery);
$stmt->bind_param("ss", $email, $post_username);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    $stmt->bind_result($existingEmail, $existingUsername);
    $stmt->fetch();
    if ($existingEmail === $email) {
        echo "Email already in use. Please choose another email.";
    } else {
        echo "Username already taken. Please choose another username.";
    }
    $stmt->close();
} else {
    $stmt->close(); 
    $stmt = $conn->prepare("INSERT INTO users (username, email, password, user_type, last_login) VALUES (?, ?, ?, ?, NOW())");
    $user_type = 'user'; 
    $stmt->bind_param("ssss", $post_username, $email, $hashed_password, $user_type);

    if ($stmt->execute()) {
        echo "User registered successfully";

        $user_id = $stmt->insert_id;

        $_SESSION['loggedin'] = true;
        $_SESSION['email'] = $email;
        $_SESSION['user_id'] = $user_id;
        $_SESSION['username'] = $post_username;
        $_SESSION['user_type'] = $user_type;

    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();