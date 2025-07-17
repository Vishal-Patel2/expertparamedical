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
                                    <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                                </ol>
                            </nav>
                            <h4 class="h4-sm steelblue-color">Our Gallery</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="gallery-3" class="gallery-section division">
            <div class="container">
                <!-- Section Title -->
                <!-- <div class="row">
                    <div class="col-lg-10 offset-lg-1 section-title text-center">
                        <h1 class="h3-md steelblue-color mb-4">Our Gallery</h1>
                    </div>
                </div> -->

                <!-- Gallery Filtering Buttons -->
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="gallery-filter mb-5 d-inline-flex flex-wrap justify-content-center gap-3">
                            <button data-filter="*" class="gallery-btn btn-filter active">All Gallery</button>
                            <button data-filter=".dental" class="gallery-btn btn-filter">Class Gallery</button>
                            <button data-filter=".pediatric" class="gallery-btn btn-filter">Radiology Gallery</button>
                            <button data-filter=".cardiology" class="gallery-btn btn-filter">Pathology Gallery</button>
                        </div>
                    </div>
                </div>
                <style>
                .btn-filter {
                    background-color: #f5f5f5;
                    color: #333;
                    font-weight: 600;
                    padding: 10px 22px;
                    border: none;
                    border-radius: 12px;
                    transition: all 0.3s ease-in-out;
                }

                .btn-filter:hover {
                    background-color: #224185;
                    color: #fff;
                    box-shadow: 0 4px 12px rgba(34, 65, 133, 0.2);
                }

              
                </style>


                <!-- GALLERY IMAGES HOLDER -->
                <div class="row">
                    <div class="col-md-12 gallery-items-list">
                        <div class="masonry-wrap grid-loaded" style="position: relative; height: 1731.53px;">
                            <!-- IMAGE #1 -->
                            <div class="gallery-item dental" style="position: absolute; left: 0%; top: 0px;">
                                <div class="hover-overlay">
                                    <!-- Gallery Image -->
                                    <img class="img-fluid" src="assets/images/IMGL8880.jpg" alt="galley-image">
                                    <div class="item-overlay"></div>
                                    <!-- Image Zoom -->
                                    <div class="image-zoom">
                                        <a class="image-link" href="assets/images/IMGL8880.jpg" title=""><i
                                                class="fas fa-search-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- END IMAGE #1 -->
                            <!-- IMAGE #2 -->
                            <div class="gallery-item pediatric" style="position: absolute; left: 33.3292%; top: 0px;">
                                <div class="hover-overlay">
                                    <!-- Gallery Image -->
                                    <img class="img-fluid" src="assets/images/IMGL8877.jpg" alt="galley-image">
                                    <div class="item-overlay"></div>
                                    <!-- Image Zoom -->
                                    <div class="image-zoom">
                                        <a class="image-link" href="assets/images/IMGL8877.jpg" title=""><i
                                                class="fas fa-search-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- END IMAGE #2 -->
                           
                            <!-- END IMAGE #3 -->
                            <!-- IMAGE #4 -->
                            <div class="gallery-item pediatric" style="position: absolute; left: 0%; top: 379.953px;">
                                <div class="hover-overlay">
                                    <!-- Gallery Image -->
                                    <img class="img-fluid" src="assets/images/IMGL8870.jpg" alt="galley-image">
                                    <div class="item-overlay"></div>
                                    <!-- Image Zoom -->
                                    <div class="image-zoom">
                                        <a class="image-link" href="assets/images/IMGL8870.jpg" title=""><i
                                                class="fas fa-search-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- END IMAGE #4 -->
                            <!-- IMAGE #5 -->
                            <div class="gallery-item dental"
                                style="position: absolute; left: 66.6584%; top: 379.953px;">
                                <div class="hover-overlay">
                                    <!-- Gallery Image -->
                                    <img class="img-fluid" src="assets/images/IMGL8864.jpg" alt="galley-image">
                                    <div class="item-overlay"></div>
                                    <!-- Image Zoom -->
                                    <div class="image-zoom">
                                        <a class="image-link" href="assets/images/IMGL8864.jpg" title=""><i
                                                class="fas fa-search-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- END IMAGE #5 -->
                            <!-- IMAGE #6 -->
                            <div class="gallery-item cardiology"
                                style="position: absolute; left: 33.3292%; top: 485.812px;">
                                <div class="hover-overlay">
                                    <!-- Gallery Image -->
                                    <img class="img-fluid" src="assets/images/IMGL8859.jpg" alt="galley-image">
                                    <div class="item-overlay"></div>
                                    <!-- Image Zoom -->
                                    <div class="image-zoom">
                                        <a class="image-link" href="assets/images/IMGL8859.jpg" title=""><i
                                                class="fas fa-search-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- END IMAGE #6 -->
                            <!-- IMAGE #7 -->
                            <div class="gallery-item pediatric" style="position: absolute; left: 0%; top: 759.906px;">
                                <div class="hover-overlay">
                                    <!-- Gallery Image -->
                                    <img class="img-fluid" src="assets/images/IMGL8855.jpg" alt="galley-image">
                                    <div class="item-overlay"></div>
                                    <!-- Image Zoom -->
                                    <div class="image-zoom">
                                        <a class="image-link" href="assets/images/IMGL8855.jpg" title=""><i
                                                class="fas fa-search-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- END IMAGE #7 -->
                            <!-- IMAGE #8 -->
                            <div class="gallery-item cardiology"
                                style="position: absolute; left: 33.3292%; top: 865.765px;">
                                <div class="hover-overlay">
                                    <!-- Gallery Image -->
                                    <img class="img-fluid" src="assets/images/IMGL8850.jpg" alt="galley-image">
                                    <div class="item-overlay"></div>
                                    <!-- Image Zoom -->
                                    <div class="image-zoom">
                                        <a class="image-link" href="assets/images/IMGL8850.jpg" title=""><i
                                                class="fas fa-search-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- END IMAGE #8 -->
                            <!-- IMAGE #9 -->
                            <div class="gallery-item dental"
                                style="position: absolute; left: 66.6584%; top: 865.765px;">
                                <div class="hover-overlay">
                                    <!-- Gallery Image -->
                                    <img class="img-fluid" src="assets/images/g2-min.jpg" alt="galley-image">
                                    <div class="item-overlay"></div>
                                    <!-- Image Zoom -->
                                    <div class="image-zoom">
                                        <a class="image-link" href="assets/images/g2-min.jpg" title=""><i
                                                class="fas fa-search-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- END IMAGE #9 -->
                            <!-- IMAGE #10 -->
                            <div class="gallery-item pediatric" style="position: absolute; left: 0%; top: 1245.72px;">
                                <div class="hover-overlay">
                                    <!-- Gallery Image -->
                                    <img class="img-fluid" src="assets/images/IMGL8846.jpg" alt="galley-image">
                                    <div class="item-overlay"></div>
                                    <!-- Image Zoom -->
                                    <div class="image-zoom">
                                        <a class="image-link" href="assets/images/IMGL8846.jpg" title=""><i
                                                class="fas fa-search-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- END IMAGE #10 -->
                            <!-- IMAGE #11 -->
                            <div class="gallery-item cardiology"
                                style="position: absolute; left: 66.6584%; top: 1245.72px;">
                                <div class="hover-overlay">
                                    <!-- Gallery Image -->
                                    <img class="img-fluid" src="assets/images/IMGL8844.jpg" alt="galley-image">
                                    <div class="item-overlay"></div>
                                    <!-- Image Zoom -->
                                    <div class="image-zoom">
                                        <a class="image-link" href="assets/images/IMGL8844.jpg" title=""><i
                                                class="fas fa-search-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- END IMAGE #11 -->
                            <!-- IMAGE #12 -->
                            <div class="gallery-item dental"
                                style="position: absolute; left: 33.3292%; top: 1351.58px;">
                                <div class="hover-overlay">
                                    <!-- Gallery Image -->
                                    <img class="img-fluid" src="assets/images/IMGL8839.jpg" alt="galley-image">
                                    <div class="item-overlay"></div>
                                    <!-- Image Zoom -->
                                    <div class="image-zoom">
                                        <a class="image-link" href="assets/images/IMGL8839.jpg" title=""><i
                                                class="fas fa-search-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="gallery-item dental"
                                style="position: absolute; left: 33.3292%; top: 1351.58px;">
                                <div class="hover-overlay">
                                    <!-- Gallery Image -->
                                    <img class="img-fluid" src="assets/images/IMGL8823.jpg" alt="galley-image">
                                    <div class="item-overlay"></div>
                                    <!-- Image Zoom -->
                                    <div class="image-zoom">
                                        <a class="image-link" href="assets/images/IMGL8823.jpg" title=""><i
                                                class="fas fa-search-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="gallery-item dental"
                                style="position: absolute; left: 33.3292%; top: 1351.58px;">
                                <div class="hover-overlay">
                                    <!-- Gallery Image -->
                                    <img class="img-fluid" src="assets/images/IMGL8825.jpg" alt="galley-image">
                                    <div class="item-overlay"></div>
                                    <!-- Image Zoom -->
                                    <div class="image-zoom">
                                        <a class="image-link" href="assets/images/IMGL8825.jpg" title=""><i
                                                class="fas fa-search-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="gallery-item dental"
                                style="position: absolute; left: 33.3292%; top: 1351.58px;">
                                <div class="hover-overlay">
                                    <!-- Gallery Image -->
                                    <img class="img-fluid" src="assets/images/IMGL8831.jpg" alt="galley-image">
                                    <div class="item-overlay"></div>
                                    <!-- Image Zoom -->
                                    <div class="image-zoom">
                                        <a class="image-link" href="assets/images/IMGL8831.jpg" title=""><i
                                                class="fas fa-search-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="gallery-item dental"
                                style="position: absolute; left: 33.3292%; top: 1351.58px;">
                                <div class="hover-overlay">
                                    <!-- Gallery Image -->
                                    <img class="img-fluid" src="assets/images/IMGL8838.jpg" alt="galley-image">
                                    <div class="item-overlay"></div>
                                    <!-- Image Zoom -->
                                    <div class="image-zoom">
                                        <a class="image-link" href="assets/images/IMGL8838.jpg" title=""><i
                                                class="fas fa-search-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="gallery-item dental"
                                style="position: absolute; left: 33.3292%; top: 1351.58px;">
                                <div class="hover-overlay">
                                    <!-- Gallery Image -->
                                    <img class="img-fluid" src="assets/images/IMGL8783.jpg" alt="galley-image">
                                    <div class="item-overlay"></div>
                                    <!-- Image Zoom -->
                                    <div class="image-zoom">
                                        <a class="image-link" href="assets/images/IMGL8783.jpg" title=""><i
                                                class="fas fa-search-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="gallery-item dental"
                                style="position: absolute; left: 33.3292%; top: 1351.58px;">
                                <div class="hover-overlay">
                                    <!-- Gallery Image -->
                                    <img class="img-fluid" src="assets/images/IMGL8810.jpg" alt="galley-image">
                                    <div class="item-overlay"></div>
                                    <!-- Image Zoom -->
                                    <div class="image-zoom">
                                        <a class="image-link" href="assets/images/IMGL8810.jpg" title=""><i
                                                class="fas fa-search-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="gallery-item dental"
                                style="position: absolute; left: 33.3292%; top: 1351.58px;">
                                <div class="hover-overlay">
                                    <!-- Gallery Image -->
                                    <img class="img-fluid" src="assets/images/IMGL8813.jpg" alt="galley-image">
                                    <div class="item-overlay"></div>
                                    <!-- Image Zoom -->
                                    <div class="image-zoom">
                                        <a class="image-link" href="assets/images/IMGL8813.jpg" title=""><i
                                                class="fas fa-search-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="gallery-item dental"
                                style="position: absolute; left: 33.3292%; top: 1351.58px;">
                                <div class="hover-overlay">
                                    <!-- Gallery Image -->
                                    <img class="img-fluid" src="assets/images/IMGL8821.jpg" alt="galley-image">
                                    <div class="item-overlay"></div>
                                    <!-- Image Zoom -->
                                    <div class="image-zoom">
                                        <a class="image-link" href="assets/images/IMGL8821.jpg" title=""><i
                                                class="fas fa-search-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="gallery-item dental"
                                style="position: absolute; left: 33.3292%; top: 1351.58px;">
                                <div class="hover-overlay">
                                    <!-- Gallery Image -->
                                    <img class="img-fluid" src="assets/images/IMGL8884.jpg" alt="galley-image">
                                    <div class="item-overlay"></div>
                                    <!-- Image Zoom -->
                                    <div class="image-zoom">
                                        <a class="image-link" href="assets/images/IMGL8884.jpg" title=""><i
                                                class="fas fa-search-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="gallery-item dental"
                                style="position: absolute; left: 33.3292%; top: 1351.58px;">
                                <div class="hover-overlay">
                                    <!-- Gallery Image -->
                                    <img class="img-fluid" src="assets/images/IMGL8885.jpg" alt="galley-image">
                                    <div class="item-overlay"></div>
                                    <!-- Image Zoom -->
                                    <div class="image-zoom">
                                        <a class="image-link" href="assets/images/IMGL8885.jpg" title=""><i
                                                class="fas fa-search-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- END IMAGE #12 -->
                        </div>
                    </div>
                </div>
                <!-- END GALLERY IMAGES HOLDER -->
            </div>
            <!-- End container -->
        </div>
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