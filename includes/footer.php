<div class="container-fluid footer bg-light text-dark footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h1 class="text-light mb-4"><?php echo constant('page_footer_5') ?></h1>

                <p id="size15" class="mb-2">
                    <i class="fa fa-map-marker-alt me-3"></i><?php echo constant('page_footer_2') ?>
                </p>
                <p id="size15" class="mb-2">
                    <i class="fa fa-phone-alt me-3"></i><?php echo constant('page_footer_3') ?>
                </p>
                <p id="size15" class="mb-2">
                    <i class="fa fa-envelope me-3"></i><?php echo constant('page_footer_4') ?>
                </p>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-dark btn-social" href="https://x.com/Wisepaq">
                        <i class="bi bi-twitter-x"></i></a>
                    <a class="btn btn-outline-dark btn-social" href="https://www.facebook.com/Wisepaqbusiness/">
                        <i class="bi bi-facebook"></i></a>
                    <a class="btn btn-outline-dark btn-social" href="https://youtube.com/@wisepaq-business?feature=shared">
                        <i class="bi bi-youtube"></i></a>
                    <a class="btn btn-outline-dark btn-social" href="">
                        <i class="bi bi-linkedin"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <h1 class="text-light mb-4"><?php echo constant('page_footer_6') ?></h1>
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
                        <a href="<?php echo $link; ?>" class="btn btn-link fs-5"><?php echo $menu_title; ?></a>

                    <?php }
                }
                ?>
            </div>
            <!-- Endfooter Quick-Link -->

            <!-- Startfooter Popular-Link -->
            <div class="col-lg-3 col-md-6">
                <h1 class="text-light mb-4"><?php echo constant('page_footer_7') ?></h1>
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
                        <a href="<?php echo $link; ?>" class="btn btn-link fs-5"><?php echo $menu_title; ?></a>

                    <?php }
                }
                ?>
            </div>
            <!-- Endfooter Popular-Link -->

            <div class="col-lg-3 col-md-6">
                <h1 class="text-light mb-4">Newsletter</h1>
                <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                <div class="position-relative mx-auto" style="max-width: 400px">
                    <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email" />
                    <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">
                        SignUp
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="#">Your Site Name</a>, All
                    Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Designed By
                    <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                    <br />Distributed By:
                    <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
                </div>
            </div>
        </div>
    </div>
</div>

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