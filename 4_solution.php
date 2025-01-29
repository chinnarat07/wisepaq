<?php include("./includes/header.php") ?>
 <!-- Solution content Start -->
        <div class="container">
            <div class="row g-5 py-5 align-items-center">
                <?php
                $query = "SELECT * FROM tbl_posts inner join tbl_categories on tbl_categories.cat_id = tbl_posts.post_category_id where tbl_categories.cat_page=4";
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

                    // ตรวจสอบว่าตัวนับคือเลขคี่หรือคู่
                    if ($counter % 2 != 0) {
                ?>
                        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                            <img class="img-fluid rounded" src="<?php echo "admin/images/" . $the_post_image; ?>">
                        </div>
                        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="d-flex align-items-center mb-4">
                                <h1 class="mb-0"><?php echo $counter ?></h1>
                                <span class="bg-primary mx-2" style="width: 30px; height: 2px;"></span>
                                <h5 class="mb-0"><?php echo $the_post_title ?></h5>
                            </div>
                            <p class="mb-4"><?php echo $the_post_content ?></p>
                        </div>
                    <?php
                    } else {
                    ?>
                        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="d-flex align-items-center mb-4">
                                <h1 class="mb-0"><?php echo $counter ?></h1>
                                <span class="bg-primary mx-2" style="width: 30px; height: 2px;"></span>
                                <h5 class="mb-0"><?php echo $the_post_title ?></h5>
                            </div>
                            <p class="mb-4"><?php echo $the_post_content ?></p>
                        </div>
                        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                            <img class="img-fluid rounded" src="<?php echo "admin/images/" . $the_post_image; ?>">
                        </div>
                <?php
                    }
                    $counter++; // เพิ่มตัวนับ
                }
                ?>
            </div>
        </div>
    <!-- Solution content End -->

    <!-- Start Footer -->
    <?php include("./includes/footer.php") ?>
    <!-- End Footer -->
