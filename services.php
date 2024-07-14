<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Photography Studio - Services</title>
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