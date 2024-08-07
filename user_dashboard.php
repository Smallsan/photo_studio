<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Photography Studio - User Dashboard</title>
    <link rel="stylesheet" href="assets/stylesheet/styles.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body>
    <?php include './modules/navbar.php'; ?>
    <?php include './modules/appointment_form.php'; ?>
    <?php include './modules/login_signup_form.php'; ?>


    <div class="container my-5">
        <h2 class="mb-4">Your Pending Appointments</h2>
        <div class="row">
            <?php

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "photo_studio";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        if (!isset($_SESSION['user_id'])) {
            echo "Please log in to view your appointments.";
            exit;
        }

        $user_id = $_SESSION['user_id'];

        $sql = "SELECT * FROM appointments WHERE user_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $user_id);

        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='col-md-6 col-lg-4 mb-3'>";
                echo "<div class='card'>";
                echo "<div class='card-body'>";
                echo "<h5 class='card-title'>Appointment ID: " . $row["id"] . "</h5>";
                echo "<p class='card-text'><strong>Name:</strong> " . $row["name"] . "</p>";
                echo "<p class='card-text'><strong>Email:</strong> " . $row["email"] . "</p>";
                echo "<p class='card-text'><strong>Phone:</strong> " . $row["phone"] . "</p>";
                echo "<p class='card-text'><strong>Date:</strong> " . $row["date"] . "</p>";
                echo "<p class='card-text'><strong>Time:</strong> " . $row["time"] . "</p>";
                echo "<p class='card-text'><strong>Package Type:</strong> " . $row["booking_type"] . "</p>";
                echo "<p class='card-text'><strong>Confirmed:</strong> " . ($row["confirmed"] ? "Yes" : "No") . "</p>";
                echo "</div>"; // Close card-body
                echo "</div>"; // Close card
                echo "</div>"; // Close column
            }
        } else {
            echo "<p>You have no appointments.</p>";
        }
        ?>
        </div> <!-- Close row -->
    </div> <!-- Close container -->


    <?php include './modules/footer.php'; ?>
</body>
<script src='scripts/no_redirect.js'></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
</script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script> <!-- AOS JS -->
<script>
AOS.init();
</script>

</html>