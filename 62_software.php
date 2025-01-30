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
             <p class="fs-3 mb-4">What we have</p>
             <button type="button" class="btn btn-primary">ระบบสายเรือ</button>
             <button type="button" class="btn btn-primary">ระบบ อะไหล่</button>
             <button type="button" class="btn btn-primary">ระบบ โรงงาน</button>
             <button type="button" class="btn btn-primary">ERP</button>
             <button type="button" class="btn btn-primary">ระบบ DEPOT</button>
             <button type="button" class="btn btn-primary">ระบบ เวชระเบียน โรงพยาบาล</button>
             <button type="button" class="btn btn-primary">ระบบหอพัก</button>
             <button type="button" class="btn btn-primary">Nabour</button>
             <button type="button" class="btn btn-primary">ETC.</button>
          </div>
       </div>
    </div>
 </div>


 <!-- Features Section -->
 <section id="features" class="features section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
       <h2>WISEPAQ FWD</h2>
       <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
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
            $query = "SELECT * FROM tbl_posts inner join tbl_categories on tbl_categories.cat_id = tbl_posts.post_category_id   where tbl_categories.cat_page=7";
            $fetch_posts_data = mysqli_query($connection, $query);
            $counter = 1;
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
                  $post_subtitle_thai = base64_decode($Row['post_subtitle_thai']);
               }

               if ($counter % 2 != 0) {
            ?>
                <div class="tab-pane fade active show" id="features-tab-<?php echo $counter ?>">
                   <div class="row">

                      <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                         <h3><?php echo $the_post_title ?></h3>
                         <p class="fst-italic"><?php echo $post_subtitle ?></p>
                         <ul>
                            <li><i class="bi bi-check2-all"></i> <span><?php echo $the_post_content ?></span></li>
                            <li><i class="bi bi-check2-all"></i> <span>Duis aute irure dolor in reprehenderit in voluptate velit.</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</span></li>
                         </ul>
                      </div>
                      <div class="col-lg-6 order-1 order-lg-2 text-center">
                         <img src="<?php echo "admin/images/" . $the_post_image; ?>" alt="" class="img-fluid">
                      </div>
                   </div>
                </div><!-- End tab content item -->
             <?php
               } else {
               ?>
               <div class="tab-pane fade active show" id="features-tab-<?php echo $counter ?>">
               <div class="row">
                <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                   <h3><?php echo $the_post_title ?></h3>
                   <p class="fst-italic"><?php echo $post_subtitle ?></p>
                   <ul>
                      <li><i class="bi bi-check2-all"></i> <span><?php echo $the_post_content ?></span></li>
                      <li><i class="bi bi-check2-all"></i> <span>Duis aute irure dolor in reprehenderit in voluptate velit.</span></li>
                      <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</span></li>
                   </ul>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 text-center">
                   <img src="<?php echo "admin/images/" . $the_post_image; ?>" alt="" class="img-fluid">
                </div>
       </div>
 <?php
               }
               $counter++;
            }
   ?>
    </div>


    <!-- <div class="tab-pane fade" id="features-tab-2">
             <div class="row">
                <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                   <h3>Neque exercitationem debitis</h3>
                   <p class="fst-italic">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                      magna aliqua.
                   </p>
                   <ul>
                      <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></li>
                      <li><i class="bi bi-check2-all"></i> <span>Duis aute irure dolor in reprehenderit in voluptate velit.</span></li>
                      <li><i class="bi bi-check2-all"></i> <span>Provident mollitia neque rerum asperiores dolores quos qui a. Ipsum neque dolor voluptate nisi sed.</span></li>
                      <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</span></li>
                   </ul>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 text-center">
                   <img src="assets/img/features-illustration-2.webp" alt="" class="img-fluid">
                </div>
             </div>
          </div>
          End tab content item -->

    <!-- <div class="tab-pane fade" id="features-tab-3">
             <div class="row">
                <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                   <h3>Voluptatibus commodi accusamu</h3>
                   <ul>
                      <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></li>
                      <li><i class="bi bi-check2-all"></i> <span>Duis aute irure dolor in reprehenderit in voluptate velit.</span></li>
                      <li><i class="bi bi-check2-all"></i> <span>Provident mollitia neque rerum asperiores dolores quos qui a. Ipsum neque dolor voluptate nisi sed.</span></li>
                   </ul>
                   <p class="fst-italic">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                      magna aliqua.
                   </p>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 text-center">
                   <img src="assets/img/features-illustration-3.webp" alt="" class="img-fluid">
                </div>
             </div>
          </div>
          End tab content item -->

    </div>

    </div>

 </section><!-- /Features Section -->


 <!-- Start Footer -->
 <?php include("./includes/footer.php") ?>
 <!-- End Footer -->