<?php
include_once('include/head.php');
?>

<body>

    <div id="page" class="page">
        <!-- HEADER -->
        <?php
include_once('include/header.php');
?>

        <!-- crousel section Start -->

        <link href="assets/css/home.css" rel="stylesheet">
        <style>
        @media screen and (max-width: 800px) {
            .imgs-100 {
                width: 100px;
                height: 100px;
            }
        }
        </style>

        <section class="mob-block">
            <div id="" class="" data-ride="">
                <a href="course.php">
                    <img src="assets/images/carousel/Banner1.jpg" width="100%" height="100%" style="width:100%"
                        alt="slide" /></a>
            </div>
        </section>
        <div id="demo" class="carousel slide dod-block" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/images/carousel/Banner1.jpg" width="100%" height="100%" style="width:100%"
                        alt="banner">
                    <div class="carousel-caption">
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="assets/images/carousel/Banner2.jpg" width="100%" height="100%" style="width:100%"
                        alt="banner">
                    <div class="carousel-caption">
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/images/carousel/Banner3.jpg" width="100%" height="100%" style="width:100%"
                        alt="banner">
                    <div class="carousel-caption">
                    </div>
                </div>
            </div>

            <div class="col-md-4"
                style="    position: absolute;    right: 0;    top: 30px;    z-index: 9;    right: 40px;">
                <div class="info-4-img text-center " style="visibility: visible;  ">
                    <div id="hero-section-form" class="text-center mb-40">
                        <form action="#" method="POST" class="row hero-form"
                            style="border-radius: 26px;background-color: #ffffff;">
                            <input type="hidden" name="_token" value="a5qreYuBZSN3sCE786EdtCkrAj3ZvPD1Dr4ijDvX"
                                autocomplete="off">
                            <!-- Form Text -->
                            <div class="col-md-12 black-color">
                                <h4 class="h4-xs" style="margin-bottom: 20px;">Enquiry Now</h4>
                            </div>
                            <!-- Contact Form Input -->
                            <div id="input-name" class="col-lg-12">
                                <input type="hidden" name="course" class="form-control name" value="Home Page Enquiry"
                                    placeholder="Enter Your Name*" required="" readonly>
                                <input type="hidden" name="fees" class="form-control name" value="0"
                                    placeholder="Enter Your Name*" required="" readonly>
                                <input type="text" name="name" class="form-control name my-id"
                                    placeholder="Enter Your Name*" minlength="2" maxlength="50" required
                                    onselectstart="return false" oncut="return false" oncopy="return false"
                                    onpaste="return false" ondrag="return false" ondrop="return false">
                            </div>
                            <div id="input-email" class="col-lg-12">
                                <input type="email" name="email" class="form-control email"
                                    placeholder="Enter Your Email*" required onselectstart="return false"
                                    oncut="return false" oncopy="return false" onpaste="return false"
                                    ondrag="return false" ondrop="return false">
                            </div>
                            <div id="input-phone" class="col-lg-12">
                                <input name="phone" class="form-control phone only-numbers"
                                    placeholder="Enter Your Phone Number*" type="text" pattern="[6-9]{1}[0-9]{9}"
                                    minlength="10" maxlength="10" title="Please enter mobile number eg: 9810183948"
                                    required onselectstart="return false" oncut="return false" oncopy="return false"
                                    onpaste="return false" ondrag="return false" ondrop="return false">
                            </div>
                            <!-- Contact Form Button -->
                            <div class="col-lg-12 form-btn">
                                <button type="submit" class="btn btn-theme  submit"><b>Submit</b></button>
                            </div>
                            <!-- Contact Form Message -->
                            <div class="col-lg-12 hero-form-msg text-center">
                                <div class="sending-msg"><span class="loading"></span></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <a class="carousel-control-prev" href="#demo" data-slide="prev" aria-label="pre">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next" aria-label="nex">
                <span class="carousel-control-next-icon"></span>
            </a>


            <div class="container position-relative " style="    margin-top: -60px; ">
                <div class="row" style="justify-content: space-between;">
                    <div class="col-sm-3"
                        style="margin:10px;background:#fff;  box-shadow: 0px 5px 35px 0px rgb(195 195 195);    max-width: 22%;  padding: 10px;">
                        <a href="#" target="_blank" rel="nofollow">
                            <div class="d-flex" style="    justify-content: space-evenly;">
                                <img src="assets/images/Govt.webp" width="50" height="50" alt="govt icon">
                                <h3 class="h5 mb-1 mt-1 m-text" style="color:#000;"> <b>Goverment</b> </br> <span
                                        style="color:#000;font-size:15px">Certified Programs</span>
                                </h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-3"
                        style="margin:10px;background:#fff; box-shadow: 0px 5px 35px 0px rgb(195 195 195);   max-width: 22%;  padding: 10px;">
                        <a href="#" target="" rel="nofollow">
                            <div class="d-flex" style="    justify-content: space-evenly;">
                                <img src="assets/images/5500students.webp" width="50" height="50" alt="student icon">
                                <h3 class="h5  mb-1 mt-1 m-text" style="color:#000;"> <b>500+</b> </br> <span
                                        style="color:#000;font-size:15px">Successful Students</span>
                                </h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-3"
                        style="margin:10px;background:#fff; box-shadow:0px 5px 35px 0px rgb(195 195 195);    max-width: 22%; padding: 10px;">
                        <a href="#" target="">
                            <div class="d-flex" style="    justify-content: space-evenly;">
                                <img src="assets/images/Experienced.webp" width="50" height="50" alt="exp icon">
                                <h3 class="h5  mb-1 mt-1 m-text" style="color:#000;"> <b>Experienced</b> </br> <span
                                        style="color:#000;font-size:15px">Faculty</span>
                                </h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-3"
                        style="margin:10px;background:#fff;  box-shadow: 0px 5px 35px 0px rgb(195 195 195); max-width: 22%;  padding: 10px;">
                        <a href="#" target="">
                            <div class="d-flex" style="justify-content: space-evenly;">
                                <img src="assets/images/Courses.webp" width="50" height="50" alt="course icon">
                                <h3 class="h5  mb-1 mt-1 m-text" style="color:#000;"> <b>Advance </b> </br> <span
                                        style="color:#000;font-size:15px"> Courses Material</span>
                                </h3>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>


        <!-- crousel section End -->

        <!-- ABOUT  Section Start-->
        <section id="services-6" class="bg-blue wide-40 servicess-section division pb-0">
            <div class="container">
                <!-- SECTION TITLE -->
                <div class="row">
                    <div class="col-lg-10 offset-lg-1 section-title">
                        <div class="col-sm-12 text-center">
                            <h1 class="lp-section-heading text-center">Welcome to <span class="text-primary">Expert
                                    Paramedical
                                    Institute & Research Center</span>
                            </h1>
                            <b>Studying at you guys brought an added value to my professional life.</br> The courses
                                were very
                                interesting and the professors were.
                            </b>
                        </div>
                    </div>
                </div>
                <div class="row d-flex align-items-center">
                    <div class="col-lg-4 s6-img">
                        <div class="sbox-6-img text-center ">
                            <img class="img-fluid" src="assets/images/Girl.webp" alt="services-image" width="397"
                                height="378" alt="service icon">
                        </div>
                    </div>
                    <!-- RIGHT SIDE CONTENT -->
                    <div class="col-md-6 col-lg-4 mob-fl ">
                        <!-- SERVICE BOX #4 -->
                        <div class="sbox-6 pl-30 mob-50 ">
                            <img src="assets/images/Academic.webp" width="70" height="70" alt="academic icon"></br>
                            <h5 class="h5-md">ACADEMIC EXCELLENCE</h5>
                            <p class="dm-none">Expert Paramedical Institute & Research Center understands and values the
                                importance of Quality
                                Education. Our students benefit from a rich learning environment, fostering their
                                academic
                                growth and bright future in the medical field.</p>
                        </div>
                        <!-- SERVICE BOX #6 -->
                        <div class="sbox-6 pl-30 mob-50">
                            <img src="assets/images/admission.webp" width="70" height="70" alt="admission icon"><br>
                            <h5 class="h5-md">ADMISSION & COURSES</h5>
                            <p class="dm-none">
                                We offer top healthcare and paramedical programs such as D.Pharm, B.Sc Nursing, and
                                BAMS.
                                Start your career with industry-recognized courses and expert guidance.
                            </p>
                        </div>

                    </div>
                    <div class="col-md-6 col-lg-4 mob-fl ">
                        <!-- SERVICE BOX #4 -->
                        <div class="sbox-6 pl-30 mob-50">
                            <img src="assets/images/Placements.webp" width="70" height="70" alt="consulting icon"><br>
                            <h5 class="h5-md">PAN-INDIA CONSULTING</h5>
                            <p class="dm-none">
                                We provide expert consulting services across India, helping individuals and
                                organizations achieve their goals
                                with tailored solutions and trusted guidance.
                            </p>
                        </div>


                        <!-- SERVICE BOX #6 -->
                        <div class="sbox-6 pl-30 mob-50">
                            <img src="assets/images/recognizatio.webp" width="70" height="70" alt="recognize icon"></br>
                            <h5 class="h5-md">PLACEMENTS</h5>
                            <p class="dm-none">We have an extraordinary placement record in a multitude of prestigious
                                hospitals in Bhadohi and outside Bhadohi.</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <style>
        @media (max-width: 768px) {

            /* Shrink icons */
            .sbox-6 img {
                width: 50px !important;
                height: 50px !important;
            }

            /* Adjust title font */
            .sbox-6 .h5-md {
                font-size: 1rem !important;
                line-height: 1.3;
                text-align: center;
            }

            /* Optional: center icons and text */
            .sbox-6 {
                text-align: center;
                padding-left: 0 !important;
            }
        }

        @media (max-width: 576px) {
            .sbox-6 img {
                width: 38px !important;
                height: 38px !important;
            }

            .sbox-6 .h5-md {
                font-size: 0.95rem !important;
            }
        }
        </style>
        <!-- ABOUT  Section End-->

        <!-- courses section Start -->
        <section id="blog-1" class="wide-40 blog-section division">
            <div class="container">
                <!-- SECTION TITLE -->
                <div class="row">
                    <div class="col-lg-10 offset-lg-1 section-title">
                        <div class="col-sm-12 text-center">
                            <h2 class="lp-section-heading text-center"
                                style="    padding-top: 0px;    padding-bottom: 0px;">
                                Our <span class="text-primary">Courses</span></h2>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-lg-4 mb-30">
                        <a href="#">
                            <div class="blog-post course-box" style="height:auto; position: relative;">
                                <div class="blog-post-img">
                                    <img class="img-fluid"
                                        src="public/library/course/image/1750222955-1749731159-1723199369-1712993594-certificate-in-radio-imaging-technology.webp"
                                        alt="D.Pharm course image" width="400" height="173" />
                                </div>
                                <table class="table mt-2 mb-2">
                                    <tbody>
                                        <tr>
                                            <th style="border-right: 1px solid #284587;border-top:none;padding: 0px;">
                                                <h5 style="margin-bottom: .2rem; color: #224185;">Eligibility</h5>
                                                <p>10+2 with Science stream</p>
                                            </th>
                                            <th style="border-right: 1px solid #284587;border-top:none;padding: 0px;">
                                                <h5 style="margin-bottom: .2rem; color: #224185;">Duration</h5>
                                                <p>2 Years</p>
                                            </th>
                                            <th style="border-top:none;padding: 0px;">
                                                <h5 style="margin-bottom: .2rem; color: #224185;">Total Fees</h5>
                                                <p>2 Lakh</p>
                                            </th>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="blog-post-txt mt-2 mb-2" style="padding-bottom: 3px;">
                                    <!-- Post Title -->
                                    <h4 class="h5-sm"
                                        style="margin: 10px; color: #fff; background: #224185; border-radius: 8px;">
                                        <p style="font-size:20px;color: #fff;">D.Pharm</p>
                                    </h4>
                                </div>
                            </div>
                        </a>
                    </div>


                    <div class="col-lg-4 mb-30">
                        <a href="#">
                            <div class="blog-post course-box" style="   height:auto;  position: relative; ">
                                <div class="blog-post-img">
                                    <img class="img-fluid"
                                        src="public/library/course/image/1750223149-1749731485-1723204123-1715666413-1712995134-dmlt-course.webp"
                                        alt="blog-post-image" width="400" height="173" />
                                </div>
                                <table class="table mt-2 mb-2">
                                    <tbody>
                                        <tr>
                                            <th style="border-right: 1px solid #284587;border-top:none;padding: 0px;">
                                                <h5 style="      margin-bottom: .2rem;  color: #224185;">Eligibility
                                                </h5>
                                                <p>10+2 (PCB)</p>
                                            </th>
                                            <th style="border-right: 1px solid #284587;border-top:none;padding: 0px;">
                                                <h5 style="      margin-bottom: .2rem;  color: #224185;">Duration </h5>
                                                2 Years</p>
                                            </th>
                                            <th style="border-top:none;padding: 0px;">
                                                <h5 style="     margin-bottom: .2rem;   color: #224185;">Total Fees
                                                </h5>
                                                <p> 160000</p>
                                            </th>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="blog-post-txt mt-2 mb-2" style="   padding-bottom: 3px;">
                                    <!-- Post Title -->
                                    <h4 class="h5-sm"
                                        style="        margin: 10px;  color: #fff;    background: #224185;    border-radius: 8px;">
                                        <p style="font-size:20px;color: #fff; ">DMLT Course</p>
                                    </h4>

                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 mb-30">
                        <a href="#">
                            <div class="blog-post course-box" style="height:auto; position: relative;">
                                <div class="blog-post-img">
                                    <img class="img-fluid"
                                        src="public/library/course/image/1750223322-1749731485-1723204123-1715666413-1712995134-dmlt-course.webp"
                                        alt="B.Pharm course image" width="400" height="173" />
                                </div>
                                <table class="table mt-2 mb-2">
                                    <tbody>
                                        <tr>
                                            <th style="border-right: 1px solid #284587;border-top:none;padding: 0px;">
                                                <h5 style="margin-bottom: .2rem; color: #224185;">Eligibility</h5>
                                                <p>10+2 with Science (PCM/PCB)</p>
                                            </th>
                                            <th style="border-right: 1px solid #284587;border-top:none;padding: 0px;">
                                                <h5 style="margin-bottom: .2rem; color: #224185;">Duration</h5>
                                                <p>4 Years</p>
                                            </th>
                                            <th style="border-top:none;padding: 0px;">
                                                <h5 style="margin-bottom: .2rem; color: #224185;">Total Fees</h5>
                                                <p>3.60 Lakh</p>
                                            </th>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="blog-post-txt mt-2 mb-2" style="padding-bottom: 3px;">
                                    <!-- Post Title -->
                                    <h4 class="h5-sm"
                                        style="margin: 10px; color: #fff; background: #224185; border-radius: 8px;">
                                        <p style="font-size:20px;color: #fff;">B.Pharm</p>
                                    </h4>
                                </div>
                            </div>
                        </a>
                    </div>


                    <div class="col-lg-4 mb-30">
                        <a href="#">
                            <div class="blog-post course-box" style="height:auto; position: relative;">
                                <div class="blog-post-img">
                                    <img class="img-fluid"
                                        src="public/library/course/image/1750223669-1749731299-1723022938-1718023475-1717758968-bsc-in-medical-laboratory-technology.webp"
                                        alt="GNM course image" width="400" height="173" />
                                </div>
                                <table class="table mt-2 mb-2">
                                    <tbody>
                                        <tr>
                                            <th style="border-right: 1px solid #284587;border-top:none;padding: 0px;">
                                                <h5 style="margin-bottom: .2rem; color: #224185;">Eligibility</h5>
                                                <p>10+2 with any stream</p>
                                            </th>
                                            <th style="border-right: 1px solid #284587;border-top:none;padding: 0px;">
                                                <h5 style="margin-bottom: .2rem; color: #224185;">Duration</h5>
                                                <p>3 Years</p>
                                            </th>
                                            <th style="border-top:none;padding: 0px;">
                                                <h5 style="margin-bottom: .2rem; color: #224185;">Total Fees</h5>
                                                <p>3 Lakh</p>
                                            </th>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="blog-post-txt mt-2 mb-2" style="padding-bottom: 3px;">
                                    <!-- Post Title -->
                                    <h4 class="h5-sm"
                                        style="margin: 10px; color: #fff; background: #224185; border-radius: 8px;">
                                        <p style="font-size:20px;color: #fff;">GNM (General Nursing & Midwifery)</p>
                                    </h4>
                                </div>
                            </div>
                        </a>
                    </div>


                    <div class="col-lg-4 mb-30">
                        <a href="#">
                            <div class="blog-post course-box" style="height:auto; position: relative;">
                                <div class="blog-post-img">
                                    <img class="img-fluid"
                                        src="public/library/course/image/1749732598-1723202983-1719233009-1712992856-masters-program-in-radio-imaging-technology.webp"
                                        alt="ANM course image" width="400" height="173" />
                                </div>
                                <table class="table mt-2 mb-2">
                                    <tbody>
                                        <tr>
                                            <th style="border-right: 1px solid #284587;border-top:none;padding: 0px;">
                                                <h5 style="margin-bottom: .2rem; color: #224185;">Eligibility</h5>
                                                <p>10+2 with any stream</p>
                                            </th>
                                            <th style="border-right: 1px solid #284587;border-top:none;padding: 0px;">
                                                <h5 style="margin-bottom: .2rem; color: #224185;">Duration</h5>
                                                <p>2 Years</p>
                                            </th>
                                            <th style="border-top:none;padding: 0px;">
                                                <h5 style="margin-bottom: .2rem; color: #224185;">Total Fees</h5>
                                                <p>2 Lakh</p>
                                            </th>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="blog-post-txt mt-2 mb-2" style="padding-bottom: 3px;">
                                    <!-- Post Title -->
                                    <h4 class="h5-sm"
                                        style="margin: 10px; color: #fff; background: #224185; border-radius: 8px;">
                                        <p style="font-size:20px;color: #fff;">ANM (Auxiliary Nursing & Midwifery)</p>
                                    </h4>
                                </div>
                            </div>
                        </a>
                    </div>


                    <div class="col-lg-4 mb-30">
                        <a href="#">
                            <div class="blog-post course-box" style="height:auto; position: relative;">
                                <div class="blog-post-img">
                                    <img class="img-fluid"
                                        src="public/library/course/image/1750225481-1749731299-1723022938-1718023475-1717758968-bsc-in-medical-laboratory-technology.webp"
                                        alt="B.Sc Nursing course image" width="400" height="173" />
                                </div>
                                <table class="table mt-2 mb-2">
                                    <tbody>
                                        <tr>
                                            <th style="border-right: 1px solid #284587;border-top:none;padding: 0px;">
                                                <h5 style="margin-bottom: .2rem; color: #224185;">Eligibility</h5>
                                                <p>10+2 with PCB & English</p>
                                            </th>
                                            <th style="border-right: 1px solid #284587;border-top:none;padding: 0px;">
                                                <h5 style="margin-bottom: .2rem; color: #224185;">Duration</h5>
                                                <p>4 Years</p>
                                            </th>
                                            <th style="border-top:none;padding: 0px;">
                                                <h5 style="margin-bottom: .2rem; color: #224185;">Total Fees</h5>
                                                <p>5 Lakh</p>
                                            </th>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="blog-post-txt mt-2 mb-2" style="padding-bottom: 3px;">
                                    <!-- Post Title -->
                                    <h4 class="h5-sm"
                                        style="margin: 10px; color: #fff; background: #224185; border-radius: 8px;">
                                        <p style="font-size:20px;color: #fff;">B.Sc Nursing</p>
                                    </h4>
                                </div>
                            </div>
                        </a>
                    </div>


                    <div class="col-lg-4 mb-30">
                        <a href="#">
                            <div class="blog-post course-box" style="height:auto; position: relative;">
                                <div class="blog-post-img">
                                    <img class="img-fluid"
                                        src="public/library/course/image/1750313644-1749731948-1723021702-1715767879-1712992664-diploma-in-radiology-and-imaging-technology.webp"
                                        alt="Post Basic B.Sc Nursing Image" width="400" height="173" />
                                </div>
                                <table class="table mt-2 mb-2">
                                    <tbody>
                                        <tr>
                                            <th style="border-right: 1px solid #284587;border-top:none;padding: 0px;">
                                                <h5 style="margin-bottom: .2rem; color: #224185;">Eligibility</h5>
                                                <p>GNM</p>
                                            </th>
                                            <th style="border-right: 1px solid #284587;border-top:none;padding: 0px;">
                                                <h5 style="margin-bottom: .2rem; color: #224185;">Duration</h5>
                                                <p>2 Years</p>
                                            </th>
                                            <th style="border-top:none;padding: 0px;">
                                                <h5 style="margin-bottom: .2rem; color: #224185;">Total Fees</h5>
                                                <p>2 Lakh</p>
                                            </th>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="blog-post-txt mt-2 mb-2" style="padding-bottom: 3px;">
                                    <!-- Post Title -->
                                    <h4 class="h5-sm"
                                        style="margin: 10px; color: #fff; background: #224185; border-radius: 8px;">
                                        <p style="font-size:20px;color: #fff;">Post Basic B.Sc Nursing</p>
                                    </h4>
                                </div>
                            </div>
                        </a>
                    </div>


                    <div class="col-lg-4 mb-30">
                        <a href="#">
                            <div class="blog-post course-box" style="height:auto; position: relative;">
                                <div class="blog-post-img">
                                    <img class="img-fluid"
                                        src="public/library/course/image/1750313782-1749732050-1723025276-1718025371-1712990153-bsc-in-radiology-and-imaging-technology.webp"
                                        alt="BAMS Course Image" width="400" height="173" />
                                </div>
                                <table class="table mt-2 mb-2">
                                    <tbody>
                                        <tr>
                                            <th style="border-right: 1px solid #284587;border-top:none;padding: 0px;">
                                                <h5 style="margin-bottom: .2rem; color: #224185;">Eligibility</h5>
                                                <p>10+2 (PCB)</p>
                                            </th>
                                            <th style="border-right: 1px solid #284587;border-top:none;padding: 0px;">
                                                <h5 style="margin-bottom: .2rem; color: #224185;">Duration</h5>
                                                <p>5.5 Years</p>
                                            </th>
                                            <th style="border-top:none;padding: 0px;">
                                                <h5 style="margin-bottom: .2rem; color: #224185;">Total Fees</h5>
                                                <p>12 Lakh</p>
                                            </th>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="blog-post-txt mt-2 mb-2" style="padding-bottom: 3px;">
                                    <!-- Post Title -->
                                    <h4 class="h5-sm"
                                        style="margin: 10px; color: #fff; background: #224185; border-radius: 8px;">
                                        <p style="font-size:20px;color: #fff;"> BAMS
                                        </p>
                                    </h4>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 mb-30">
                        <a href="#">
                            <div class="blog-post course-box" style="height:auto; position: relative;">
                                <div class="blog-post-img">
                                    <img class="img-fluid"
                                        src="public/library/course/image/1749732474-1723201443-1718705527-1712995331-msc-in-medical-lab-technology.webp"
                                        alt="BHMS Course Image" width="400" height="173" />
                                </div>
                                <table class="table mt-2 mb-2">
                                    <tbody>
                                        <tr>
                                            <th style="border-right: 1px solid #284587;border-top:none;padding: 0px;">
                                                <h5 style="margin-bottom: .2rem; color: #224185;">Eligibility</h5>
                                                <p>10+2 (PCB)</p>
                                            </th>
                                            <th style="border-right: 1px solid #284587;border-top:none;padding: 0px;">
                                                <h5 style="margin-bottom: .2rem; color: #224185;">Duration</h5>
                                                <p>5.5 Years</p>
                                            </th>
                                            <th style="border-top:none;padding: 0px;">
                                                <h5 style="margin-bottom: .2rem; color: #224185;">Total Fees</h5>
                                                <p>9 Lakh</p>
                                            </th>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="blog-post-txt mt-2 mb-2" style="padding-bottom: 3px;">
                                    <!-- Post Title -->
                                    <h4 class="h5-sm"
                                        style="margin: 10px; color: #fff; background: #224185; border-radius: 8px;">
                                        <p style="font-size:20px;color: #fff;"> BHMS </P>

                                    </h4>
                                </div>
                            </div>
                        </a>
                    </div>



                    <div class="col-lg-12 text-center"><a href="course.php"><button
                                class="text-center btn btn-theme">View
                                All Course</button></a></div>
                </div>

            </div>
        </section>


        <!-- courses section End -->



        <!-- Student placement section Start -->
        <section class=" parallax cover-background bgbox1" data-overlay-dark="4">
            <div class="container-fluid h-100 dm-center" style="overflow: hidden;">
                <div class="row h-100">
                    <div class="col-sm-7  pb-3 text-light" style="    background: #2a458be3;padding:40px">
                        </br>
                        <h2 class="lp-section-heading"><span class="text-light">Placement to Find Your Dream</span></h2>
                        </br></br>
                        <div class="row">
                            <div class="col-sm-1"><img src="assets/images/Diagnostic-Centre.webp" width="60" height="60"
                                    alt="Diagnostic center"></div>
                            <div class="col-sm-11">
                                <h3 style="color: #fff;">Diagnostic Centre Attachment</h3>
                                <p>Ganesh Diagnostic and Imaging Centre, an acknowledged super speciality diagnostic
                                    centre with
                                    pathology laboratory, molecular lab and advanced radiology imaging which provides
                                    unparalleled exposure. </p>
                            </div>
                        </div>
                        </br>
                        <div class="row">
                            <div class="col-sm-1"><img src="assets/images/High-placement.webp" width="60" height="60"
                                    alt="High-placement"></div>
                            <div class="col-sm-11">
                                <h3 style="color: #fff;">High placement Rates</h3>
                                <p>We have a high percentage of our graduates securing placements in their respective
                                    fields as
                                    soon after they complete their programs.</p>
                            </div>
                        </div>
                        </br>
                        <div class="row">
                            <div class="col-sm-1"><img src="assets/images/Career.webp" width="60" height="60"
                                    alt="Career"></div>
                            <div class="col-sm-11">
                                <h3 style="color: #fff;">Career guidance and Support</h3>
                                <p>We offer dedicated career counselling and support service to our students. Our
                                    training
                                    programmes and placement call management organises workshops, seminars, company
                                    orientations
                                    and so on.</p>
                            </div>
                        </div>
                        </br></br>
                    </div>
                    <div class="col-sm-5 pb-3"></div>
                </div>
            </div>
        </section>
        <!-- End -->

        <!-- Student culture section start -->
        <section style="background-color:#eeee">
            <div class="container-fluid" style="overflow: hidden;padding: 40px;">
                <div class="row dm-center">
                    <div class="col-sm-7  pb-3">
                        </br></br>
                        <h2 class="lp-section-heading"><span class="">Student Culture</span></h2>
                        <p>Expert Paramedical Institute & Research Center fosters a vibrant and inclusive
                            student
                            friendly , promoting
                            diversity among the students from various backgrounds. </p>
                        </br>
                        <div class="row">
                            <div class="col-sm-1"><img src="assets/images/Institutional-Culture.webp" width="60"
                                    height="60" alt="Institutional-Culture"></div>
                            <div class="col-sm-11">
                                <h3>Institutional Culture</h3>
                                <p>This paramedical College creates an atmosphere that supports leadership and
                                    self-mending in
                                    others by encouraging collaboration and cooperation. </p>
                            </div>
                        </div>
                        </br>
                        <div class="row">
                            <div class="col-sm-1"><img src="assets/images/Friendly-Environment.webp" width="60"
                                    height="60" alt="Friendly-Environment"></div>
                            <div class="col-sm-11">
                                <h3>Friendly Environment</h3>
                                <p>We prioritise creating a warm and welcoming atmosphere. Students find a supportive
                                    community
                                    among peers, faculty and staff.</p>
                            </div>
                        </div>
                        </br>
                        <div class="row">
                            <div class="col-sm-1"><img src="assets/images/Graduate-Program.webp" width="60" height="60"
                                    alt="Graduate-Program"></div>
                            <div class="col-sm-11">
                                <h3>Graduate Certificate Program</h3>
                                <p>We offer a specialised graduation certificate programme designed to equip students
                                    with
                                    advanced skills and knowledge. </p>
                            </div>
                        </div>
                        </br></br>
                    </div>
                    <div class="col-sm-5  pb-3">
                        </br></br>
                        <img class="img-fluid" src="assets/images/student-c.webp" width="609" height="447"
                            alt="blog-post-image" />
                    </div>
                </div>
            </div>
        </section>

        <!-- End -->


        <!-- Why Choose Us Section -->
        <section style="background-color:#fff; padding: 60px 0;">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Text Content -->
                    <div class="col-lg-7 mb-4">
                        <h2 class="lp-section-heading mb-4">
                            Why Choose <span class="text-primary">Expert Paramedical Institute & Research Center</span>
                        </h2>

                        <blockquote class="testimonial mb-4">
                            “I am fully satisfied with their services, especially free home sample collection and free
                            ambulance services.”
                        </blockquote>

                        <ul class="choose-list list-unstyled">
                            <li>
                                <img src="assets/images/arrow.webp" width="32" height="32" alt="arrow">
                                100% Job Placement Guaranteed
                            </li>
                            <li>
                                <img src="assets/images/arrow.webp" width="32" height="32" alt="arrow">
                                No Hidden Charges
                            </li>
                            <li>
                                <img src="assets/images/arrow.webp" width="32" height="32" alt="arrow">
                                Highly Qualified and Experienced Faculty
                            </li>
                            <li>
                                <img src="assets/images/arrow.webp" width="32" height="32" alt="arrow">
                                Real Practical Training with Latest Machines
                            </li>
                            <li>
                                <img src="assets/images/arrow.webp" width="32" height="32" alt="arrow">
                                Panel of 40 Years Experienced Doctors
                            </li>
                            <li>
                                <img src="assets/images/arrow.webp" width="32" height="32" alt="arrow">
                                Prominent Recruiters in Our Network
                            </li>
                        </ul>
                    </div>

                    <!-- Image -->
                    <div class="col-lg-5 text-center">
                        <img class="img-fluid rounded" src="assets/images/WhyChoose2.webp" alt="Why Choose Us"
                            style="max-width: 100%; height: auto;" />
                    </div>
                </div>
            </div>
        </section>

        <!-- Style -->
        <style>
        .lp-section-heading {
            font-size: 32px;
            font-weight: 700;
            color: #222;
        }

        .testimonial {
            font-size: 16px;
            font-style: italic;
            color: #555;
            border-left: 4px solid #007bff;
            padding-left: 15px;
        }

        .choose-list li {
            font-size: 16px;
            font-weight: 500;
            color: #333;
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .choose-list li img {
            margin-right: 10px;
            flex-shrink: 0;
        }

        @media (max-width: 767.98px) {
            .lp-section-heading {
                font-size: 24px;
                text-align: center;
            }

            .testimonial {
                font-size: 15px;
                text-align: center;
            }

            .choose-list {
                padding-left: 0;
            }

            .choose-list li {
                font-size: 15px;
                justify-content: center;
                text-align: center;
            }

            .choose-list li img {
                margin-right: 8px;
            }
        }
        </style>

        <!-- End -->

        <!-- faq section start -->
        <section style="background-color:#eeee">
            <div class="container py-5">
                <div class="row text-left">
                    <div class="col-sm-12 text-left">
                        <h2 class="lp-section-heading mb-4">
                            Frequently <span class="text-primary">Asked Questions</span>
                        </h2>
                    </div>

                    <div class="col-sm-6 pb-3">
                        <div id="accordion" role="tablist">
                            <!-- CATEGORY TITLE  -->

                            <div class="card">
                                <!-- Card Title -->
                                <div class="card-header" role="tab" id="headingOne">
                                    <h5 class="h5-xs">
                                        <a data-toggle="collapse" href="#collapseOne" role="button"
                                            aria-expanded="false" aria-controls="collapseOne" class="collapsed">
                                            What are the Paramedical Courses?
                                        </a>
                                    </h5>
                                </div>
                                <!-- Card Content -->
                                <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        <!-- Text -->
                                        <p>Paramedical Courses are specialized professional medical programs that train
                                            the
                                            candidates to become experts in the paramedical sector these experts work
                                            with doctors
                                            and contribute their role and responsibility towards patient care. So, they
                                            are called
                                            Para medical specialists like X-ray Technician, ECG Technician, Medical Lab
                                            Technician,
                                            etc.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <!-- Card Title -->
                                <div class="card-header" role="tab" id="headingFour">
                                    <h5 class="h5-xs">
                                        <a class="collapsed" data-toggle="collapse" href="#collapseFour" role="button"
                                            aria-expanded="false" aria-controls="collapseFour">
                                            For applying to paramedical courses, 12th class is mandatory?
                                        </a>
                                    </h5>
                                </div>
                                <!-- Card Content -->
                                <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        <!-- Text -->
                                        <p>12th class is not mandatory for paramedical courses but if you are applying
                                            for a
                                            bachelor's and Diploma program then you are not eligible, after completing
                                            your 10th
                                            class, you can apply for Certificate programs like CMLT, CRIT, etc.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <!-- Card Title -->
                                <div class="card-header" role="tab" id="headingTwo">
                                    <h5 class="h5-xs">
                                        <a class="collapsed" data-toggle="collapse" href="#collapseTwo" role="button"
                                            aria-expanded="false" aria-controls="collapseTwo">
                                            Which courses are available after the 12th grade at Expert Paramedical
                                            Institute &
                                            Research Center related
                                            to paramedical courses with duration?
                                        </a>
                                    </h5>
                                </div>
                                <!-- Card Content -->
                                <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Common paramedical courses after the 12th class include:</p>
                                        <ul class="content-list">
                                            <li>BSc MLT (Bachelor of Science in Medical Laboratory Technology) -3 year
                                            </li>
                                            <li>DMLT (Diploma in Medical Laboratory Technology) 2 year</li>
                                            <li>BRIT (Bachelor of Science in Radiology &amp; Imaging Technology) 3 year
                                            </li>
                                            <li>DRIT (Diploma in Radiology &amp; Imaging Technology) 2 year</li>
                                            <li>BSc CCT (Bachelor in Science of Cardiovascular/ Cardiac Technology) 3
                                                year</li>
                                            <li>DCCT (Diploma of Cardiovascular/Cardiac Technology) 2 year</li>
                                            <li>BSc NPT (Bachelor in Science of Neurophysiology Technology) 3 year</li>
                                            <li>DCNPT (Diploma of Clinical Neurophysiology Technology ) 2 year</li>
                                            <li>DMIT (Diploma In Medical Imaging Technology) 2 years, etc.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <!-- Card Title -->
                                <div class="card-header" role="tab" id="headingThree">
                                    <h5 class="h5-xs">
                                        <a class="collapsed" data-toggle="collapse" href="#collapseThree" role="button"
                                            aria-expanded="false" aria-controls="collapseThree">
                                            What is the Eligibility Criteria and other relevant documents for
                                            paramedical courses
                                            after the 12th?
                                        </a>
                                    </h5>
                                </div>
                                <!-- Card Content -->
                                <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        <!-- Text -->
                                        <p><strong>Eligibility Criteria: </strong>The Candidates who have completed
                                            their 12th
                                            class with 50% from the affiliated board are eligible for paramedical
                                            courses.<strong>&nbsp;</strong></p>
                                        <p><strong>Other relevant Documents: <br> </strong>Colored Photograph, Sign, and
                                            thumb
                                            (Left &amp; Right) are on White paper,</p>
                                        <p><strong>Identify proof for D.O.B:</strong> Aadhar card, voter ID card,
                                            passport card,
                                            driver's license.</p>
                                        <p><strong>Address proof:</strong> Aadhar card, voter ID card, passport card,
                                            Ration Card,
                                            Electricity Bill, water bill, etc.</p>
                                        <p><strong>Educational document:</strong> X, XII Class document (soft copy).</p>
                                    </div>
                                </div>
                            </div>



                            <div class="card ">
                                <!-- Card Title -->
                                <div class="card-header" role="tab" id="headingFive">
                                    <h5 class="h5-xs">
                                        <a class="" data-toggle="collapse" href="#collapseFive" role="button"
                                            aria-expanded="true" aria-controls="collapseFive">
                                            What are the Career Options after Completing a BSc. and Diploma in Medical
                                            Laboratory
                                            Technology?
                                        </a>
                                    </h5>
                                </div>
                                <!-- Card Content -->
                                <div id="collapseFive" class="collapse " role="tabpanel" aria-labelledby="headingFive"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        <!-- Text -->
                                        <ul class="content-list">
                                            <li>Medical Laboratory Technologist</li>
                                            <li>Pathology Technician</li>
                                            <li>Laboratory Supervisor</li>
                                            <li>QC Manager (NABL)</li>
                                            <li>Laboratory Manager</li>
                                            <li>Phlebotomist</li>
                                            <li>Application Specialist</li>
                                            <li>Sales &amp; Marketing</li>
                                            <li>Educator</li>
                                            <li>Medical Representative</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card ">
                                <!-- Card Title -->
                                <div class="card-header" role="tab" id="headingSix">
                                    <h5 class="h5-xs">
                                        <a class="collapsed" data-toggle="collapse" href="#collapseSix" role="button"
                                            aria-expanded="false" aria-controls="collapseSix">
                                            What are the Career Options after Completing a BSc and Diploma in Radiology
                                            &amp;
                                            Imaging Technology?
                                        </a>
                                    </h5>
                                </div>
                                <!-- Card Content -->
                                <div id="collapseSix" class="collapse" role="tabpanel" aria-labelledby="headingSix"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        <!-- Text -->
                                        <ul class="content-list">
                                            <li>Radiology Technologist</li>
                                            <li>Radiographer</li>
                                            <li>X-Ray Technician</li>
                                            <li>CT Scan Technician</li>
                                            <li>MRI Technician</li>
                                            <li>Mammographer</li>
                                            <li>OPG Technician</li>
                                            <li>PET CT Technician</li>
                                            <li>Nuclear Medicine Assistant</li>
                                            <li>Application Specialist</li>
                                            <li>Sales &amp; Marketing</li>
                                            <li>Educator</li>
                                            <li>QC Manager (NABH)</li>
                                            <li>Medical Representative</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card ">
                                <!-- Card Title -->
                                <div class="card-header" role="tab" id="heading7">
                                    <h5 class="h5-xs">
                                        <a class="collapsed" data-toggle="collapse" href="#collapse7" role="button"
                                            aria-expanded="false" aria-controls="collapse7">
                                            What are the Career Options after Completing a BSc and Diploma in
                                            Cardiovascular/Cardiac Technology?
                                        </a>
                                    </h5>
                                </div>
                                <!-- Card Content -->
                                <div id="collapse7" class="collapse" role="tabpanel" aria-labelledby="heading7"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        <!-- Text -->
                                        <ul class="content-list">
                                            <li>Cath Lab Technician</li>
                                            <li>Cardiovascular Technician</li>
                                            <li>Echo cardiographer</li>
                                            <li>ECG Technician</li>
                                            <li>QC Manager (NABH)</li>
                                            <li>Cardiac Care Technician</li>
                                            <li>Marketing</li>
                                            <li>Educator</li>
                                            <li>Medical Representative</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 pb-3">
                        <div id="accordion1" role="tablist">


                            <div class="card ">
                                <!-- Card Title -->
                                <div class="card-header" role="tab" id="heading10">
                                    <h5 class="h5-xs">
                                        <a class="collapsed" data-toggle="collapse" href="#collapse10" role="button"
                                            aria-expanded="false" aria-controls="collapse10">
                                            What is the average salary and employment sector in India and abroad?
                                        </a>
                                    </h5>
                                </div>
                                <!-- Card Content -->
                                <div id="collapse10" class="collapse" role="tabpanel" aria-labelledby="heading10"
                                    data-parent="#accordion1">
                                    <div class="card-body">
                                        <!-- Text -->
                                        <p>Average Salary in India: <strong>3 to 6 Lakh per Annum</strong>
                                        </p>
                                        <p><strong>Employment Sector: </strong>Clinics, Govt. or Private Hospital, Blood
                                            banks,
                                            Dispenser, Educational Institutions, Research &amp; Development, Diagnostic
                                            centers,
                                            Pharmaceutical Companies, etc.&nbsp;</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card ">
                                <!-- Card Title -->
                                <div class="card-header" role="tab" id="heading11">
                                    <h5 class="h5-xs">
                                        <a class="collapsed" data-toggle="collapse" href="#collapse11" role="button"
                                            aria-expanded="false" aria-controls="collapse11">
                                            Where classes of paramedical courses would be conducted?
                                        </a>
                                    </h5>
                                </div>
                                <!-- Card Content -->
                                <div id="collapse11" class="collapse" role="tabpanel" aria-labelledby="heading11"
                                    data-parent="#accordion1">
                                    <div class="card-body">
                                        <!-- Text -->
                                        <p>
                                            Classes of Paramedical courses will be conducted in Expert Paramedical
                                            Institute &
                                            Research Center with
                                            fully furnished classrooms and high-tech-based equipment for Theory and
                                            Practical.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="card ">
                                <!-- Card Title -->
                                <div class="card-header" role="tab" id="heading8">
                                    <h5 class="h5-xs">
                                        <a class="collapsed" data-toggle="collapse" href="#collapse8" role="button"
                                            aria-expanded="false" aria-controls="collapse8">
                                            What are the Career Options after Completing a BSc and Diploma in
                                            Neurophysiology
                                            Technology?
                                        </a>
                                    </h5>
                                </div>
                                <!-- Card Content -->
                                <div id="collapse8" class="collapse" role="tabpanel" aria-labelledby="heading8"
                                    data-parent="#accordion1">
                                    <div class="card-body">
                                        <!-- Text -->
                                        <ul class="content-list">
                                            <li>Medical Representative</li>
                                            <li>Neurophysiology Technician</li>
                                            <li>Neuro Radiology Technician</li>
                                            <li>Clinical Neuro Psychology Technician</li>
                                            <li>EEG, EMG, NCV, BERA Technician</li>
                                            <li>Educator</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="card ">
                                <!-- Card Title -->
                                <div class="card-header" role="tab" id="heading9">
                                    <h5 class="h5-xs">
                                        <a class="collapsed" data-toggle="collapse" href="#collapse9" role="button"
                                            aria-expanded="false" aria-controls="collapse9">
                                            Is the candidate required to take any of the entrance exams for admission
                                            intoExpert Paramedical Institute & Research Center for any paramedical
                                            courses?
                                        </a>
                                    </h5>
                                </div>
                                <!-- Card Content -->
                                <div id="collapse9" class="collapse" role="tabpanel" aria-labelledby="heading9"
                                    data-parent="#accordion1">
                                    <div class="card-body">
                                        <!-- Text -->
                                        <p>
                                            No, the candidate is not required to take any entrance exam for admission
                                            into Expert Paramedical Institute & Research Center for any paramedical
                                            courses.
                                        </p>
                                    </div>
                                </div>
                            </div>



                            <div class="card">
                                <!-- Card Title -->
                                <div class="card-header" role="tab" id="heading12">
                                    <h5 class="h5-xs">
                                        <a class="collapsed" data-toggle="collapse" href="#collapse12" role="button"
                                            aria-expanded="false" aria-controls="collapse12">
                                            Is the paramedical institute recognized, accredited, and affiliated with any
                                            national educational boards or government authorities for quality and
                                            legitimacy?
                                        </a>
                                    </h5>
                                </div>
                                <!-- Card Content -->
                                <div id="collapse12" class="collapse" role="tabpanel" aria-labelledby="heading12"
                                    data-parent="#accordion1">
                                    <div class="card-body">
                                        <!-- Text -->
                                        <p>Yes, the institute is recognized by government-approved boards and
                                            accreditation bodies. It is affiliated with authorized national educational
                                            authorities such as the National Accreditation Board for Testing and
                                            Calibration Laboratories (<strong>NABL</strong>), the National Accreditation
                                            Board for Hospitals & Healthcare Providers (<strong>NABH</strong>), and
                                            offers programs under various UGC-approved universities and educational
                                            institutions including the National Institute of Open Schooling
                                            (<strong>NIOS</strong>).</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card ">
                                <!-- Card Title -->
                                <div class="card-header" role="tab" id="heading13">
                                    <h5 class="h5-xs">
                                        <a class="collapsed" data-toggle="collapse" href="#collapse13" role="button"
                                            aria-expanded="false" aria-controls="collapse13">
                                            Does Expert Paramedical Institute & Research Center give you another benefit
                                            for
                                            students?
                                        </a>
                                    </h5>
                                </div>
                                <!-- Card Content -->
                                <div id="collapse13" class="collapse" role="tabpanel" aria-labelledby="heading13"
                                    data-parent="#accordion1">
                                    <div class="card-body">
                                        <!-- Text -->
                                        <p>Yes, Expert Paramedical Institute & Research Center will provide more
                                            benefits to
                                            students and outside
                                            learners.</p>
                                        <ul class="content-list">
                                            <li>Best no 1 paramedical college</li>
                                            <li>We have all modalities for every department.</li>
                                            <li>A paid internship will provided for outside learners.</li>
                                            <li>The thesis project is also done by the bachelor's and master's programs.
                                            </li>
                                            <li>Workshop and guest lecturers were also conducted.</li>
                                            <li>Study material and e-library given by college</li>
                                            <li>100% Placement is available.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="card ">
                  <div class="card-header" role="tab" id="heading14">
                     <h5 class="h5-xs">
                        <a class="collapsed" data-toggle="collapse" href="#collapse14" role="button" aria-expanded="false" aria-controls="collapse14">
                        How to reach Expert Paramedical Institute & Research Center after 12th grade for paramedical courses?
                        </a>
                     </h5>
                  </div>
                  <div id="collapse14" class="collapse" role="tabpanel" aria-labelledby="heading14" data-parent="#accordion1">
                     <div class="card-body">											
                        <p><strong>Expert Paramedical Institute & Research Center Address: </strong>CS/OCF-7, Sector-8, Rohini, Near Rohini East Metro Station, Opposite To Petrol Pump, New Bhadohi -110085</p>
                        <p><strong>Contact No: </strong>+91-7007451364</p>
                        <p><strong>You can reach us through Social Platforms: </strong>YouTube, LinkedIn, Koo, Instagram, WhatsApp, and Facebook</p>
                     </div>
                  </div>
               </div> -->
                            <div class="card ">
                                <div class="card-header" role="tab" id="heading15">
                                    <h5 class="h5-xs">
                                        <a class="collapsed" data-toggle="collapse" href="#collapse15" role="button"
                                            aria-expanded="false" aria-controls="collapse15">
                                            At what time admission will open in Expert Paramedical Institute & Research
                                            Center for
                                            paramedical courses?
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapse15" class="collapse" role="tabpanel" aria-labelledby="heading15"
                                    data-parent="#accordion1">
                                    <div class="card-body">
                                        <!-- Text -->
                                        <p>There is no time duration for admission in any courses. You can apply anytime
                                            on our
                                            website or come directly to our college.&nbsp;</p>
                                        <p><strong><u>The </u></strong><u><a
                                                    href="admission-apply.php"><strong>Admission
                                                        Form</strong></a></u> <strong>is now open. You can reach us at
                                                all of the
                                                below platforms, and fill in your fee directly on our website.</strong>
                                        </p>
                                        <p><strong>For Admission: </strong><a href="contact-us.php"><strong>Call us at
                                                    +91-7007451364,+91-9811067479 +91-9810183948</strong></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-12 text-center"><a href="faq.php"><button class="text-center btn btn-theme">View
                                All
                                FAQ</button></a></div>
                </div>
            </div>
        </section>
        <!-- End -->

        <style>
        /* FAQ Card Styling */
        .card {
            margin-bottom: 20px;
            border-radius: 10px;
            border: 1px solid #dee2e6;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            background-color: #fafafa;
        }

        .card:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
        }

        /* Card Header */
        .card-header {
            padding: 15px 20px;
            background-color: #fff;
            border-bottom: 1px solid #e2e2e2;
        }

        .card-header h5 {
            margin: 0;
        }

        .card-header a {
            display: block;
            color: #002856;
            font-weight: 600;
            font-size: 16px;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .card-header a:hover,
        .card-header a:focus {
            color: #007bff;
        }

        /* Card Body */
        .card-body {
            background-color: #fff;
            padding: 20px;
            font-size: 15px;
            color: #333;
            line-height: 1.6;
        }

        /* Optional: Content List Inside Answers */
        .card-body ul.content-list {
            padding-left: 20px;
            margin: 0;
        }

        .card-body ul.content-list li {
            margin-bottom: 8px;
        }

        /* View All Button */
        .btn-theme {
            margin-top: 10px;
            background-color: #002856;
            color: #fff;
            padding: 14px 28px;
            border-radius: 5px;
            font-weight: 500;
            border: none;
            transition: background-color 0.3s ease;
        }

        .btn-theme:hover {
            background-color: #0056b3;
        }
        </style>

        <!-- Gallery section start -->
        <div class="container wide-40">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 section-title">
                    <div class="col-sm-12 text-center">
                        <h2 class="lp-section-heading text-center">Image <span class="text-primary">Gallery</span></h2>
                    </div>
                </div>
                <div class="col-md-12 gallery-items-list">
                    <div class="masonry-wrap grid-loaded" style="position: relative; height: 1837.39px;">
                        <!-- IMAGE #1 -->
                        <div class="gallery-item dental-care" style="position: absolute; left: 0%; top: 0px;">
                            <div class="hover-overlay">
                                <img src="assets/images/g2-min.webp" alt="gallary image" width="100%" height="100%"
                                    style="width:100%">
                                <div class="item-overlay"></div>
                                <div class="image-zoom">
                                    <a class="image-link" href="assets/images/g2-min.webp" title=""
                                        aria-label="image-link"><i class="fas fa-search-plus" alt="gallary image"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="gallery-item dental-care" style="position: absolute; left: 0%; top: 0px;">
                            <div class="hover-overlay">
                                <img src="assets/images/g1-min.webp" alt="gallary image" width="100%" height="100%"
                                    style="width:100%">
                                <div class="item-overlay"></div>
                                <div class="image-zoom">
                                    <a class="image-link" href="assets/images/g1-min.webp" title="" alt="gallary image"
                                        aria-label="image-link"><i class="fas fa-search-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="gallery-item dental-care" style="position: absolute; left: 0%; top: 0px;">
                            <div class="hover-overlay">
                                <img src="assets/images/g3-min.webp" alt="gallary image" width="100%" height="100%"
                                    style="width:100%">
                                <div class="item-overlay"></div>
                                <div class="image-zoom">
                                    <a class="image-link" href="assets/images/g3-min.webp" title="" alt="gallary image"
                                        aria-label="image-link"><i class="fas fa-search-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="gallery-item dental-care" style="position: absolute; left: 0%; top: 0px;">
                            <div class="hover-overlay">
                                <img src="assets/images/g4-min.webp" alt="gallary image" width="100%" height="100%"
                                    style="width:100%">
                                <div class="item-overlay"></div>
                                <div class="image-zoom">
                                    <a class="image-link" href="assets/images/g4-min.webp" title="" alt="gallary image"
                                        aria-label="image-link"><i class="fas fa-search-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="gallery-item dental-care" style="position: absolute; left: 0%; top: 0px;">
                            <div class="hover-overlay">
                                <img src="assets/images/g5-min.webp" alt="gallary image" width="100%" height="100%"
                                    style="width:100%">
                                <div class="item-overlay"></div>
                                <div class="image-zoom">
                                    <a class="image-link" href="assets/images/g5-min.webp" title="" alt="gallary image"
                                        aria-label="image-link"><i class="fas fa-search-plus"></i></a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-12 text-center"><a href="gallery.php"><button
                                class="text-center btn btn-theme">View
                                All Gallery</button></a></div>
                </div>
            </div>
        </div>
        <!-- End -->
        <!-- college affiliation or partner -->

        <!-- <section class="parallax cover-background bgbox2" data-overlay-dark="4">
            <div class="container-fluid h-100" style="overflow: hidden;">
                <div class="row text-center h-100">
                    <div class="col-sm-12  pb-3 text-light" style="    background: #ffffff7a;padding:40px">
                        <div class="row" style="justify-content: center;">
                            <div class="col-sm-12 mb-3">
                                <h2 class="lp-section-heading text-center"><span class="text-primary">Affiliation &
                                        Certification</span></h2>
                            </div>
                            <table class="table table-borderless" style="    width: 50%;">
                                <tbody>
                                    <tr>
                                        <td><img src="assets/images/logo1.webp" width="150" height="150"
                                                class="imgs-100" alt="logo"></td>
                                        <td><img src="assets/images/logo2.webp" width="150" height="150"
                                                class="imgs-100" alt="logo"></td>
                                        <td><img src="assets/images/logo3.webp" width="150" height="150"
                                                class="imgs-100" alt="logo"></td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                        </br>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- End -->

        <!-- Testimonial Section Start -->
        <section class="wide-40" style="background-color:#eeee">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1 section-title text-center">
                        <h2 class="lp-section-heading">Our <span class="text-primary">Success Stories</span></h2>
                        <p>Discover how our students turned ambition into achievement with the support, learning, and
                            guidance they received at our institution.</p>
                    </div>
                </div>

                <!-- Testimonials Carousel -->
                <section class="testimonials mt-4">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div id="customers-testimonials" class="owl-carousel owl-theme">

                                    <!-- Testimonial 1 -->
                                    <div class="item">
                                        <div class="shadow-effect">

                                            <p>“The hands-on training and expert guidance I received at Expert
                                                Paramedical Institute helped me secure a job right after graduation.”
                                            </p>
                                        </div>
                                        <div class="testimonial-name">PRIYA SHARMA</div>
                                    </div>

                                    <!-- Testimonial 2 -->
                                    <div class="item">
                                        <div class="shadow-effect">

                                            <p>“From the faculty to the practical labs, everything here is top-notch. I
                                                feel confident and prepared for my career in healthcare.”</p>
                                        </div>
                                        <div class="testimonial-name">RAHUL VERMA</div>
                                    </div>

                                    <!-- Testimonial 3 -->
                                    <div class="item">
                                        <div class="shadow-effect">

                                            <p>“The best part about the institute is the supportive environment. Real
                                                clinical exposure made a huge difference in my learning.”</p>
                                        </div>
                                        <div class="testimonial-name">NEHA SINGH</div>
                                    </div>

                                    <!-- Testimonial 4 -->
                                    <div class="item">
                                        <div class="shadow-effect">

                                            <p>“I’m proud to be an alumni of Expert Paramedical Institute. The training
                                                I received truly shaped my career.”</p>
                                        </div>
                                        <div class="testimonial-name">ANIL KUMAR</div>
                                    </div>

                                    <!-- Testimonial 5 -->
                                    <div class="item">
                                        <div class="shadow-effect">

                                            <p>“Joining Expert Paramedical was the best decision I made. The learning
                                                environment and values they instill are unmatched.”</p>
                                        </div>
                                        <div class="testimonial-name">SIMRAN GUPTA</div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End Testimonials Carousel -->

            </div>
        </section>
        <style>
        .shadow-effect {
            background: #fff;
            padding: 25px;
            border-radius: 6px;
            text-align: center;
            border: 1px solid #e4e4e4;
            /* aspect-ratio: 2 / 1; */
            box-shadow: 0 19px 38px rgba(0, 0, 0, 0.06), 0 15px 12px rgba(0, 0, 0, 0.03);
        }

        .shadow-effect p {
            font-size: 16px;
            line-height: 1.6;
            margin: 0 0 15px 0;
            color: #333;
            font-weight: 400;
        }

        .testimonial-name {
            margin-top: -8px;
            display: inline-block;
            background: #224185;
            padding: 8px 22px;
            border-radius: 15px;
            color: #fff;
            font-weight: 600;
            font-size: 12px;
            box-shadow: 0 5px 15px rgba(0, 123, 255, 0.3);
        }

        .testimonials .img-circle {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 15px;
        }
        </style>
        <!-- jQuery (required for Owl Carousel) -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <!-- Owl Carousel JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

        <!-- Owl Carousel CSS -->
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
        <script>
        $(document).ready(function() {
            $("#customers-testimonials").owlCarousel({
                loop: true,
                center: true,
                items: 3,
                margin: 30,
                autoplay: true,
                dots: true,
                autoplayTimeout: 5000,
                smartSpeed: 600,
                responsive: {
                    0: {
                        items: 1
                    },
                    768: {
                        items: 2
                    },
                    1170: {
                        items: 3
                    }
                }
            });
        });
        </script>

        <!-- Testimonial Section End -->


    </div>
    <!-- END PAGE CONTENT -->
    <style>
    .floating-icons {
        position: fixed;
        right: 0px;
        top: 30%;
        z-index: 100;
    }
    </style>
    <?php
   include_once('include/footer.php');
   ?>

</body>

</html>