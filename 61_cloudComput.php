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

    <div class="container-fluid service py-5">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 80%;">
            <div class="row g-1 justify-content-center">

                <?php
                $query = "SELECT * FROM tbl_posts inner join tbl_categories on tbl_categories.cat_id = tbl_posts.post_category_id   where tbl_categories.cat_page=6";
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
                
                        <div class="service-item text-center p-4 flex-column align-items-center mt-5">
                            <div class="blog-item">
                                <div class="blog-item">
                                    <img src="<?php echo "admin/images/" . $the_post_image; ?>" class="img-fluid" style="object-fit:cover;" alt="">
                                </div>
                            </div>
                            <h2 class="display-6 mb-4"><?php echo $the_post_title ?></h2>
                            <p class="fs-4 mb-4"><?php echo $the_post_content ?></p>
                            <br>
                        </div>
            </div>
        <?php } ?>
        </div>
    </div>

    <!-- Start Footer -->
    <?php include("./includes/footer.php") ?>
    <!-- End Footer -->

</body>
</html>