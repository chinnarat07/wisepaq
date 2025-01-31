 <!-- Header Start -->
 <?php include("./includes/header.php") ?>
 <!-- Header End -->

 <div class="container-fluid">
    <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 100%;">
       <br>
       <div class="justify-content-center">

          <img class="img-fluid rounded" style="object-fit: cover; width: 50%; height: auto;" src="./img/ImgWeb/laptop-3.jpg" alt="">

          <div>
             <br>
             <h2 class="display-4 mb-2">SOFTWARE DEVELOP</h2>
             <h2 class="fs-3 mb-4"><?php echo constant('page_software_11') ?></h2>
             <button type="button" class="btn btn-primary"><?php echo constant('page_software_2') ?></button>
             <button type="button" class="btn btn-primary"><?php echo constant('page_software_3') ?></button>
             <button type="button" class="btn btn-primary"><?php echo constant('page_software_4') ?></button>
             <button type="button" class="btn btn-primary"><?php echo constant('page_software_5') ?></button>
             <button type="button" class="btn btn-primary"><?php echo constant('page_software_6') ?></button>
             <button type="button" class="btn btn-primary"><?php echo constant('page_software_7') ?></button>
             <button type="button" class="btn btn-primary"><?php echo constant('page_software_8') ?></button>
             <button type="button" class="btn btn-primary"><?php echo constant('page_software_9') ?></button>
             <button type="button" class="btn btn-primary"><?php echo constant('page_software_10') ?></button>
          </div>
       </div>
    </div>
 </div>


 <!-- Features Section -->
 <section id="features" class="features section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
       <h2>WISEPAQ FWD</h2>
       <p><?php echo constant('page_software_1') ?></p>
    </div><!-- End Section Title -->

    <div class="container">

       <div class="d-flex justify-content-center">

          <ul class="nav nav-tabs" data-aos="fade-up" data-aos-delay="100">

             <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#features-tab-1">
                   <h4>WISEPAQ FWD</h4>
                </a>
             </li><!-- End tab nav item -->

             <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-2">
                   <h4>OPEATION</h4>
                </a><!-- End tab nav item -->

             </li>
             <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-3">
                   <h4>ACCOUNT READY</h4>
                </a>
             </li><!-- End tab nav item -->

          </ul>

       </div>

       <div class="tab-content" data-aos="fade-up" data-aos-delay="200">
          <?php
            $query = "SELECT * FROM tbl_posts inner join tbl_categories on tbl_categories.cat_id = tbl_posts.post_category_id where tbl_categories.cat_page=7";
            $fetch_posts_data = mysqli_query($connection, $query);
            $count = 1; // เริ่มต้นตัวนับ

            // สร้างแท็บที่แสดงโพสต์
            while ($Row = mysqli_fetch_assoc($fetch_posts_data)) {
               $the_post_id = $Row['post_id'];
               $the_post_image = $Row['post_image'];

               // ตรวจสอบภาษาของเซสชัน
               if ($_SESSION['lang'] == 'en') {
                  $the_post_title = base64_decode($Row['post_title']);
                  $the_post_content = base64_decode($Row['post_content']);
                  $post_subtitle = base64_decode($Row['post_subtitle']);
               } else {
                  $the_post_title = base64_decode($Row['post_title_thai']);
                  $the_post_content = base64_decode($Row['post_content_thai']);
                  $post_subtitle = isset($Row['post_subtitle_thai']) ? base64_decode($Row['post_subtitle_thai']) : '';  // กำหนดค่าเริ่มต้นหากไม่มีค่า
               }

               // แสดงแท็บใหม่ทุก 3 รายการ
               if ($count == 1) {
                  echo '<div class="tab-pane fade active show" id="features-tab-' . $count . '">';
               } else {
                  echo '<div class="tab-pane fade" id="features-tab-' . $count . '">';
               }
            ?>
             <div class="row">
                <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                   <h3><?php echo $the_post_title ?></h3>
                   <p class="fst-italic"><i class="bi bi-check2-all"></i> <?php echo $post_subtitle ?></p>
                   <ul>
                      <li><span><?php echo $the_post_content ?></span></li>
                   </ul>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 text-center">
                   <img src="<?php echo "admin/images/" . $the_post_image; ?>" alt="" class="img-fluid">
                </div>
             </div>
       </div> <!-- End tab content item -->

    <?php
               $count++; // เพิ่มตัวนับหลังจากแสดงแต่ละแท็บ
            }
      ?>
    </div> <!-- End tab-content -->

 </section><!-- /Features Section -->


 <!-- Start Footer -->
 <?php include("./includes/footer.php") ?>
 <!-- End Footer -->