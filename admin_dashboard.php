<?php
session_start();

if (!isset($_SESSION['user_type']) || $_SESSION['user_type'] !== 'admin') {
    header('Location: index.php');
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
        <h1 class="mb-4">Admin Dashboard</h1>
        <ul class="nav nav-tabs" id="adminTabs" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="appointments-tab" data-bs-toggle="tab"
                    data-bs-target="#appointments" type="button" role="tab" aria-controls="appointments"
                    aria-selected="true">All Appointments</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews" type="button"
                    role="tab" aria-controls="reviews" aria-selected="false">Manage Reviews</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="gallery-tab" data-bs-toggle="tab" data-bs-target="#gallery" type="button"
                    role="tab" aria-controls="gallery" aria-selected="false">Gallery</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="users-tab" data-bs-toggle="tab" data-bs-target="#users" type="button"
                    role="tab" aria-controls="users" aria-selected="false">Users</button>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="user-profiles-tab" data-bs-toggle="tab" href="#userProfiles" role="tab"
                    aria-controls="userProfiles" aria-selected="false">User Profiles</a>
            </li>


        </ul>

    </div>
    <div class="tab-content" id="adminTabsContent">
        <div class="tab-pane fade show active" id="appointments" role="tabpanel" aria-labelledby="appointments-tab">
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
                            echo "<p class='card-text'><strong>Package Type:</strong> " . $row["booking_type"] . "</p>";
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
        </div>
        <div class="tab-pane fade" id="userProfiles" role="tabpanel" aria-labelledby="user-profiles-tab">
            <div class="container mt-5">
                <h2 class="mb-4">User Profiles</h2>
                <div class="row">
                    <?php
            $sql = "SELECT id, name, birthday, address, phone FROM users_profile ORDER BY id ASC";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                echo '<div class="table-responsive">';
                echo '<table class="table">';
                echo '<thead>';
                echo '<tr>';
                echo '<th>ID</th>';
                echo '<th>Name</th>';
                echo '<th>Birthday</th>';
                echo '<th>Address</th>';
                echo '<th>Phone</th>';
                echo '</tr>';
                echo '</thead>';
                echo '<tbody>';
                while ($row = $result->fetch_assoc()) {
                    echo '<tr>';
                    echo '<td>' . $row['id'] . '</td>';
                    echo '<td>' . $row['name'] . '</td>';
                    echo '<td>' . $row['birthday'] . '</td>';
                    echo '<td>' . $row['address'] . '</td>';
                    echo '<td>' . $row['phone'] . '</td>';
                    echo '</tr>';
                }
                echo '</tbody>';
                echo '</table>';
                echo '</div>';
            } else {
                echo '<p>No user profiles found.</p>';
            }
            ?>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
            <div class="container mt-5">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <h2 class="text-center mb-4">Manage Reviews</h2>
                        <?php
                        $query = "SELECT * FROM reviews ORDER BY approved ASC, name ASC";
                        $result = $conn->query($query);
                        if ($result->num_rows > 0) {
                            echo '<div class="table-responsive">';
                            echo '<table class="table table-bordered">';
                            echo '<thead class="thead-dark">';
                            echo '<tr>';
                            echo '<th>Name</th>';
                            echo '<th>Rating</th>';
                            echo '<th>Message</th>';
                            echo '<th>Approved</th>';
                            echo '<th>Action</th>';
                            echo '</tr>';
                            echo '</thead>';
                            echo '<tbody>';
                            while ($row = $result->fetch_assoc()) {
                                echo '<tr>';
                                echo '<td>' . htmlspecialchars($row['name']) . '</td>';
                                echo '<td>' . htmlspecialchars($row['rating']) . '</td>';
                                echo '<td>' . htmlspecialchars($row['message']) . '</td>';
                                echo '<td>' . ($row['approved'] ? 'Yes' : 'No') . '</td>';
                                echo '<td>';
                                echo '<button class="btn btn-success" onclick="updateReviewStatus(' . $row['id'] . ', 1)"' . ($row['approved'] ? ' disabled' : '') . '>Approve</button>';
                                echo '<button class="btn btn-danger" onclick="updateReviewStatus(' . $row['id'] . ', 0)"' . (!$row['approved'] ? ' disabled' : '') . '>Disapprove</button>';
                                echo '</td>';
                                echo '</tr>';
                            }
                            echo '</tbody>';
                            echo '</table>';
                            echo '</div>';
                        } else {
                            echo '<p class="text-center">No reviews found.</p>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="gallery" role="tabpanel" aria-labelledby="gallery-tab">
            <div class="container mt-5">
                <h2 class="mb-4">Gallery</h2>
                <div class="row" style="height: 1000px; overflow-y: scroll;">
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
                        <form onsubmit="event.preventDefault(); uploadImage();" enctype="multipart/form-data"
                            class="card p-3">
                            <div class="form-group">
                                <label for="image">Select image to upload:</label>
                                <input type="file" class="form-control-file" name="image" id="image" required>
                            </div>
                            <button type="submit" class="btn btn-success">Upload</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="tab-pane fade" id="users" role="tabpanel" aria-labelledby="users-tab">
            <div class="container mt-5">
                <h2 class="mb-4">Users</h2>
                <div class="row">
                    <?php
                    $query = "SELECT id, email, user_type, last_login, username FROM users ORDER BY id ASC";
                    $result = $conn->query($query);
                    if ($result->num_rows > 0) {
                        echo '<div class="table-responsive">';
                        echo '<table class="table">';
                        echo '<thead>';
                        echo '<tr>';
                        echo '<th>ID</th>';
                        echo '<th>Email</th>';
                        echo '<th>User Type</th>';
                        echo '<th>Username</th>';
                        echo '<th>Last Login</th>';
                        echo '</tr>';
                        echo '</thead>';
                        echo '<tbody>';
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>' . $row['id'] . '</td>';
                            echo '<td>' . $row['email'] . '</td>';
                            echo '<td>' . $row['user_type'] . '</td>';
                            echo '<td>' . $row['username'] . '</td>';
                            echo '<td>' . $row['last_login'] . '</td>';
                            echo '</tr>';
                        }
                        echo '</tbody>';
                        echo '</table>';
                        echo '</div>';
                    } else {
                        echo '<p>No users found.</p>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    </div>

    <script>
    $(document).ready(function() {
        $('#adminTabs a').on('click', function(e) {
            e.preventDefault()
            $(this).tab('show')
        })
    });

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
        dataType: 'json',
        success: function(response) {
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