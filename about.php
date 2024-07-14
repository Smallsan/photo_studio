<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Photography Studio - About</title>
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



    <section id="about" class="about">
        <div class="container">
            <div class="section-title" data-aos="fade-down">
                <h2>About Us</h2>
                <p>
                    We conceived the idea of starting an affordable self-portrait studio
                    late last year, just before 2024. We worked diligently to prepare
                    the studio as quickly as possible, aiming to open by the start of
                    the year. Fortunately, we achieved our goal! You welcomed us with
                    open arms, and we're here to cater to all your photography needs!
                </p>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-left">
                    <img src="assets/images/about/About.png" class="img-fluid mx-auto" alt="About Us"
                        style="display: block;" />
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content text-center" data-aos="fade-right">
                    <h3>No Matter the Size, We've Got You Covered!</h3>
                    <h4>Our Solution: Zoom Lenses</h4>
                    <p>
                        Our studio is equipped with a 24-megapixel mirrorless camera,
                        complemented by zoom lenses to accommodate all our customers'
                        needs:
                    </p>
                    <ul class="list-unstyled">
                        <li>Need a portrait shot? No problem.</li>
                        <li>Want a group picture? No problem.</li>
                        <li>
                            Desire a photo of your entire family tree? As long as they fit
                            in the studio, it's NO PROBLEM!
                        </li>
                    </ul>
                    <p>
                        We strive to provide the best service possible. Our team is
                        committed to ensuring your satisfaction and delivering
                        high-quality results. We believe in the value of capturing
                        moments, and we're here to help you do just that.
                    </p>
                    <p>
                        We are equipped with two flash units to perfectly illuminate your
                        portraits. Our venue is air-conditioned, ensuring a comfortable
                        environment for your photography session.
                    </p>
                    <p>
                        In case you are in need of an assitant photographer, Just tell our inhouse staff and they will
                        gladly assist and help you to get the best shot possible.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="Studio" class="Studio">
        <div class="container">
            <div class="section-title" data-aos="fade-down">
                <h2>Our Studio</h2>
                <p>This is what our place looks like! Feel free to visit us anytime.</p>
                </p>
            </div>
            <div class="row">
                <div class="col-md-4" data-aos="fade-up">
                    <img src="assets/images/about/studio_1.png" class="img-fluid" alt="Gallery Image 1" />
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <img src="assets/images/about/studio_2.png" class="img-fluid" alt="Gallery Image 2" />
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <img src="assets/images/about/studio_3.png" class="img-fluid" alt="Gallery Image 3" />
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