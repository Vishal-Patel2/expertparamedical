<?php
include_once('include/head.php');
?>

<body>

    <div id="page" class="page">
        <!-- HEADER -->
        <?php
include_once('include/header.php');
?>

        <style>
        @media (max-width: 767px) {
            #blog-page .blog-post {
                width: 100% !important;
            }
        }

        #blog-page .blog-post {
            width: 32%;
            display: inline-grid;
            padding-right: 20px;
        }

        .blog-post-img {
            height: 190px;
            overflow: hidden;
            margin: 0 auto;
        }

        .blog-page-pagination {
            margin-top: 0px
        }

        .blog-post-img img {
            transition: 0.5s all ease-in-out;
        }

        .blog-post-img:hover img {
            transform: scale(1.5);
        }

        .card-style2 {
            height: auto;
            margin-bottom: 21px;
            box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 10px 0px, rgba(0, 0, 0, 0.19) 0px 4px 20px 0px;
            padding: 13px;
        }

        .card-style2 .card-body {
            padding: 14px !important;
        }

        .blog-post-txt h4 {
            font-size: 16px;
            font-weight: 100;
            padding-top: 10px;
        }

        .blog-post-txt h3 {
            font-size: 16px;
            font-weight: 100;
            padding-top: 10px;
        }

        .blog-post-txt p {
            font-size: 14px;
            font-weight: 100
        }
        </style>
        <div id="breadcrumb" class="division">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class=" breadcrumb-holder">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"> Our Blogs & Latest News</li>
                                </ol>
                            </nav>
                            <h4 class="h4-sm steelblue-color"> Our Blogs & Latest News</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

      <div id="blog-page" class="wide-40 blog-page-section division" style="    background-color: #fff;">
         <div class="container">
            <div class="row">
               <h1 class=" steelblue-color pb-3">Top Articles</h1>
               <div class="row" style="opacity: .93;margin: auto; width: 100%;">
                  <div class="col-lg-6 mb-1-9">
                     <div class="card border-0 card-style2">
                        <a href="all-about-paramedical-courses.php">
                           <div class="card-img">
                              <img
                                 src="public/assets/images/blogs/desktop/1724148221-all-about-paramedical-courses.webp"
                                 alt="blog img" style="width: 100%;">
                           </div>
                           <div class="card-body">
                              <h4 class="steelblue-color">
                                 <a href="all-about-paramedical-courses.php" aria-label="blog detail">Top 5
                                    Reasons to Choose a Paramedical Career</a>
                              </h4>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="col-lg-6 mb-1-9">
                     <div class="card border-0 card-style2">
                        <a href="paramedical-course-types-uses-and-eligibility.php">
                           <div class="clearfix d-flex align-items-center">
                              <img
                                 src="public/assets/images/blogs/desktop/1739001216-Paramedical%20Course%20Types%20Uses%20and%20Eligibility%20Criteria%20for%20Enrollment.webp"
                                 alt="blog-post-preview" width="160px" height="92px">
                              <div class="post-summary">
                                 <h5 class="steelblue-color">
                                    <a href="paramedical-course-types-uses-and-eligibility.php"
                                       aria-label="paramedical-course-types-uses-and-eligibility">Paramedical
                                       Course Types Uses and Eligibility Criteria for Enrollment</a>
                                 </h5>
                              </div>
                           </div>
                        </a>
                     </div>
                     <div class="card border-0 card-style2">
                        <a href="scope-medical-lab-science-india-career-goals.php">
                           <div class="clearfix d-flex align-items-center">
                              <img
                                 src="public/assets/images/blogs/desktop/1704957068-What%20is%20Medical%20Lab%20Science.jpg"
                                 alt="blog-post-preview" width="160px" height="92px">
                              <div class="post-summary">
                                 <h5 class="steelblue-color">
                                    <a href="scope-medical-lab-science-india-career-goals.php"
                                       aria-label="scope-medical-lab-science-india-career-goals">Scope of Medical
                                       Lab Science in India Use of Pursuing this Degree for securing Career Goals</a>
                                 </h5>
                              </div>
                           </div>
                        </a>
                     </div>
                     <div class="card border-0 card-style2">
                        <a href="medical-testing-course-overview.php">
                           <div class="clearfix d-flex align-items-center">
                              <img src="public/assets/images/blogs/desktop/1704971089-Who%20are%20Lab%20Technicians.jpg"
                                 alt="blog-post-preview" width="160px" height="92px">
                              <div class="post-summary">
                                 <h5 class="steelblue-color">
                                    <a href="medical-testing-course-overview.php"
                                       aria-label="medical-testing-course-overview">Medical Testing Course All You
                                       Need To Know Before Joining</a>
                                 </h5>
                              </div>
                           </div>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>


        <?php
   include_once('include/footer.php');
   ?>
</body>

</html>