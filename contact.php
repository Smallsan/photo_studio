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
                            <a class="nav-link" href="index.php">Home</a>
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
                            <a class="nav-link active" href="contact.php">Contact Us</a>
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
                <h2>Contact Us</h2>
                <p>
                    For inquiries and reservations, please contact us through our facebook page or through the contact
                    details below.
                </p>
            </div>

            <div class="row">
                <div class="col-md-6" data-aos="fade-right">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title">
                                <i class="bi bi-camera"></i> Tans' Self-Portrait Studio
                            </h2>
                            <p class="card-text">
                                <i class="bi bi-geo-alt"></i> 2nd Flr Unit D Block 49 A Lot 1
                                Maya-maya st, Longos Malabon City.
                            </p>
                            <p class="card-text">
                                <i class="bi bi-clock"></i> MON - SUN | 8AM-10PM
                            </p>
                            <p class="card-text">
                                <i class="bi bi-file-earmark-text"></i> Page · Photography
                                Videography
                            </p>
                            <p class="card-text">
                                <i class="bi bi-geo-alt"></i> Maya-Maya Street, Malabon,
                                Philippines
                            </p>
                            <p class="card-text">
                                <i class="bi bi-telephone"></i> 0927 056 6739
                            </p>
                            <p class="card-text">
                                <i class="bi bi-envelope"></i>
                                tansselfportraitstudio@gmail.com
                            </p>
                            <p class="card-text">
                                <i class="bi bi-journal-text"></i>
                                <i>Although we accept walk-ins, we highly recommend that you book a reservation.

                                </i>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-left">
                    <div class="card">
                        <div class="card-body">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15440.18905824836!2d120.9599374!3d14.6532585!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b500732e1241%3A0xcb00e8f6e797c586!2stans&#39;%20self-portrait%20studio!5e0!3m2!1sen!2sph!4v1716389890638!5m2!1sen!2sph"
                                width="100%" height="450" style="border: 0" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>

                <div class="row mt-4" data-aos="fade-up">
                    <div class="col-md-4">
                        <div class="card">
                            <img src="assets/images/contact/facebook.png" class="card-img-top" alt="Facebook Page">
                            <div class="card-body">
                                <h5 class="card-title">Contact Us on Facebook</h5>
                                <p class="card-text">For more information or inquiries, please contact us through our
                                    Facebook page.</p>
                                <a href="https://www.facebook.com/tansselfportraitstudio" class="btn btn-primary">Go to
                                    Facebook Page</a>
                            </div>
                        </div>
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