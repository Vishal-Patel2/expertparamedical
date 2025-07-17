<!-- HEADER START -->
<header id="header" class="header">

    <!-- 📢 DESKTOP HEADER (≥992px) -->
    <div class="desktop-header d-none d-lg-block">
        <!-- Marquee -->
        <div class="bg-white border-bottom border-danger">
            <marquee behavior="scroll" direction="left" class="text-danger fw-bold p-1">
                📢 For Admission Please reach us at : +91-7007451364
            </marquee>
        </div>

        <!-- Navbar -->
        <div class="desktop-navbar text-white" style="background-color: rgb(0, 25, 51);">
            <div class="container d-flex justify-content-between align-items-center py-2">
                <!-- Logo -->
                <a href="index.php">
                    <img src="assets/images/logo.png" alt="Logo" width="100" height="100">
                </a>

                <!-- Navigation -->
                <nav>
                    <ul class="nav gap-4 mb-0">
                        <li class="nav-item"><a class="nav-link text-white fw-semibold" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link text-white fw-semibold" href="about-us.php">About</a>
                        </li>
                        <li class="nav-item"><a class="nav-link text-white fw-semibold" href="course.php">Course</a>
                        </li>
                        <li class="nav-item"><a class="nav-link text-white fw-semibold" href="gallery.php">Gallery</a>
                        </li>
                        <li class="nav-item"><a class="nav-link text-white fw-semibold" href="blog.php">News & Blog</a>
                        </li>
                        <li class="nav-item"><a class="nav-link text-white fw-semibold" href="faq.php">Faqs</a></li>
                        <li class="nav-item"><a class="nav-link text-white fw-semibold" href="contact-us.php">Contact
                                Us</a></li>
                        <li class="nav-item">
                            <a href="admission-apply.php"
                                class="btn btn-warning text-primary fw-bold px-3 rounded-pill shadow-sm">Apply Now</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <!-- 📱 MOBILE HEADER (<992px) -->
    <div class="mobile-header d-block d-lg-none">
        <!-- Contact Info -->
        <div class="bg-white border-bottom px-3 py-2">
            <div class="d-flex justify-content-between align-items-center flex-wrap gap-2">
                <div class="text-primary small d-flex align-items-center gap-2">
                    <i class="fas fa-phone"></i>
                    <a href="tel:+917007451364" class="text-dark text-decoration-none fw-bold">+91-7007451364</a>
                </div>
                <div class="text-primary small d-flex align-items-center gap-2">
                    <i class="fas fa-envelope"></i>
                    <a href="mailto:info@expertparamedical.com"
                        class="text-dark text-decoration-none fw-bold">info@expertparamedical.com</a>
                </div>
            </div>
        </div>

        <!-- Logo & Toggle -->
        <div class="d-flex justify-content-between align-items-center px-3 py-2"
            style="background-color: rgb(0, 25, 51);">
            <a href="index.php">
                <img src="assets/images/logo.png" alt="Logo" style="height: 80px;">
            </a>
            <button class="btn text-white fs-4" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileMenu"
                aria-controls="mobileMenu">
                <i class="fas fa-bars p-2 border border-warning rounded"></i>
            </button>
        </div>
    </div>

    <!-- 📱 MOBILE OFFCANVAS MENU -->
    <div class="offcanvas offcanvas-start d-lg-none custom-offcanvas" tabindex="-1" id="mobileMenu">
        <div class="offcanvas-header text-white" style="background-color: rgb(0, 25, 51);">
            <img src="assets/images/logo.png" alt="Logo" height="80">
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
        </div>
        <div class="offcanvas-body bg-white px-3">
            <ul class="list-unstyled">
                <li><a href="index.php" class="d-block py-2 text-dark fw-semibold"><i
                            class="bi bi-chevron-right me-2"></i>Home</a></li>
                <li><a href="about-us.php" class="d-block py-2 text-dark fw-semibold"><i
                            class="bi bi-chevron-right me-2"></i>About</a></li>
                <li><a href="course.php" class="d-block py-2 text-dark fw-semibold"><i
                            class="bi bi-chevron-right me-2"></i>Course</a></li>
                <li><a href="gallery.php" class="d-block py-2 text-dark fw-semibold"><i
                            class="bi bi-chevron-right me-2"></i>Gallery</a></li>
                <li><a href="blog.php" class="d-block py-2 text-dark fw-semibold"><i
                            class="bi bi-chevron-right me-2"></i>News & Blog</a></li>
                <li><a href="faq.php" class="d-block py-2 text-dark fw-semibold"><i
                            class="bi bi-chevron-right me-2"></i>Faqs</a></li>
                <li><a href="contact-us.php" class="d-block py-2 text-dark fw-semibold"><i
                            class="bi bi-chevron-right me-2"></i>Contact Us</a></li>
            </ul>
        </div>
    </div>

</header>
<!-- HEADER END -->

<!-- ✅ STYLES -->
<style>
/* Navbar link hover */
.nav-link {
    transition: color 0.3s ease-in-out;
}

.nav-link:hover {
    color: #ffd700 !important;
    /* Golden hover */
}

/* Offcanvas customization */
.custom-offcanvas {
    max-width: 75% !important;
}

/* Offcanvas links */
.offcanvas .list-unstyled a {
    text-decoration: none;
    transition: color 0.3s;
}

.offcanvas .list-unstyled a:hover {
    color: #dc3545;
}

/* Logo size */
.desktop-header img,
.mobile-header img {
    max-height: 110px;
}

/* Icon size */
.fas {
    font-size: 14px;
}

/* Marquee font size for small screens */
@media (max-width: 991px) {
    .bg-white.border-bottom {
        font-size: 14px;
    }
}
</style>

<!-- ✅ REQUIRED LIBRARIES -->