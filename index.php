<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Photography Studio - Home</title>
    <link rel="stylesheet" href="assets/stylesheet/styles.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body>
    <header id="header" class="d-flex align-items-center position-sticky top-0">
        <div class="container-fluid d-flex justify-content-between custom-container">
            <h1 class="logo">
                <a href="index.php">
                    <img src="assets/images/logo/logo.jpg" alt="Photography Studio" />
                    <span class="logo-text">Tans' Self-Portrait Studio</span>
                </a>
            </h1>

            <nav class="navbar navbar-expand-lg">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <button type="button" class="btn btn-primary nav-link book-now-btn" data-bs-toggle="modal"
                                data-bs-target="#appointmentModal">
                                Book Now
                            </button>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="services.php">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="gallery.php">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <div class="modal fade lower-modal" id="appointmentModal" tabindex="-1" aria-labelledby="appointmentModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title " id="appointmentModalLabel">Book an Appointment</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="appointmentForm" action="submit_appointment.php" method="post">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name:</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone Number:</label>
                            <input type="tel" class="form-control" id="phone" name="phone" required
                                pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" title="Phone number format: 123-456-7890">
                        </div>
                        <div class="mb-3">
                            <label for="date" class="form-label">Date:</label>
                            <input type="date" class="form-control" id="date" name="date" required>
                        </div>
                        <div class="mb-3">
                            <label for="time" class="form-label">Time:</label>
                            <input type="time" class="form-control" id="time" name="time" required>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" form="appointmentForm">Book Appointment</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Carousel -->
    <!--1920 x 720-->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-aos="fade-down">

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="assets/images/carousel/main_carousel/slide.png" alt="First slide" />
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="assets/images/carousel/main_carousel/slide_2.png" alt="Second slide" />
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


    <section>
        <div class="container">
            <div class="section-title" data-aos="fade-down">
                <h2>What does the studio look like?</h2>
                <p>
                    So you can have an idea of what to expect when you visit our studio.
                </p>
            </div>


            <div class="row justify-content-center" data-aos="zoom-in">
                <div class="col-6 text-center">
                    <h2>The Wall of Fame!!</h2>
                    <p>
                        Feel free to stick your photo, If it still fits...
                    </p>
                    <div class="card mx-auto">
                        <img src="assets/images/home/wall.png" class="card-img-top" alt="">
                        <div class="card-body">
                        </div>
                    </div>
                </div>
                <div class="col-6 text-center">
                    <h2>The Photo Area!!</h2>
                    <p>
                        Believe me, It's bigger than it looks like.
                    </p>
                    <div class="card mx-auto">
                        <img src="assets/images/home/photo.jpg" class="card-img-top" alt="">
                        <div class="card-body">
                        </div>
                    </div>
                </div>
            </div>


    </section>


    <footer id="footer">
        <div class="container">
            <div class="copyright">
                &copy; Copyright
                <strong><span>Tan's Self-Portrait Studio</span></strong>. All Rights Reserved
            </div>
        </div>
    </footer>
</body>

<script>
document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('appointmentForm').addEventListener('submit', function(e) {
        e.preventDefault();

        var formData = new FormData(this);

        fetch(this.action, {
                method: 'POST',
                body: formData,
            })
            .then(response => response.text())
            .then(data => {
                alert("Appointment submitted successfully!");
                this.reset();
            })
            .catch(error => {
                console.error('Error:', error);
                alert("There was an error submitting the appointment.");
            });
    });
});
</script>
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