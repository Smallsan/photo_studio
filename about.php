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

            <div class="row">
                <div class="col-lg-6 order-1 order-lg-2 " data-aos="fade-left">
                    <img src="assets/images/about/About.png" class="img-fluid" alt="About Us" />
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
                    <h3>No Matter the Size, We've Got You Covered!</h3>
                    <h4>Our Solution: Zoom Lenses</h4>
                    <p>
                        Our studio is equipped with a 24-megapixel mirrorless camera,
                        complemented by zoom lenses to accommodate all our customers'
                        needs:
                    </p>
                    <ul>
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