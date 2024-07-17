<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Photography Studio - Contact</title>
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

    <section>
        <div class="container py-5">
            <h2 class="text-center mb-5">Reviews</h2>
            <div class="row">
                <?php
                require 'scripts/database.php';

                $sortOption = 'date'; 

                if ($sortOption == 'rating') {
                    $sql = "SELECT name, rating, message, date FROM reviews WHERE approved = 1 ORDER BY rating DESC, date DESC";
                } else {
                    $sql = "SELECT name, rating, message, date FROM reviews WHERE approved = 1 ORDER BY date DESC";
                }

                $result = $conn->query($sql);

                $avgRatingSql = "SELECT AVG(rating) as averageRating FROM reviews WHERE approved = 1";
                $avgResult = $conn->query($avgRatingSql);
                $avgRow = $avgResult->fetch_assoc();
                $averageRating = round($avgRow['averageRating'], 1);

                echo "<div class='text-center my-4'><h2 class='display-4'>Average Rating: " . $averageRating . " ⭐</h2></div>";
                
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<div class='col-md-4 mb-4'>";
                        echo "<div class='card h-100'>";
                        echo "<div class='card-body'>";
                        echo "<h5 class='card-title'>" . htmlspecialchars($row['name']) . "</h5>";
                        echo "<h6 class='card-subtitle mb-2 text-muted'>Rating: " . str_repeat("⭐", $row['rating']) . "</h6>";
                        echo "<p class='card-text'>" . htmlspecialchars($row['message']) . "</p>";
                        echo "</div>";
                        echo "<div class='card-footer'>";
                        echo "<small class='text-muted'>Reviewed on " . $row['date'] . "</small>";
                        echo "</div>";
                        echo "</div>";
                        echo "</div>";
                    }
                } else {
                    echo "<div class='col-12'>";
                    echo "<p>No reviews found.</p>";
                    echo "</div>";
                }

                $conn->close();
                ?>
            </div>
        </div>
    </section>

    <section>
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card shadow">
                        <div class="card-body">
                            <h2 class="card-title text-center mb-4">Add a Review</h2>
                            <form action="sub_modules/reviews/submit_review.php" id="reviewForm" method="post">
                                <div class="mb-3">
                                    <label for="nameInput" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="nameInput" name="name"
                                        placeholder="Your Name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="ratingInput" class="form-label">Rating</label>
                                    <select class="form-select" id="ratingInput" name="rating" required>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="messageTextarea" class="form-label">Message</label>
                                    <textarea class="form-control" id="messageTextarea" name="message" rows="3"
                                        placeholder="Your review" required></textarea>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Submit Review</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <script>
    document.getElementById('reviewForm').addEventListener('submit', function(e) {
        e.preventDefault();

        const formData = new FormData(this);

        fetch('sub_modules/reviews/submit_review.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.message) {
                    alert(data.message);
                    this.reset();
                } else if (data.error) {
                    alert(data.error);
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('An error occurred. Please try again.');
            });
    });
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
</script>

</html>