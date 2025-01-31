    <body>
    <!-- Start Header -->
    <?php include("./includes/header.php") ?>
    <!-- End Header -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">

            <div class="col-lg-12 wow fadeIn text-center align-items-center" data-wow-delay="0.1s">
                <div class="rounded" >
                    <img class="img-fluid h-50% w-100%" style="object-fit:contain;" src="./img/ImgWeb/ai-gen-1.jpg" alt="">
                </div>
                <br>
            </div>

            <div class="col-lg-12 wow fadeIn text-center align-items-center" data-wow-delay="0.5s">
                <p class="d-inline-block rounded bg-secondary-gradient text-light py-3 px-4 fs-2">OUTSOURCE</p>
                <h1 class="text-uppercase mb-4">More Than Just A Haircut. Learn More About Us!</h1>
                <p><?php echo constant('page_outsource_1') ?></p>
                <!-- <p class="mb-4">Stet no et lorem dolor et diam, amet duo ut dolore vero eos. No stet est diam rebum amet diam ipsum. Clita clita labore, dolor duo nonumy clita sit at, sed sit sanctus dolor eos.</p> -->
                <br>
                <div class="row g-4">
                    <div class="col-md-6">
                        <h3 class="text-uppercase mb-3"><?php echo constant('page_outsource_2') ?></h3>
                        <p class="mb-0"><?php echo constant('page_outsource_3') ?></p>
                    </div>
                    <br>
                    <div class="col-md-6">
                        <h3 class="text-uppercase mb-3"><?php echo constant('page_outsource_4') ?></h3>
                        <p class="mb-0"><?php echo constant('page_outsource_5') ?></p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- About End -->

    <!-- content outsource Start -->
    <div class="row gy-5 gx-4">
        <?php
        $query = "SELECT * FROM tbl_posts inner join tbl_categories on tbl_categories.cat_id = tbl_posts.post_category_id   where tbl_categories.cat_page=8";
        $fetch_posts_data = mysqli_query($connection, $query);
        $counter = 1; // ตัวแปรสำหรับนับลูป
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

            if ($counter % 2 != 0) {
        ?>
                <div class="container-xxl py-5">
                    <div class="container">
                        <br>
                        <div class="row g-5 ">

                            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="img-border">
                                    <img class="img-fluid" src="<?php echo "admin/images/" . $the_post_image; ?>" alt="" />
                                </div>
                            </div>

                            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="align-items-center">
                                    <h1 class="mb-5" data-wow-delay="0.1s">
                                        <?php echo $the_post_title ?>
                                    </h1>
                                    <p>
                                        <?php echo $the_post_content ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            } else {
            ?>
                <div class="container-xxl py-5">
                    <div class="container">
                        <div class="row g-5 ">
                            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                                <br>

                                <div class="align-items-center">
                                    <h1 class="mb-5" data-wow-delay="0.1s">
                                        <?php echo $the_post_title ?>
                                    </h1>
                                    <p>
                                        <?php echo $the_post_content ?>
                                    </p>
                                </div>
                            </div>

                            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="img-border">
                                    <img class="img-fluid" src="<?php echo "admin/images/" . $the_post_image; ?>" alt="" />
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
        <?php
            }
            $counter++; // เพิ่มตัวนับ
        }
        ?>
    </div>
    <!-- content outsource End -->

    <!-- Start Footer -->
    <?php include("./includes/footer.php") ?>
    <!-- End Footer -->

    