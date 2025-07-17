<?php
include_once('include/head.php');
?>

<body>

    <div id="page" class="page">
        <!-- HEADER -->
        <?php
include_once('include/header.php');
?>

        <div id="breadcrumb" class="division">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class=" breadcrumb-holder">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">contact us</li>
                                </ol>
                            </nav>
                            <h4 class="h4-sm steelblue-color">Contact Us</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact Section -->
        <section class="section-contact py-5 bg-light">
            <div class="container">
                <div class="row g-5 align-items-stretch">
                    <!-- Contact Info -->
                    <div class="col-lg-5">
                        <div class="bg-white p-4 p-lg-5 rounded-4 shadow h-100">
                            <h2 class="mb-2 text-primary fw-bold fs-3">We guide students to the best colleges across
                                India</h2>
                            <p class="mb-4 text-secondary fs-6">
                                Our institute provides expert consultation for students to select top paramedical and
                                healthcare colleges.
                                We support them through every step of their career journey.
                            </p>
                            <ul class="list-unstyled mb-0">
                                <li class="mb-4 d-flex align-items-start">
                                    <div class="flex-shrink-0" style="padding-right: 10px;">
                                        <i class="bi bi-geo-alt-fill" style="font-size: 1.6rem; color: #224185;"></i>
                                    </div>
                                    <div>
                                        <h5 class="fw-bold text-dark">Institute Address</h5>
                                        <div class="text-dark">Indiramill Jamunipur Colony, Chauri Road, Bhadohi –
                                            221401</div>
                                    </div>
                                </li>
                                <li class="mb-4 d-flex align-items-start">
                                    <div class="flex-shrink-0" style="padding-right: 10px;">
                                        <i class="bi bi-telephone-fill" style="font-size: 1.6rem; color: #224185;"></i>
                                    </div>
                                    <div>
                                        <h5 class="fw-bold text-dark">Phone</h5>
                                        <a href="tel:+917007451364" class="text-decoration-none text-dark">+91
                                            7007451364</a>
                                    </div>
                                </li>
                                <li class="mb-2 d-flex align-items-start">
                                    <div class="flex-shrink-0" style="padding-right: 10px;">
                                        <i class="bi bi-envelope-fill" style="font-size: 1.6rem; color: #224185;"></i>
                                    </div>
                                    <div>
                                        <h5 >Email</h5>
                                        <a href="mailto:info@expertparamedical.in"
                                            class="text-decoration-none text-dark">info@expertparamedical.com</a>
                                    </div>
                                </li>
                            </ul>

                        </div>
                    </div>


                    <!-- Contact Form -->
                    <div class="col-lg-7">
                        <div class="bg-white p-4 p-lg-5 rounded-4 shadow h-100">
                            <h3 class="mb-4 text-dark fw-semibold">Get in Touch</h3>
                            <form method="post">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <input type="text" name="name" class="form-control form-control-lg shadow-sm"
                                            placeholder="Name*" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="email" name="email" class="form-control form-control-lg shadow-sm"
                                            placeholder="Email*" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="tel" name="phone" class="form-control form-control-lg shadow-sm"
                                            placeholder="Phone*" required maxlength="10" pattern="[6-9]{1}[0-9]{9}">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <select name="service" class="form-control form-control-lg shadow-sm" required>
                                            <option value="">-- Select Service --</option>
                                            <option value="Admission Guidance">Admission Guidance</option>
                                            <option value="College Counseling">College Counseling</option>
                                            <option value="Career Support">Career Support</option>
                                        </select>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <textarea name="message" rows="4" class="form-control shadow-sm rounded-4"
                                            placeholder="Your Message*" required></textarea>
                                    </div>
                                    <div class="col-12 text-center pt-3">
                                        <button type="submit"
                                            class="btn btn-lg px-5 py-2 text-white shadow fw-semibold rounded-pill"
                                            style="background-color: #224185;">
                                            <i class="bi bi-send-fill me-2"></i> SUBMIT
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <!-- Google Map Section -->
        <section class="py-5">
            <div class="container-fluid">
                <div class="rounded overflow-hidden shadow" style="height: 500px;">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3426.302920081912!2d82.5935280751699!3d25.382758677591962!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x398fdf4841d53471%3A0x419cf6f212e96369!2sExpert%20Paramedical%20Institute%20%26%20Research%20Center!5e1!3m2!1sen!2sin!4v1752235773838!5m2!1sen!2sin"
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </section>




        <?php
   include_once('include/footer.php');
   ?>
</body>

</html>