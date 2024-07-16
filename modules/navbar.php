<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
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
                        <a class="nav-link" href="contact.php">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="reviews.php">Reviews</a>
                    </li>
                    <?php if (!isset($_SESSION['loggedin'])): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#loginModal">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#signupModal">Sign Up</a>
                    </li>
                    <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#userOptionsModal">Hello,
                            <?php echo htmlspecialchars($_SESSION['username']); ?></a>
                    </li>
                    <script>
                    function confirmLogout() {
                        var logout = confirm("Are you sure you want to logout?");
                        if (logout) {
                            window.location.href = 'scripts/logout.php';
                        }
                    }
                    </script>
                    <?php endif; ?>
                </ul>
            </div>
        </nav>
    </div>
</header>

<div class="modal fade lower-modal" id="userOptionsModal" tabindex="-1" aria-labelledby="userOptionsModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="userOptionsModalLabel">User Options</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php if ($_SESSION['user_type'] == 'admin'): ?>
                <a href="admin_dashboard.php" class="btn btn-primary w-100 mb-2">Admin Dashboard</a>
                <?php else: ?>
                <a href="user_dashboard.php" class="btn btn-primary w-100 mb-2">User Dashboard</a>
                <a href="#" class="btn btn-primary w-100 mb-2" data-bs-toggle="modal"
                    data-bs-target="#appointmentModal">Book Now</a>

                <?php endif; ?>
                <button onclick="confirmLogout()" class="btn btn-danger w-100">Log Out</button>
            </div>
        </div>
    </div>
</div>