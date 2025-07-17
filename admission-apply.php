<?php include_once('include/head.php'); ?>

<body>
    <?php include_once('include/header.php'); ?>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $name = $_POST['name'] ?? '';
        $email = $_POST['email'] ?? '';
        $phone = $_POST['phone'] ?? '';
        $course = $_POST['course'] ?? '';
        $message = $_POST['message'] ?? '';

        $whatsappNumber = '919569956867';
        $text = "Admission Inquiry:\n\n👤 Name: $name\n📞 Phone: $phone";
        if (!empty($email)) $text .= "\n📧 Email: $email";
        $text .= "\n🎓 Course: $course";
        if (!empty($message)) $text .= "\n📝 Message: $message";

        $url = "https://wa.me/$whatsappNumber?text=" . urlencode($text);

        echo "<script>
            alert('Thank you! Your form has been submitted. Our team will contact you soon.');
            window.location.href = '$url';
        </script>";
        exit;
    }
    ?>

    <section class="parallax cover-background" data-overlay-dark="4" data-background="assets/images/bg1.webp"
        style="background-image: url('assets/images/bg1.webp');">
        <div class="container-fluid h-100" style="overflow: hidden;">
            <div class="row text-left h-100" style="justify-content: center;">
                <div class="col-sm-6 pb-3 text-light" style="padding: 50px;">
                    <div id="hero-section-for" class="text-center mb-40">
                        <form action="" method="POST" class="row hero-form" style="background-color: #224185c4;">
                            <div class="col-md-12 mb-2 white-color">
                                <h1 class="white-color" style="font-size: 30px;">Please Fill The Form</h1>
                            </div>

                            <!-- Native dropdown without Select2 -->
                            <div class="col-lg-12 mb-3">
                                <label for="course" class="form-label text-white">Select Your Course *</label>
                                <select id="course" name="course" class="form-control" required>
                                    <option value="" disabled selected>Select Course...</option>
                                    <option value="Diploma in Pharmacy (DPharm)">Diploma in Pharmacy (DPharm)</option>
                                    <option value="Bachelor of Pharmacy (BPharma)">Bachelor of Pharmacy (BPharma)</option>
                                    <option value="General Nursing and Midwifery (GNM)">General Nursing and Midwifery (GNM)</option>
                                    <option value="Auxiliary Nurse Midwifery (ANM)">Auxiliary Nurse Midwifery (ANM)</option>
                                    <option value="Bachelor of Science in Nursing (BSc Nursing)">Bachelor of Science in Nursing (BSc Nursing)</option>
                                    <option value="Post Basic Bachelor of Science in Nursing (Post Basic BSc Nursing)">Post Basic Bachelor of Science in Nursing (Post Basic BSc Nursing)</option>
                                    <option value="Operation Theatre Technology (OT)">Operation Theatre Technology (OT)</option>
                                    <option value="Bachelor of Ayurvedic Medicine and Surgery (BAMS)">Bachelor of Ayurvedic Medicine and Surgery (BAMS)</option>
                                    <option value="Bachelor of Homeopathic Medicine and Surgery (BHMS)">Bachelor of Homeopathic Medicine and Surgery (BHMS)</option>
                                    <option value="Bachelor of Physiotherapy (BPT)">Bachelor of Physiotherapy (BPT)</option>
                                    <option value="Diploma in Physiotherapy (DPT)">Diploma in Physiotherapy (DPT)</option>
                                    <option value="Diploma in Medical Laboratory Technology (DMLT)">Diploma in Medical Laboratory Technology (DMLT)</option>
                                    <option value="Others">Others</option>
                                </select>
                            </div>

                            <!-- Input Fields -->
                            <div class="col-lg-12 mb-3">
                                <input type="text" name="name" class="form-control" placeholder="Enter Your Name*" required>
                            </div>

                            <div class="col-lg-12 mb-3">
                                <input type="email" name="email" class="form-control" placeholder="Enter Your Email (optional)">
                            </div>

                            <div class="col-lg-12 mb-3">
                                <input type="tel" name="phone" class="form-control" placeholder="Enter Your Phone Number*" required pattern="[6-9]{1}[0-9]{9}" minlength="10" maxlength="10">
                            </div>

                            <div class="col-lg-12 mb-3">
                                <textarea name="message" class="form-control" rows="4" placeholder="Enter your message or query..."></textarea>
                            </div>

                            <div class="col-lg-12 form-btn mb-3">
                                <button type="submit" class="btn btn-white tra-white-hover"><b>Submit</b></button>
                            </div>

                            <div class="col-lg-12 hero-form-ms text-center">
                                <div class="sending-msg"><span class="loading"></span></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include_once('include/footer.php'); ?>
</body>

</html>
