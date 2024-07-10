<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Photography Studio</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/stylesheet/styles.css" />
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
                <h2>Gallery</h2>
                <p>
                    Some sample pictures from our clients. Click on the images to expand them.
                </p>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-3" data-aos="fade-up">
                        <div class="card">
                            <img src="assets/images/clients/1.jpg" class="card-img-top" alt="Image 1"
                                data-bs-toggle="modal" data-bs-target="#image1Modal" />
                            <div class="card-body"></div>
                        </div>
                    </div>
                    <div class="col-md-3" data-aos="fade-up">
                        <div class="card">
                            <img src="assets/images/clients/2.jpg" class="card-img-top" alt="Image 2"
                                data-bs-toggle="modal" data-bs-target="#image2Modal" />
                            <div class="card-body"></div>
                        </div>
                    </div>
                    <div class="col-md-3" data-aos="fade-up">
                        <div class="card">
                            <img src="assets/images/clients/3.jpg" class="card-img-top" alt="Image 3"
                                data-bs-toggle="modal" data-bs-target="#image3Modal" />
                            <div class="card-body"></div>
                        </div>
                    </div>
                    <div class="col-md-3" data-aos="fade-up">
                        <div class="card">
                            <img src="assets/images/clients/4.jpg" class="card-img-top" alt="Image 4"
                                data-bs-toggle="modal" data-bs-target="#image4Modal" />
                            <div class="card-body"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-3" data-aos="fade-up">
                        <div class="card">
                            <img src="assets/images/clients/5.jpg" class="card-img-top" alt="Image 5"
                                data-bs-toggle="modal" data-bs-target="#image5Modal" />
                            <div class="card-body"></div>
                        </div>
                    </div>
                    <div class="col-md-3" data-aos="fade-up">
                        <div class="card">
                            <img src="assets/images/clients/6.jpg" class="card-img-top" alt="Image 6"
                                data-bs-toggle="modal" data-bs-target="#image6Modal" />
                            <div class="card-body"></div>
                        </div>
                    </div>
                    <div class="col-md-3" data-aos="fade-up">
                        <div class="card">
                            <img src="assets/images/clients/7.jpg" class="card-img-top" alt="Image 7"
                                data-bs-toggle="modal" data-bs-target="#image7Modal" />
                            <div class="card-body"></div>
                        </div>
                    </div>
                    <div class="col-md-3" data-aos="fade-up">
                        <div class="card">
                            <img src="assets/images/clients/8.jpg" class="card-img-top" alt="Image 8"
                                data-bs-toggle="modal" data-bs-target="#image8Modal" />
                            <div class="card-body"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-3" data-aos="fade-up">
                        <div class="card">
                            <img src="assets/images/clients/9.jpg" class="card-img-top" alt="Image 9"
                                data-bs-toggle="modal" data-bs-target="#image9Modal" />
                            <div class="card-body"></div>
                        </div>
                    </div>
                    <div class="col-md-3" data-aos="fade-up">
                        <div class="card">
                            <img src="assets/images/clients/10.jpg" class="card-img-top" alt="Image 10"
                                data-bs-toggle="modal" data-bs-target="#image10Modal" />
                            <div class="card-body"></div>
                        </div>
                    </div>
                    <div class="col-md-3" data-aos="fade-up">
                        <div class="card">
                            <img src="assets/images/clients/11.jpg" class="card-img-top" alt="Image 11"
                                data-bs-toggle="modal" data-bs-target="#image11Modal" />
                            <div class="card-body"></div>
                        </div>
                    </div>
                    <div class="col-md-3" data-aos="fade-up">
                        <div class="card">
                            <img src="assets/images/clients/12.jpg" class="card-img-top" alt="Image 12"
                                data-bs-toggle="modal" data-bs-target="#image12Modal" />
                            <div class="card-body"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3" data-aos="fade-up">
                        <div class="card">
                            <img src="assets/images/clients/13.jpg" class="card-img-top" data-bs-toggle="modal"
                                data-bs-target="#image13Modal" />
                            <div class="card-body"></div>
                        </div>
                    </div>
                    <div class="col-md-3" data-aos="fade-up">
                        <div class="card">
                            <img src="assets/images/clients/14.jpg" class="card-img-top" data-bs-toggle="modal"
                                data-bs-target="#image14Modal" />
                            <div class="card-body"></div>
                        </div>
                    </div>
                    <div class="col-md-3" data-aos="fade-up">
                        <div class="card">
                            <img src="assets/images/clients/15.jpg" class="card-img-top" data-bs-toggle="modal"
                                data-bs-target="#image15Modal" />
                            <div class="card-body"></div>
                        </div>
                    </div>
                    <div class="col-md-3" data-aos="fade-up">
                        <div class="card">
                            <img src="assets/images/clients/16.jpg" class="card-img-top" data-bs-toggle="modal"
                                data-bs-target="#image16Modal" />
                            <div class="card-body"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-3" data-aos="fade-up">
                        <div class="card">
                            <img src="assets/images/clients/17.jpg" class="card-img-top" data-bs-toggle="modal"
                                data-bs-target="#image17Modal" />
                            <div class="card-body"></div>
                        </div>
                    </div>
                    <div class="col-md-3" data-aos="fade-up">
                        <div class="card">
                            <img src="assets/images/clients/18.jpg" class="card-img-top" data-bs-toggle="modal"
                                data-bs-target="#image18Modal" />
                            <div class="card-body"></div>
                        </div>
                    </div>
                    <div class="col-md-3" data-aos="fade-up">
                        <div class="card">
                            <img src="assets/images/clients/19.jpg" class="card-img-top" data-bs-toggle="modal"
                                data-bs-target="#image19Modal" />
                            <div class="card-body"></div>
                        </div>
                    </div>
                    <div class="col-md-3" data-aos="fade-up">
                        <div class="card">
                            <img src="assets/images/clients/20.jpg" class="card-img-top" data-bs-toggle="modal"
                                data-bs-target="#image20Modal" />
                            <div class="card-body"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="image1Modal" tabindex="-1" aria-labelledby="image1ModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="assets/images/clients/1.jpg" class="img-fluid" />
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="image2Modal" tabindex="-1" aria-labelledby="image2ModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="assets/images/clients/2.jpg" class="img-fluid" />
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="image3Modal" tabindex="-1" aria-labelledby="image3ModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="assets/images/clients/3.jpg" class="img-fluid" />
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="image4Modal" tabindex="-1" aria-labelledby="image4ModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="assets/images/clients/4.jpg" class="img-fluid" />
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="image5Modal" tabindex="-1" aria-labelledby="image5ModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="assets/images/clients/5.jpg" class="img-fluid" />
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="image6Modal" tabindex="-1" aria-labelledby="image6ModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="assets/images/clients/6.jpg" class="img-fluid" />
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="image7Modal" tabindex="-1" aria-labelledby="image7ModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="assets/images/clients/7.jpg" class="img-fluid" />
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="image8Modal" tabindex="-1" aria-labelledby="image8ModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="assets/images/clients/8.jpg" class="img-fluid" />
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="image9Modal" tabindex="-1" aria-labelledby="image9ModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="assets/images/clients/9.jpg" class="img-fluid" />
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="image10Modal" tabindex="-1" aria-labelledby="image10ModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="assets/images/clients/10.jpg" class="img-fluid" />
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="image11Modal" tabindex="-1" aria-labelledby="image11ModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="assets/images/clients/11.jpg" class="img-fluid" />
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="image12Modal" tabindex="-1" aria-labelledby="image12ModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="assets/images/clients/12.jpg" class="img-fluid" />
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="image13Modal" tabindex="-1" aria-labelledby="image9ModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="assets/images/clients/13.jpg" class="img-fluid" />
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="image14Modal" tabindex="-1" aria-labelledby="image10ModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="assets/images/clients/14.jpg" class="img-fluid" />
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="image15Modal" tabindex="-1" aria-labelledby="image11ModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="assets/images/clients/15.jpg" class="img-fluid" />
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="image16Modal" tabindex="-1" aria-labelledby="image12ModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="assets/images/clients/16.jpg" class="img-fluid" />
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="image17Modal" tabindex="-1" aria-labelledby="image9ModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="assets/images/clients/17.jpg" class="img-fluid" />
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="image18Modal" tabindex="-1" aria-labelledby="image10ModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="assets/images/clients/18.jpg" class="img-fluid" />
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="image19Modal" tabindex="-1" aria-labelledby="image11ModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="assets/images/clients/19.jpg" class="img-fluid" />
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="image20Modal" tabindex="-1" aria-labelledby="image12ModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="assets/images/clients/20.jpg" class="img-fluid" />
                </div>
            </div>
        </div>
    </div>

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
<script src="https://unpkg.com/aos@next/dist/aos.js"></script> <!-- AOS JS -->
<script>
AOS.init();
</script>

</html>