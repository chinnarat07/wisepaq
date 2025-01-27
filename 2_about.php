<!DOCTYPE html>
<html lang="en">

<!-- Database -->
<?php
include "includes/db.php";
?>
<!-- -------- -->

<body>
    <!-- Start Header -->
    <?php include("./includes/header.php") ?>
    <!-- End Header -->

    <!-- Navbar & Hero Start -->
    <div class="container-fluid header position-relative overflow-hidden p-0">
        <!-- Hero Header Start -->
        <div class="hero-header overflow-hidden px-5">
            <br>
            <div class="row gy-5 align-items-center">
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
                    <h1 class="display-4 text-dark mb-4 wow fadeInUp" data-wow-delay="0.3s"><?php echo constant('page_about_2') ?></h1>
                    <p class="fs-4 mb-4 wow fadeInUp" data-wow-delay="0.5s"><?php echo constant('page_about_3') ?></p>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <img src="./img/ImgWeb/laptop-2.jpg" class="img-fluid w-100 h-100" alt="">
                </div>
            </div>

            <!-- Navbar & Hero End -->

             <!-- Features Start -->
        <div class="container-xxl py-5" id="feature">
            <div class="container py-5 px-lg-5">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="text-primary-gradient fw-medium">App Features</h5>
                    <h1 class="mb-5">Awesome Features</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="feature-item bg-light rounded p-4">
                            <div class="d-inline-flex align-items-center justify-content-center bg-primary-gradient rounded-circle mb-4" style="width: 60px; height: 60px;">
                            <i class="fa fa-shield" aria-hidden="true"></i>
                            </div>
                            <h5 class="mb-3">High Resolution</h5>
                            <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="feature-item bg-light rounded p-4">
                            <div class="d-inline-flex align-items-center justify-content-center bg-secondary-gradient rounded-circle mb-4" style="width: 60px; height: 60px;">
                                <i class="fa fa-layer-group text-white fs-4"></i>
                            </div>
                            <h5 class="mb-3">Retina Ready</h5>
                            <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="feature-item bg-light rounded p-4">
                            <div class="d-inline-flex align-items-center justify-content-center bg-primary-gradient rounded-circle mb-4" style="width: 60px; height: 60px;">
                                <i class="fa fa-edit text-white fs-4"></i>
                            </div>
                            <h5 class="mb-3">Editable Data</h5>
                            <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="feature-item bg-light rounded p-4">
                            <div class="d-inline-flex align-items-center justify-content-center bg-secondary-gradient rounded-circle mb-4" style="width: 60px; height: 60px;">
                                <i class="fa fa-shield-alt text-white fs-4"></i>
                            </div>
                            <h5 class="mb-3">Fully Secured</h5>
                            <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="feature-item bg-light rounded p-4">
                            <div class="d-inline-flex align-items-center justify-content-center bg-primary-gradient rounded-circle mb-4" style="width: 60px; height: 60px;">
                                <i class="fa fa-cloud text-white fs-4"></i>
                            </div>
                            <h5 class="mb-3">Cloud Storage</h5>
                            <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="feature-item bg-light rounded p-4">
                            <div class="d-inline-flex align-items-center justify-content-center bg-secondary-gradient rounded-circle mb-4" style="width: 60px; height: 60px;">
                                <i class="fa fa-mobile-alt text-white fs-4"></i>
                            </div>
                            <h5 class="mb-3">Fully Responsive</h5>
                            <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Features End -->


            <!-- About Start -->
            <div class="container-fluid service py-5">
                <div class="container py-5">
                    <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 900px;">
                        <h2 class="display-5 mb-4"><?php echo constant('page_about_4') ?></h2>
                        <p class="fs-5 mb-0"><?php echo constant('page_about_5') ?>
                        </p>
                    </div>
                    <div class="row g-4 justify-content-center">

                        <?php
                        $query = "SELECT * FROM tbl_posts inner join tbl_categories on tbl_categories.cat_id = tbl_posts.post_category_id   where tbl_categories.cat_page=2";
                        $fetch_posts_data = mysqli_query($connection, $query);
                        while ($Row = mysqli_fetch_assoc($fetch_posts_data)) {
                            $the_post_id = $Row['post_id'];
                            $the_post_image = $Row['post_image'];
                            if ($_SESSION['lang'] == 'en') {

                                $the_post_title = base64_decode($Row['post_title']);
                                $the_post_content = base64_decode($Row['post_content']);
                            } else {
                                $the_post_title = base64_decode($Row['post_title_thai']);
                                $the_post_content = base64_decode($Row['post_content_thai']);
                            }
                        ?>
                            <div class="col-md-6 col-lg-4 col-xl-3 fadeInUp" data-wow-delay="0.1s">
                                <div class="service-item text-center rounded p-4">

                                    <div class="blog-item">
                                        <div class="blog-img">
                                            <img src="<?php echo "admin/images/" . $the_post_image; ?>" class="img-fluid w-100" style="object-fit:cover;" alt="">

                                            <div class="service-content">
                                                <h4 class="mb-4"><?php echo $the_post_title ?></h4>
                                                <p class="mb-0"><?php echo $the_post_content ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <!-- About End -->
        </div>
        <!-- Hero Header End -->
    </div>


    <!-- Start Footer -->
    <?php include("./includes/footer.php") ?>
    <!-- End Footer -->

</body>

</html>