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
    <?php include './modules/navbar.php'; ?>
    <?php include './modules/appointment_form.php'; ?>
    <?php include './modules/login_signup_form.php'; ?>

    <div class="video-container">
        <video autoplay muted loop>
            <source src="assets/videos/studio.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
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