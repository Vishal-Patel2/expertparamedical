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
                                    <li class="breadcrumb-item active" aria-current="page">Frequently Asked Questions
                                    </li>
                                </ol>
                            </nav>
                            <h4 class="h4-sm steelblue-color">Frequently Asked Questions</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <style>
        .accordion-custom .card {
            border: 1px solid #e0e0e0;
            border-radius: 10px;
            margin-bottom: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.03);
        }

        .accordion-custom .card-header {
            background-color: #f8f9fa;
            padding: 15px 20px;
            border-bottom: 1px solid #ddd;
            border-radius: 10px 10px 0 0;
        }

        .accordion-custom .card-header a {
            text-decoration: none;
            color: #224185;
            font-weight: 600;
            display: block;
        }

        .accordion-custom .card-header a:hover {
            color: #1a2c65;
        }

        .accordion-custom .card-body {
            padding: 10px 12px;
            font-size: 15px;
            color: #333;
        }

        .content-list li {
            margin-bottom: 6px;
            list-style-type: disc;
        }
        </style>

        <section id="faqs-page" class="wide-40 faqs-section division">
            <div class="container">
                <div class="row">
                    <!-- QUESTIONS HOLDER -->
                    <div class="col-lg-12">
                        <div class="questions-holder pr-30">
                            <!-- Title -->
                            <div class="text-center ">
                                <h1 class="h3-md steelblue-color ">Frequently Asked Questions</h1>
                                <!-- Text -->
                                <h4 class="mb-4">Paramedical Courses at Expert Paramedical Institute & Research Center
                                    after 10+2
                                </h4>
                                <img src="assets/images/faq.jpg" class="mb-4" alt="faq">

                            </div>

                            <!-- QUESTIONS ACCORDION -->
                            <div class="container">
                                <div class="row gy-4 gx-5">
                                    <!-- Left Column -->
                                    <div class="col-md-6">
                                        <div id="accordionLeft" class="accordion-custom">
                                            <!-- Add more cards here like above -->
                                            <!-- Example: -->
                                            <div class="card">
                                                <!-- Card Title -->
                                                <div class="card-header" role="tab" id="headingOne">
                                                    <h5 class="h5-xs">
                                                        <a data-toggle="collapse" href="#collapseOne" role="button"
                                                            aria-expanded="true" aria-controls="collapseOne">
                                                            What are the Paramedical Courses?
                                                        </a>
                                                    </h5>
                                                </div>
                                                <!-- Card Content -->
                                                <div id="collapseOne" class="collapse show" role="tabpanel"
                                                    aria-labelledby="headingOne" data-parent="#accordionLeft">
                                                    <div class="card-body">
                                                        <!-- Text -->
                                                        <p>Paramedical Courses are specialized professional medical
                                                            programs that
                                                            train the
                                                            candidates to become experts in the paramedical sector these
                                                            experts
                                                            work with
                                                            doctors and contribute their role and responsibility towards
                                                            patient
                                                            care. So,
                                                            they are called Para medical specialists like X-ray
                                                            Technician, ECG
                                                            Technician,
                                                            Medical Lab Technician, etc.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card ">
                                                <!-- Card Title -->
                                                <div class="card-header" role="tab" id="heading22">
                                                    <h5 class="h5-xs">
                                                        <a class="collapsed" data-toggle="collapse" href="#collapse22"
                                                            role="button" aria-expanded="false"
                                                            aria-controls="collapse22">
                                                            what are the career options after doing paramedical Courses?

                                                        </a>
                                                    </h5>
                                                </div>
                                                <!-- Card Content -->
                                                <div id="collapse22" class="collapse" role="tabpanel"
                                                    aria-labelledby="heading22" data-parent="#accordionRight">
                                                    <div class="card-body">
                                                        <!-- Text -->
                                                        <ol>
                                                            <li><span> Paramedic/EMT (Emergency Medical
                                                                    Technician)</span></li>
                                                            <li><span> Medical Laboratory Technician</span></li>
                                                            <li><span> Radiologic Technologist&nbsp;</span></li>
                                                            <li><span> Physiotherapist Assistant&nbsp;</span></li>
                                                            <li><span> Occupational Therapy Assistant</span></li>
                                                            <li><span> Dialysis Technician&nbsp;</span></li>
                                                            <li><span> Cardiovascular Technologist&nbsp;</span></li>
                                                            <li><span> Respiratory Therapist&nbsp;</span></li>
                                                            <li><span> Health Information Technician&nbsp;</span></li>
                                                            <li><span> Medical Assistant&nbsp;</span></li>
                                                            <li><span> Clinical Research Coordinator</span></li>
                                                            <li><span> Emergency Management Specialist&nbsp;</span></li>
                                                            <li><span> Healthcare Administration.</span></li>
                                                            <li><span> Health Educator </span></li>
                                                        </ol>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card">
                                                <!-- Card Title -->
                                                <div class="card-header" role="tab" id="headingTwo">
                                                    <h5 class="h5-xs">
                                                        <a class="collapsed" data-toggle="collapse" href="#collapseTwo"
                                                            role="button" aria-expanded="false"
                                                            aria-controls="collapseTwo">
                                                            Which courses are available after the 12th grade at Expert
                                                            Paramedical
                                                            Institute & Research Center
                                                            related to paramedical courses with duration?
                                                        </a>
                                                    </h5>
                                                </div>
                                                <!-- Card Content -->
                                                <div id="collapseTwo" class="collapse" role="tabpanel"
                                                    aria-labelledby="headingTwo" data-parent="#accordionLeft">
                                                    <div class="card-body">
                                                        <p>Common paramedical courses after the 12th class include:</p>
                                                        <ul class="content-list">
                                                            <li>BSc MLT (Bachelor of Science in Medical Laboratory
                                                                Technology) -3
                                                                year</li>
                                                            <li>DMLT (Diploma in Medical Laboratory Technology) 2 year
                                                            </li>
                                                            <li>BRIT (Bachelor of Science in Radiology &amp; Imaging
                                                                Technology) 3
                                                                year</li>
                                                            <li>DRIT (Diploma in Radiology &amp; Imaging Technology) 2
                                                                year</li>
                                                            <li>BSc CCT (Bachelor in Science of Cardiovascular/ Cardiac
                                                                Technology)
                                                                3 year
                                                            </li>
                                                            <li>DCCT (Diploma of Cardiovascular/Cardiac Technology) 2
                                                                year</li>
                                                            <li>BSc NPT (Bachelor in Science of Neurophysiology
                                                                Technology) 3 year
                                                            </li>
                                                            <li>DCNPT (Diploma of Clinical Neurophysiology Technology )
                                                                2 year</li>
                                                            <li>DMIT (Diploma In Medical Imaging Technology) 2 years,
                                                                etc.</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="card">
                                                <!-- Card Title -->
                                                <div class="card-header" role="tab" id="headingThree">
                                                    <h5 class="h5-xs">
                                                        <a class="collapsed" data-toggle="collapse"
                                                            href="#collapseThree" role="button" aria-expanded="false"
                                                            aria-controls="collapseThree">
                                                            What is the Eligibility Criteria and other relevant
                                                            documents for
                                                            paramedical
                                                            courses after the 12th?
                                                        </a>
                                                    </h5>
                                                </div>
                                                <!-- Card Content -->
                                                <div id="collapseThree" class="collapse" role="tabpanel"
                                                    aria-labelledby="headingThree" data-parent="#accordionLeft">
                                                    <div class="card-body">
                                                        <!-- Text -->
                                                        <p><strong>Eligibility Criteria: </strong>The Candidates who
                                                            have completed
                                                            their
                                                            12th class with 50% from the affiliated board are eligible
                                                            for
                                                            paramedical
                                                            courses.<strong>&nbsp;</strong></p>
                                                        <p><strong>Other relevant Documents: <br /> </strong>Colored
                                                            Photograph,
                                                            Sign, and
                                                            thumb (Left &amp; Right) are on White paper,</p>
                                                        <p><strong>Identify proof for D.O.B:</strong> Aadhar card, voter
                                                            ID card,
                                                            passport
                                                            card, driver's license.</p>
                                                        <p><strong>Address proof:</strong> Aadhar card, voter ID card,
                                                            passport
                                                            card, Ration
                                                            Card, Electricity Bill, water bill, etc.</p>
                                                        <p><strong>Educational document:</strong> X, XII Class document
                                                            (soft copy).
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card">
                                                <!-- Card Title -->
                                                <div class="card-header" role="tab" id="headingFour">
                                                    <h5 class="h5-xs">
                                                        <a class="collapsed" data-toggle="collapse" href="#collapseFour"
                                                            role="button" aria-expanded="false"
                                                            aria-controls="collapseFour">
                                                            For applying to paramedical courses, 12th class is
                                                            mandatory?
                                                        </a>
                                                    </h5>
                                                </div>
                                                <!-- Card Content -->
                                                <div id="collapseFour" class="collapse" role="tabpanel"
                                                    aria-labelledby="headingFour" data-parent="#accordionLeft">
                                                    <div class="card-body">
                                                        <!-- Text -->
                                                        <p>12th class is not mandatory for paramedical courses but if
                                                            you are
                                                            applying for a
                                                            bachelor's and Diploma program then you are not eligible,
                                                            after
                                                            completing your
                                                            10th class, you can apply for Certificate programs like
                                                            CMLT, CRIT, etc.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="card ">
                                                <!-- Card Title -->
                                                <div class="card-header" role="tab" id="headingFive">
                                                    <h5 class="h5-xs">
                                                        <a class="collapsed" data-toggle="collapse" href="#collapseFive"
                                                            role="button" aria-expanded="false"
                                                            aria-controls="collapseFive">
                                                            What are the Career Options after Completing a BSc. and
                                                            Diploma in
                                                            Medical
                                                            Laboratory Technology?
                                                        </a>
                                                    </h5>
                                                </div>
                                                <!-- Card Content -->
                                                <div id="collapseFive" class="collapse" role="tabpanel"
                                                    aria-labelledby="headingFive" data-parent="#accordionLeft">
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
                                                <div class="card-header" role="tab" id="heading7">
                                                    <h5 class="h5-xs">
                                                        <a class="collapsed" data-toggle="collapse" href="#collapse7"
                                                            role="button" aria-expanded="false"
                                                            aria-controls="collapse7">
                                                            What are the Career Options after Completing a BSc and
                                                            Diploma in
                                                            Cardiovascular/Cardiac Technology?
                                                        </a>
                                                    </h5>
                                                </div>
                                                <!-- Card Content -->
                                                <div id="collapse7" class="collapse" role="tabpanel"
                                                    aria-labelledby="heading7" data-parent="#accordionLeft">
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


                                            <div class="card ">
                                                <!-- Card Title -->
                                                <div class="card-header" role="tab" id="heading8">
                                                    <h5 class="h5-xs">
                                                        <a class="collapsed" data-toggle="collapse" href="#collapse8"
                                                            role="button" aria-expanded="false"
                                                            aria-controls="collapse8">
                                                            What are the Career Options after Completing a BSc and
                                                            Diploma in
                                                            Neurophysiology Technology?
                                                        </a>
                                                    </h5>
                                                </div>
                                                <!-- Card Content -->
                                                <div id="collapse8" class="collapse" role="tabpanel"
                                                    aria-labelledby="heading8" data-parent="#accordionLeft">
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
                                                        <a class="collapsed" data-toggle="collapse" href="#collapse9"
                                                            role="button" aria-expanded="false"
                                                            aria-controls="collapse9">
                                                            Is the candidate required to take any of the entrance exams
                                                            for
                                                            admission into
                                                            Expert Paramedical Institute & Research Center for any
                                                            paramedical
                                                            courses?
                                                        </a>
                                                    </h5>
                                                </div>
                                                <!-- Card Content -->
                                                <div id="collapse9" class="collapse" role="tabpanel"
                                                    aria-labelledby="heading9" data-parent="#accordionLeft">
                                                    <div class="card-body">
                                                        <!-- Text -->
                                                        <p>
                                                            No, the candidate is not required to take any entrance exam
                                                            for
                                                            admission into
                                                            Expert Paramedical Institute & Research Center for any
                                                            paramedical
                                                            courses.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Right Column -->
                                    <div class="col-md-6">
                                        <div id="accordionRight" class="accordion-custom">
                                            <!-- Add more cards here like above -->
                                            <!-- Example: -->
                                            <div class="card ">
                                                <!-- Card Title -->
                                                <div class="card-header" role="tab" id="heading19">
                                                    <h5 class="h5-xs">
                                                        <a class="collapsed" data-toggle="collapse" href="#collapse19"
                                                            role="button" aria-expanded="false"
                                                            aria-controls="collapse19">
                                                            Where is Expert Paramedical Institute & Research Center
                                                            Located?
                                                        </a>
                                                    </h5>
                                                </div>
                                                <!-- Card Content -->
                                                <div id="collapse19" class="collapse" role="tabpanel"
                                                    aria-labelledby="heading19" data-parent="#accordionRight">
                                                    <div class="card-body">
                                                        <!-- Text -->
                                                        <p>Expert Paramedical Institute & Research Center is Located at
                                                            Indiramill, Jamunipur Colony, Chauri Road, Bhadohi – 221401
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card ">
                                                <!-- Card Title -->
                                                <div class="card-header" role="tab" id="heading20">
                                                    <h5 class="h5-xs">
                                                        <a class="collapsed" data-toggle="collapse" href="#collapse20"
                                                            role="button" aria-expanded="false"
                                                            aria-controls="collapse20">
                                                            How to contact us?

                                                        </a>
                                                    </h5>
                                                </div>
                                                <!-- Card Content -->
                                                <div id="collapse20" class="collapse" role="tabpanel"
                                                    aria-labelledby="heading20" data-parent="#accordionRight">
                                                    <div class="card-body">
                                                        <!-- Text -->
                                                        <p><strong>Phone: 700 7451 364</strong></p>
                                                        <p><strong>Email: </strong><a
                                                                href="mailto:info@expertparamedical.com"><strong>info@expertparamedical.com</strong></a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card ">
                                                <!-- Card Title -->
                                                <div class="card-header" role="tab" id="heading12">
                                                    <h5 class="h5-xs">
                                                        <a class="collapsed" data-toggle="collapse" href="#collapse12"
                                                            role="button" aria-expanded="false"
                                                            aria-controls="collapse12">
                                                            Is Expert Paramedical Institute & Research Center recognized
                                                            and
                                                            accredited?
                                                        </a>
                                                    </h5>
                                                </div>
                                                <!-- Card Content -->
                                                <div id="collapse12" class="collapse" role="tabpanel"
                                                    aria-labelledby="heading12" data-parent="#accordionRight">
                                                    <div class="card-body">
                                                        <!-- Text -->
                                                        <p>
                                                        <p>Yes, we have the government of India recognized board there:
                                                            the National
                                                            Accreditation Board For Testing and Calibration Laboratories
                                                            (<strong>NABL</strong>) and the National Accreditation Board
                                                            for
                                                            Hospitals &amp;
                                                            Healthcare (<strong>NABH</strong>) and Accredited by Many
                                                            UGC approved
                                                            Universities: Bir Tikrendrjit University, National Institute
                                                            of Open
                                                            Schooling
                                                            (<strong>NIOS</strong>), Singhania University, Rajasthan.
                                                        </p>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card ">
                                                <!-- Card Title -->
                                                <div class="card-header" role="tab" id="heading13">
                                                    <h5 class="h5-xs">
                                                        <a class="collapsed" data-toggle="collapse" href="#collapse13"
                                                            role="button" aria-expanded="false"
                                                            aria-controls="collapse13">
                                                            Does Expert Paramedical Institute & Research Center give you
                                                            another
                                                            benefit for students?
                                                        </a>
                                                    </h5>
                                                </div>
                                                <!-- Card Content -->
                                                <div id="collapse13" class="collapse" role="tabpanel"
                                                    aria-labelledby="heading13" data-parent="#accordionRight">
                                                    <div class="card-body">
                                                        <!-- Text -->
                                                        <p>Yes, Expert Paramedical Institute & Research Center will
                                                            provide more
                                                            benefits to students and
                                                            outside learners.</p>
                                                        <ul class="content-list">
                                                            <li>Best no 1 paramedical college</li>
                                                            <li>We have all modalities for every department.</li>
                                                            <li>A paid internship will provided for outside learners.
                                                            </li>
                                                            <li>The thesis project is also done by the bachelor's and
                                                                master's
                                                                programs.
                                                            </li>
                                                            <li>Workshop and guest lecturers were also conducted.</li>
                                                            <li>Study material and e-library given by college</li>
                                                            <li>100% Placement is available.</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card ">
                                                <!-- Card Title -->
                                                <div class="card-header" role="tab" id="heading14">
                                                    <h5 class="h5-xs">
                                                        <a class="collapsed" data-toggle="collapse" href="#collapse14"
                                                            role="button" aria-expanded="false"
                                                            aria-controls="collapse14">
                                                            How to reach Expert Paramedical Institute & Research Center
                                                            after 12th
                                                            grade for paramedical
                                                            courses?
                                                        </a>
                                                    </h5>
                                                </div>
                                                <!-- Card Content -->
                                                <div id="collapse14" class="collapse" role="tabpanel"
                                                    aria-labelledby="heading14" data-parent="#accordionRight">
                                                    <div class="card-body">
                                                        <!-- Text -->
                                                        <p><strong>Expert Paramedical Institute & Research Center
                                                                Address:
                                                            </strong>Indiramill, Jamunipur Colony, Chauri Road, Bhadohi
                                                            – 221401
                                                        </p>
                                                        <p><strong>Contact No: </strong>+91 700 7451 364</p>
                                                        <p><strong>You can reach us through Social Platforms:
                                                            </strong>YouTube,
                                                            LinkedIn,
                                                            Koo, Instagram, WhatsApp, and Facebook</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card ">
                                                <!-- Card Title -->
                                                <div class="card-header" role="tab" id="heading15">
                                                    <h5 class="h5-xs">
                                                        <a class="collapsed" data-toggle="collapse" href="#collapse15"
                                                            role="button" aria-expanded="false"
                                                            aria-controls="collapse15">
                                                            At what time admission will open in Expert Paramedical
                                                            Institute &
                                                            Research Center for paramedical
                                                            courses?
                                                        </a>
                                                    </h5>
                                                </div>
                                                <!-- Card Content -->
                                                <div id="collapse15" class="collapse" role="tabpanel"
                                                    aria-labelledby="heading15" data-parent="#accordionRight">
                                                    <div class="card-body">
                                                        <!-- Text -->
                                                        <p>There is no time duration for admission in any courses. You
                                                            can apply
                                                            anytime on
                                                            our website or come directly to our college.&nbsp;</p>
                                                        <p><strong>The<u></strong><a
                                                                href="admissionquery.php"><strong>Admission
                                                                    Form</strong></a></u> <strong>is now open. You can
                                                                reach us at
                                                                all of
                                                                the below platforms, and fill in your fee directly on
                                                                our
                                                                website.</strong>
                                                        </p>
                                                        <p><strong>For Admission: </strong><a
                                                                href="contact-us.php"><strong>Call us
                                                                    at +91-7007451364,+91-7525015035
                                                                    +91-9682979790</strong></a></p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card ">
                                                <!-- Card Title -->
                                                <div class="card-header" role="tab" id="heading16">
                                                    <h5 class="h5-xs">
                                                        <a class="collapsed" data-toggle="collapse" href="#collapse16"
                                                            role="button" aria-expanded="false"
                                                            aria-controls="collapse16">
                                                            What is the working hour at Expert Paramedical Institute &
                                                            Research
                                                            Center?
                                                        </a>
                                                    </h5>
                                                </div>
                                                <!-- Card Content -->
                                                <div id="collapse16" class="collapse" role="tabpanel"
                                                    aria-labelledby="heading16" data-parent="#accordionRight">
                                                    <div class="card-body">
                                                        <!-- Text -->
                                                        <p>The College is open from 10 A.M to 5 P.M(Monday to Saturday)
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card ">
                                                <!-- Card Title -->
                                                <div class="card-header" role="tab" id="heading17">
                                                    <h5 class="h5-xs">
                                                        <a class="collapsed" data-toggle="collapse" href="#collapse17"
                                                            role="button" aria-expanded="false"
                                                            aria-controls="collapse176">
                                                            What are the different Paramedical Courses available at
                                                            Expert
                                                            Paramedical Institute & Research Center?
                                                        </a>
                                                    </h5>
                                                </div>
                                                <!-- Card Content -->
                                                <div id="collapse17" class="collapse" role="tabpanel"
                                                    aria-labelledby="heading17" data-parent="#accordionRight">
                                                    <div class="card-body">
                                                        <!-- Text -->
                                                        <p><span>We provide many different Courses like</span></p>
                                                        <p><strong>Certificate Courses</strong></p>
                                                        <ul>
                                                            <li><span>CRIT Course</span></li>
                                                            <li><span>CMLT Course</span></li>
                                                        </ul>
                                                        <p><strong>Diploma Courses</strong></p>
                                                        <ul>
                                                            <li><span>Diploma in Radiography and Imaging
                                                                    Technology</span></li>
                                                            <li><span>Diploma in Medical and Lab Technology</span></li>
                                                            <li><span>Diploma in Medical&nbsp; Imaging Technology</span>
                                                            </li>
                                                        </ul>
                                                        <p><strong>Bachelor Degree Courses</strong></p>
                                                        <ul>
                                                            <li><span>BMLT Course</span></li>
                                                            <li><span>BMLT Course Lateral Entry</span></li>
                                                            <li><span>BRIT Course</span></li>
                                                            <li><span>BSc in Biotechnology</span></li>
                                                        </ul>
                                                        <p><strong>Post Graduation&nbsp; Courses</strong></p>
                                                        <ul>
                                                            <li><span>MSc in Radio Imaging Technology</span></li>
                                                            <li><span>MSc in Medical Lab Technology</span></li>
                                                            <li><span>MSc in Biotechnology</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card ">
                                                <!-- Card Title -->
                                                <div class="card-header" role="tab" id="heading18">
                                                    <h5 class="h5-xs">
                                                        <a class="collapsed" data-toggle="collapse" href="#collapse18"
                                                            role="button" aria-expanded="false"
                                                            aria-controls="collapse18">
                                                            What are the different NIOS courses available at Expert
                                                            Paramedical
                                                            Institute & Research Center?
                                                        </a>
                                                    </h5>
                                                </div>
                                                <!-- Card Content -->
                                                <div id="collapse18" class="collapse" role="tabpanel"
                                                    aria-labelledby="heading18" data-parent="#accordionRight">
                                                    <div class="card-body">
                                                        <!-- Text -->
                                                        <ul>
                                                            <li><span>Diploma in Medical Lab technology</span></li>
                                                            <li><span>Diploma in Medical Imaging Technology</span></li>
                                                            <li><span>Certificate in Homeopathy Dispensing</span></li>
                                                            <li><span>Desktop Publishing Course</span></li>
                                                            <li><span>Certificate in Computer Application</span></li>
                                                            <li><span>Yoga Certificate Course</span></li>
                                                            <li><span>Certificate in Community Health</span></li>
                                                            <li><span>Certificate in Ayurveda Therapy</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>








                                            <!-- Add more questions here... -->
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>

                    </div>
                </div>

            </div>

        </section>


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