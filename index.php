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


    <?php include './modules/footer.php'; ?>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" defer></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.0/js/bootstrap.bundle.min.js" defer></script>
<script src="https://unpkg.com/aos@next/dist/aos.js" defer></script>
<script defer>
document.addEventListener("DOMContentLoaded", function() {
    AOS.init();
});
</script>

</html>