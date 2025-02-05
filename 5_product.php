 <?php include("./includes/header.php") ?>
 <!-- Blog Start -->
 <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
     <div class="container py-5">
         <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
             <h2 class="mb-0">PRODUCT</h2>
             <p class="p-1 fs-5">by</p>
             <h5 class="fw-bold text-primary text-uppercase mt-1">wisepaq</h5>
         </div>
         <div class="row g-5">

             <?php
                $query = "SELECT * FROM tbl_posts inner join tbl_categories on tbl_categories.cat_id = tbl_posts.post_category_id   where tbl_categories.cat_page=5 and tbl_posts.post_status='Published'";
                $fetch_posts_data = mysqli_query($connection, $query);
                while ($Row = mysqli_fetch_assoc($fetch_posts_data)) {
                    $the_post_id = $Row['post_id'];
                    $the_post_image = $Row['post_image'];
                    if ($_SESSION['lang'] == 'en') {
                        $the_post_title = base64_decode($Row['post_title']);
                        $the_post_content = base64_decode($Row['post_content']);
                        $post_subtitle = base64_decode($Row['post_subtitle']);
                    } else {
                        $the_post_title = base64_decode($Row['post_title_thai']);
                        $the_post_content = base64_decode($Row['post_content_thai']);
                        $post_subtitle = isset($Row['post_subtitle_thai']) ? base64_decode($Row['post_subtitle_thai']) : '';
                    }
                ?>

             
                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                                    <div class="service-item text-left rounded-3 p-4 d-flex flex-column w-100 h-100 shadow-lg">
                                        <div class="blog-item flex-grow-1">
                                            <div class="blog-img overflow-hidden d-flex justify-content-center mt-2" style="position: relative;">
                                                <img src="<?php echo "admin@WSP/images/" . $the_post_image; ?>" class="img-fluid " style="object-fit: cover; height: auto; width: auto;" alt="">
                                            </div>
                                            <hr>
                                            <div class="service-content" >
                                                <p class="mb-0"><?php echo $the_post_content; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
             
             

             
             
             
             <?php } ?>
         </div>
     </div>
 </div>
 <!-- Blog Start -->


 <!-- Start Footer -->
 <?php include("./includes/footer.php") ?>
 <!-- End Footer -->