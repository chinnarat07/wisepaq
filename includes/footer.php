  <!-- Footer Start -->
    <div id="footer">
        <div class="container-fluid bg-white text-dark footer mt-0 wow fadeIn " data-wow-delay="0.1s ">
            <div class="container pt-5 pb-2">
                <div class="row g-5 ">
                    <div class="col-lg-3 col-md-6 px-0 ">
                        <a href="index.php">
                            <img src="img/wisepaq.jpg" alt="" class="mx-auto d-block "  style="margin-top: 1rem;  background-color: red;">
                            <p class="text-dark mt-3 fs-5 fw-bold p-3 text-center shadow-lg" style="border-radius: 5px; border: 3px  solid #b8b4b4;"><?php echo constant('page_footer_1.1') ?></p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6  ps-5">
                        <h2 class="text-dark mb-4 "><?php echo constant('page_footer_5') ?></h2>
                        <p class="mb-2 "><i class="fa fa-map-marker-alt me-3 text-primary"></i><?php echo constant('page_footer_2') ?></p>
                        <p class="mb-2 "><i class="fa fa-phone-alt me-3 text-primary"></i><?php echo constant('page_footer_3') ?></p>
                        <p class="mb-2 "><i class="fa fa-fax me-3 text-primary"></i><?php echo constant('page_footer_3.1') ?></p>
                        <p class="mb-2 "><i class="fa fa-envelope me-3 text-primary"></i><?php echo constant('page_footer_4') ?></p>
                        <p class="mb-2 "><i class="fab fa-line me-3 text-primary"></i><?php echo constant('page_footer_4.1') ?></p>
                        <div class="d-flex ">
                            <a class="btn btn-outline-light btn-social" href="https://x.com/Wisepaq">
                                <i class="bi bi-twitter-x"></i></a>
                            <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/Wisepaqbusiness/">
                                <i class="bi bi-facebook"></i></a>
                            <a class="btn btn-outline-light btn-social" href="https://youtube.com/@wisepaq-business?feature=shared">
                                <i class="bi bi-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href="">
                                <i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6  ps-5">
                        <h1 class="text-dark mb-4"><?php echo constant('page_footer_6') ?></h1>
                        <?php
                        $query = "SELECT * FROM quick_link";
                        $fetch_data = mysqli_query($connection, $query);

                        if (mysqli_num_rows($fetch_data) == 0) {
                            //echo "<h1 class='text-center'>No content Found</h1>";
                        } else {
                            while ($Row = mysqli_fetch_assoc($fetch_data)) {

                                $menu_id = $Row['idFQ'];
                                //                        $menu_title = $Row['name'];
                                if ($_SESSION['lang'] == 'en') {
                                    $menu_title = $Row['nameFQ'];
                                } else {
                                    $menu_title = $Row['menuTH'];
                                }
                                $link = $Row['linkFQ'];
                        ?>
                                <a href="<?php echo $link; ?>" class="btn btn-link fs-6 text-decoration-none"><?php echo $menu_title; ?></a>

                        <?php }
                        }
                        ?>
                    </div>
                    <div class="col-lg-3 col-md-6 ps-5 ">
                        <h1 class="text-dark mb-4"><?php echo constant('page_footer_7') ?></h1>
                        <?php
                        $query = "SELECT * FROM popular_link";
                        $fetch_data = mysqli_query($connection, $query);

                        if (mysqli_num_rows($fetch_data) == 0) {
                            //echo "<h1 class='text-center'>No content Found</h1>";
                        } else {
                            while ($Row = mysqli_fetch_assoc($fetch_data)) {

                                $menu_id = $Row['idFP'];
                                //                        $menu_title = $Row['name'];
                                if ($_SESSION['lang'] == 'en') {
                                    $menu_title = $Row['nameFP'];
                                } else {
                                    $menu_title = $Row['menuTH'];
                                }
                                $link = $Row['linkFP'];
                        ?>
                                <a href="<?php echo $link; ?>" class="btn btn-link fs-6 text-decoration-none"><?php echo $menu_title; ?></a>

                        <?php }
                        }
                        ?>
                    </div>

                </div>
            </div>
            <div class="container">
                <div class="copyright text-center">
                    <span class="border-bottom"><?php echo constant('page_footer_0') ?></span>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->
    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>