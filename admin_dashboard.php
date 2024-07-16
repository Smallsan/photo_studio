<?php
session_start();

if (!isset($_SESSION['user_type']) || $_SESSION['user_type'] !== 'admin') {
    echo "Access denied. This page is for admin only.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Photography Studio - Admin Dashboard</title>
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
        <h2 class="mb-4">All Appointments</h2>
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

            $sql = "SELECT * FROM appointments";
            $result = $conn->query($sql);

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
                    echo "<p class='card-text'><strong>Confirmed:</strong> ";
                    echo "<select onchange='updateConfirmation(" . $row["id"] . ", this.value)'>";
                    echo "<option value='1'" . ($row["confirmed"] ? " selected" : "") . ">Yes</option>";
                    echo "<option value='0'" . (!$row["confirmed"] ? " selected" : "") . ">No</option>";
                    echo "</select></p>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                }
            } else {
                echo "<p>No appointments found.</p>";
            }
            ?>
        </div>
    </div>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "photo_studio";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $query = "SELECT * FROM reviews ORDER BY approved ASC, name ASC";
    $result = $conn->query($query);
    ?>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h2 class="text-center mb-4">Manage Reviews</h2>
                <?php if ($result->num_rows > 0) : ?>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th>Name</th>
                                <th>Rating</th>
                                <th>Message</th>
                                <th>Approved</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row = $result->fetch_assoc()) : ?>
                            <tr>
                                <td><?= htmlspecialchars($row['name']) ?></td>
                                <td><?= htmlspecialchars($row['rating']) ?></td>
                                <td><?= htmlspecialchars($row['message']) ?></td>
                                <td><?= $row['approved'] ? 'Yes' : 'No' ?></td>
                                <td>
                                    <button class="btn btn-success" onclick="updateReviewStatus(<?= $row['id'] ?>, 1)"
                                        <?= $row['approved'] ? 'disabled' : '' ?>>Approve</button>
                                    <button class="btn btn-danger" onclick="updateReviewStatus(<?= $row['id'] ?>, 0)"
                                        <?= !$row['approved'] ? 'disabled' : '' ?>>Disapprove</button>
                                </td>
                            </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
                <?php else : ?>
                <p class="text-center">No reviews found.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <h2 class="mb-4">Gallery</h2>
        <div class="row" style="height: 400px; overflow-y: scroll;">
            <?php
            $query = "SELECT id, upload_date, image FROM gallery ORDER BY upload_date DESC";
            $result = $conn->query($query);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='col-md-4 mb-3'>";
                    echo "<div class='card'>";
                    echo "<img class='card-img-top' src='data:image/jpeg;base64," . base64_encode($row['image']) . "' style='width: 100%; height: auto;'>";
                    echo "<div class='card-body'>";
                    echo "<p class='card-text'>Upload Date: " . $row["upload_date"] . "</p>";
                    echo "<button class='btn btn-danger' onclick='removeImage(" . $row["id"] . ")'>Remove</button>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                }
            } else {
                echo "<p class='col-12'>No images found.</p>";
            }
            ?>
        </div>
        <button class="btn btn-primary mt-3" onclick="toggleUploadForm()">Add Image</button>
    </div>

    <div id="imageUploadForm" class="container mt-3" style="display: none;">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form onsubmit="event.preventDefault(); uploadImage();" enctype="multipart/form-data" class="card p-3">
                    <div class="form-group">
                        <label for="image">Select image to upload:</label>
                        <input type="file" class="form-control-file" name="image" id="image" required>
                    </div>
                    <button type="submit" class="btn btn-success">Upload</button>
                </form>
            </div>
        </div>
    </div>

    <script>
    function toggleUploadForm() {
        var x = document.getElementById("imageUploadForm");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
    </script>

    <?php include './modules/footer.php'; ?>
</body>
<script src='scripts/no_redirect.js'></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
</script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
AOS.init();

function updateConfirmation(appointmentId, confirmed) {
    $.ajax({
        url: 'sub_modules/admin_dashboard/update_appointment.php',
        type: 'POST',
        data: {
            id: appointmentId,
            confirmed: confirmed
        },
        success: function(response) {
            alert('Appointment confirmation updated.');
        },
        error: function() {
            alert('Error updating appointment confirmation.');
        }
    });
}

function uploadImage() {
    var formData = new FormData();
    var imageFile = $('#image')[0].files[0];
    formData.append('image', imageFile);

    $.ajax({
        url: 'sub_modules/admin_dashboard/upload_image.php',
        type: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        success: function(responseText) {
            var response = JSON.parse(responseText); // Explicitly parse the JSON response
            if (response.error) {
                alert('Error uploading image: ' + response.error);
            } else {
                alert(response.message);
                location.reload();
            }
        },
        error: function() {
            alert('Error uploading image.');
        }
    });
}

function removeImage(imageId) {
    if (confirm('Are you sure you want to remove this image?')) {
        $.ajax({
            url: 'sub_modules/admin_dashboard/remove_image.php',
            type: 'POST',
            data: {
                id: imageId
            },
            success: function(response) {
                alert('Image removed successfully.');
                location.reload();
            },
            error: function() {
                alert('Error removing image.');
            }
        });
    }
}

function updateReviewStatus(reviewId, approved) {
    $.ajax({
        url: 'sub_modules/admin_dashboard/update_review.php',
        type: 'POST',
        data: {
            id: reviewId,
            approved: approved
        },
        success: function(response) {
            alert('Review status updated.');
            location.reload();
        },
        error: function() {
            alert('Error updating review status.');
        }
    });
}
</script>

</html>