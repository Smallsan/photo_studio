<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Photography Studio - Gallery</title>
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
                <h2>Gallery</h2>
                <p>Some sample pictures from our clients. Click on the images to expand them.</p>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <?php
                $servername = "localhost";
                $username = "root";
                $password = ""; 
                $dbname = "photo_studio"; 
                
                $conn = new mysqli($servername, $username, $password, $dbname);
                
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                $sql = "SELECT id FROM gallery";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $imageId = $row["id"];
                ?>
                <div class="col-md-3" data-aos="fade-up">
                    <div class="card">
                        <img src="sub_modules/gallery/load_gallery.php?id=<?php echo $imageId; ?>" class="card-img-top"
                            data-bs-toggle="modal" data-bs-target="#image<?php echo $imageId; ?>Modal" />
                        <div class="card-body"></div>
                    </div>
                </div>
                <?php
                    }
                } else {
                    echo "0 results";
                }
                ?>
            </div>
        </div>
    </section>

    <?php
    if ($result->num_rows > 0) {
        $result->data_seek(0); 
        while ($row = $result->fetch_assoc()) {
            $imageId = $row["id"];
            echo '<div class="modal fade" id="image' . $imageId . 'Modal" tabindex="-1" aria-labelledby="image' . $imageId . 'ModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img src="sub_modules/gallery/load_gallery.php?id=' . $imageId . '" class="img-fluid" />
                    </div>
                </div>
            </div>
        </div>';
        }
    }
    ?>

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