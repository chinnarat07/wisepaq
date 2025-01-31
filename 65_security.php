 <?php include("./includes/header.php") ?>


 <!-- Solution content Start -->
 <div class="container">
    <?php
      $query = "SELECT * FROM tbl_posts inner join tbl_categories on tbl_categories.cat_id = tbl_posts.post_category_id where tbl_categories.cat_page=10";
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
          <div class="row g-5 py-5 align-items-center">
             <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <img class="img-fluid rounded" src="<?php echo "admin/images/" . $the_post_image; ?>">
             </div>
             <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="d-flex align-items-center mb-4">
                   <h1 class="mb-0"><?php echo $counter ?></h1>
                   <span class="bg-primary mx-2" style="width: 30px; height: 2px;"></span>
                   <h3 class="mb-0"><?php echo $the_post_title ?></h3>
                </div>
                <p class="mb-4"><?php echo $the_post_content ?></p>
             </div>
          </div>
       <?php
         } else {
         ?>
          <div class="row g-5 py-5 align-items-center flex-column-reverse flex-lg-row">
             <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="d-flex align-items-center mb-4">
                   <h1 class="mb-0"><?php echo $counter ?></h1>
                   <span class="bg-primary mx-2" style="width: 30px; height: 2px;"></span>
                   <h3 class="mb-0"><?php echo $the_post_title ?></h3>
                </div>
                <p class="mb-4"><?php echo $the_post_content ?></p>
             </div>
             <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <img class="img-fluid rounded" src="<?php echo "admin/images/" . $the_post_image; ?>">
             </div>
          </div>
    <?php
         }
         $counter++; // เพิ่มตัวนับ
      }
      ?>
 </div>
 <!-- Solution content End -->


 <!-- Testimonials Section -->
 <section id="testimonials" class="testimonials section light-background">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
       <h2>Testimonials</h2>
       <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div><!-- End Section Title -->

    <div class="container">

       <div class="row g-5">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
             <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
                <div class="stars">
                   <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                   <i class="bi bi-quote quote-icon-left"></i>
                   <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.</span>
                   <i class="bi bi-quote quote-icon-right"></i>
                </p>
             </div>
          </div><!-- End testimonial item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
             <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
                <div class="stars">
                   <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                   <i class="bi bi-quote quote-icon-left"></i>
                   <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.</span>
                   <i class="bi bi-quote quote-icon-right"></i>
                </p>
             </div>
          </div><!-- End testimonial item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
             <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
                <div class="stars">
                   <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                   <i class="bi bi-quote quote-icon-left"></i>
                   <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.</span>
                   <i class="bi bi-quote quote-icon-right"></i>
                </p>
             </div>
          </div><!-- End testimonial item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
             <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
                <div class="stars">
                   <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                   <i class="bi bi-quote quote-icon-left"></i>
                   <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.</span>
                   <i class="bi bi-quote quote-icon-right"></i>
                </p>
             </div>
          </div><!-- End testimonial item -->

       </div>

    </div>

 </section><!-- /Testimonials Section -->

 <!-- Start Footer -->
 <?php include("./includes/footer.php") ?>
 <!-- End Footer -->