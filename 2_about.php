<!-- Start Header -->
<?php include("./includes/header.php") ?>
<!-- End Header -->

<body>
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

            <!-- About Section -->
            <section id="about" class="about section">

                <div class="container" data-aos="fade-up" data-aos-delay="100">

                    <?php
                    $query = "SELECT * FROM tbl_posts inner join tbl_categories on tbl_categories.cat_id = tbl_posts.post_category_id   where tbl_categories.cat_page=2 and tbl_categories.cat_id=14";
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

                        <div class="row gy-4 align-items-center justify-content-between">

                            <div class="col-xl-5" data-aos="fade-up" data-aos-delay="200">
                                <span class="about-meta">MORE ABOUT US</span>

                                <h1 class="about-title"><?php echo $the_post_title ?></h1>
                                <p class="about-description"><?php echo $the_post_content ?></p>

                                <div class="row feature-list-wrapper">
                                    <div class="col-md-6">
                                        <ul class="feature-list">
                                            <li><i class="bi bi-check-circle-fill"></i> Lorem ipsum dolor sit amet</li>
                                            <li><i class="bi bi-check-circle-fill"></i> Consectetur adipiscing elit</li>
                                            <li><i class="bi bi-check-circle-fill"></i> Sed do eiusmod tempor</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul class="feature-list">
                                            <li><i class="bi bi-check-circle-fill"></i> Incididunt ut labore et</li>
                                            <li><i class="bi bi-check-circle-fill"></i> Dolore magna aliqua</li>
                                            <li><i class="bi bi-check-circle-fill"></i> Utenim ad minim veniam</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="info-wrapper">
                                    <div class="row gy-4">
                                        <div class="col-lg-5">
                                            <div class="profile d-flex align-items-center gap-3">
                                                <img src="assets/img/avatar-1.webp" alt="CEO Profile" class="profile-image">
                                                <div>
                                                    <h4 class="profile-name">Mario Smith</h4>
                                                    <p class="profile-position">CEO &amp; Founder</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="contact-info d-flex align-items-center gap-2">
                                                <i class="bi bi-telephone-fill"></i>
                                                <div>
                                                    <p class="contact-label">Call us anytime</p>
                                                    <p class="contact-number">+123 456-789</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6" data-aos="fade-up" data-aos-delay="300">
                                <div class="image-wrapper">
                                    <div class="images position-relative" data-aos="zoom-out" data-aos-delay="400">
                                        <img src="<?php echo "admin/images/" . $the_post_image; ?>" alt="Business Meeting" class="img-fluid main-image rounded-4">
                                        <img src="assets/img/about-2.webp" alt="Team Discussion" class="img-fluid small-image rounded-4">
                                    </div>
                                    <div class="experience-badge floating">
                                        <h3>15+ <span>Years</span></h3>
                                        <p>Of experience in business service</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>

            </section><!-- /About Section -->

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
                                    <i class="bi bi-laptop text-white fs-4" aria-hidden="true"></i>
                                </div>
                                <h5 class="mb-3">Outsource</h5>
                                <p class="m-0"><?php echo constant('page_about_7')?></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="feature-item bg-light rounded p-4">
                                <div class="d-inline-flex align-items-center justify-content-center bg-secondary-gradient rounded-circle mb-4" style="width: 60px; height: 60px;">
                                    <i class="bi bi-shield-lock text-white fs-4"></i>
                                </div>
                                <h5 class="mb-3">Security</h5>
                                <p class="m-0"><?php echo constant('page_about_8')?></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="feature-item bg-light rounded p-4">
                                <div class="d-inline-flex align-items-center justify-content-center bg-primary-gradient rounded-circle mb-4" style="width: 60px; height: 60px;">
                                    <i class="bi bi-cpu text-white fs-4"></i>
                                </div>
                                <h5 class="mb-3">Software</h5>
                                <p class="m-0"><?php echo constant('page_about_9')?></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="feature-item bg-light rounded p-4">
                                <div class="d-inline-flex align-items-center justify-content-center bg-secondary-gradient rounded-circle mb-4" style="width: 60px; height: 60px;">
                                    <i class="bi bi-hdd-rack text-white fs-4"></i>
                                </div>
                                <h5 class="mb-3">Hardware</h5>
                                <p class="m-0"><?php echo constant('page_about_10')?></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="feature-item bg-light rounded p-4">
                                <div class="d-inline-flex align-items-center justify-content-center bg-primary-gradient rounded-circle mb-4" style="width: 60px; height: 60px;">
                                    <i class="bi bi-cloud text-white fs-4"></i>
                                </div>
                                <h5 class="mb-3">Cloud Storage</h5>
                                <p class="m-0"><?php echo constant('page_about_11')?></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="feature-item bg-light rounded p-4">
                                <div class="d-inline-flex align-items-center justify-content-center bg-secondary-gradient rounded-circle mb-4" style="width: 60px; height: 60px;">
                                    <i class="bi bi-tools text-white fs-4"></i>
                                </div>
                                <h5 class="mb-3">IT Support</h5>
                                <p class="m-0"><?php echo constant('page_about_12')?></p>
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
                        $query = "SELECT * FROM tbl_posts inner join tbl_categories on tbl_categories.cat_id = tbl_posts.post_category_id   where tbl_categories.cat_page=2 and tbl_categories.cat_id=2";
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
                                <div class="col-md-6 col-lg-4 col-xl-3 fadeInUp d-flex " data-wow-delay="0.1s">
                                    <div class="service-item text-center rounded p-4 d-flex flex-column w-100 shadow-lg">
                                        <div class="blog-item flex-grow-1">
                                            <div class="blog-img overflow-hidden" style="position: relative;">
                                                <img src="<?php echo "admin/images/" . $the_post_image; ?>" class="img-fluid" style="object-fit: cover; height: 200px; width: 100%;" alt="">
                                            </div>
                                            <div class="service-content">
                                                <h4 class="mb-4"><?php echo $the_post_title; ?></h4>
                                                <p class="mb-0"><?php echo $the_post_content; ?></p>
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

