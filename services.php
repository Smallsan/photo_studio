<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Photography Studio</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/stylesheet/styles.css" />
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
                            <button type="button" class="btn btn-primary nav-link" data-bs-toggle="modal"
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
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="appointmentModalLabel">Book an Appointment</h5>
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
    <section>
        <div class="container">
            <div class="section-title" data-aos="fade-down">
                <h2>Services</h2>
                <p>
                    At the moment we only offer self-portrait services. We have three
                    packages to choose from: Basic, Premium, and Group. Each package has
                    its own unique features and benefits. Choose the one that best suits
                    your needs. In the future we plan to offer creative shots with a
                    professional photographer. Stay tuned for updates.
                </p>
            </div>

            <div class="container-fluid mt-5">
                <div class="row">
                    <div class="col-md-4" data-aos="fade-right">
                        <img class="d-block w-100" src="assets/images/carousel/sub_carousel/basic_package.jpg" alt=""
                            data-bs-toggle="modal" data-bs-target="#myModal1" />

                        <div class="modal fade" id="myModal1">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid"
                                            src="assets/images/carousel/sub_carousel/basic_package.jpg" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4" data-aos="fade-up">
                        <img class="d-block w-100" src="assets/images/carousel/sub_carousel/premium_package.jpg" alt=""
                            data-bs-toggle="modal" data-bs-target="#myModal2" />

                        <div class="modal fade" id="myModal2">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid"
                                            src="assets/images/carousel/sub_carousel/premium_package.jpg" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4" data-aos="fade-left">
                        <img class="d-block w-100" src="assets/images/carousel/sub_carousel/group_package.jpg" alt=""
                            data-bs-toggle="modal" data-bs-target="#myModal3" />

                        <div class="modal fade" id="myModal3">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid"
                                            src="assets/images/carousel/sub_carousel/group_package.jpg" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer id="footer">
        <div class="container">
            <div class="social-links">
                <a href="https://www.facebook.com/tansselfportraitstudio" target="_blank" class="facebook">
                    <i class="bi bi-facebook">Facebook</i>
                </a>
                <a href="tansselfportraitstudio@gmail.com" class="email">
                    <i class="bi bi-envelope-fill">Email</i>
                </a>
                <a href="tel:+639270566739" class="phone">
                    <i class="bi bi-telephone-fill">Phone</i>
                </a>
            </div>
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
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<!-- AOS JS -->
<script>
AOS.init();
</script>

</html>