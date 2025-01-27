    <!-- Spinner Start -->
    <div
      id="spinner"
      class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"
    >
      <div
        class="spinner-border text-primary"
        style="width: 3rem; height: 3rem"
        role="status"
      >
        <span class="sr-only">Loading...</span>
      </div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <div class="container-fluid bg-light p-0 wow fadeIn" data-wow-delay="0.1s">
      <div class="row gx-0 d-none d-lg-flex">
        <div class="col-lg-7 px-5 text-start">
          <div class="h-100 d-inline-flex align-items-center py-3 me-4">
            <small class="fa fa-map-marker-alt text-primary me-2"></small>
            <small>123 Street, New York, USA</small>
          </div>
          <div class="h-100 d-inline-flex align-items-center py-3">
            <small class="far fa-clock text-primary me-2"></small>
            <small>Mon - Fri : 08.30 AM - 17.00 PM</small>
          </div>
        </div>
        <div class="col-lg-5 px-5 text-end">
          <div class="h-100 d-inline-flex align-items-center py-3 me-4">
            <small class="fa fa-phone-alt text-primary me-2"></small>
            <small>02-119-5300</small>
          </div>
          <div class="h-100 d-inline-flex align-items-center">
            <a class="btn btn-sm-square bg-white text-primary me-1" href="https://www.facebook.com/Wisepaqbusiness/"
              ><i class="fab fa-facebook-f"></i
            ></a>
            <a class="btn btn-sm-square bg-white text-primary me-1" href="https://x.com/Wisepaq"
              ><i class="fab fa-twitter"></i
            ></a>
            <a class="btn btn-sm-square bg-white text-primary me-1" href=""
              ><i class="fab fa-linkedin-in"></i
            ></a>
            <a class="btn btn-sm-square bg-white text-primary me-0" href=""
              ><i class="fab fa-instagram"></i
            ></a>
          </div>
        </div>
      </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <!--<div id="navbar"></div>-->
    
    
    
     <!-- Navbar Start -->
               
       
<!--<nav
      class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-lg-0 px-4 px-lg-5 wow fadeIn"
      data-wow-delay="0.1s"
    >
      <a href="index.html" class="navbar-brand p-0">
        <img class="img-fluid me-3" src="img/icon/Logowisepaq.png" alt="Icon" />
        <h1 class="m-0 text-primary">WISEPAQ</h1>
      </a>
      <button
        type="button"
        class="navbar-toggler"
        data-bs-toggle="collapse"
        data-bs-target="#navbarCollapse"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse py-4 py-lg-0" id="navbarCollapse">
        <div class="navbar-nav ms-auto">
          <a href="index.html" class="nav-item nav-link">Home</a>
          <a href="about.html" class="nav-item nav-link">About</a>
          <a href="service.html" class="nav-item nav-link">Services</a>
          <div class="nav-item dropdown">
            <a
              href="#"
              class="nav-link dropdown-toggle"
              data-bs-toggle="dropdown"
              >Pages</a
            >
            <div class="dropdown-menu rounded-0 rounded-bottom m-0">
              <a href="animal.html" class="dropdown-item">Our Animals</a>
              <a href="membership.html" class="dropdown-item">Membership</a>
              <a href="visiting.html" class="dropdown-item">Visiting Hours</a>
              <a href="testimonial.html" class="dropdown-item ">Testimonial</a>
              <a href="404.html" class="dropdown-item">404 Page</a>
            </div>
          </div>
          <a href="contact.html" class="nav-item nav-link">Contact</a>
        </div>
        <a href="" class="btn btn-primary"
          >Buy Ticket<i class="fa fa-arrow-right ms-3"></i
        ></a>
      </div>
    </nav>

            </div>
             <a href="" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Get A Quote<i class="fa fa-arrow-right ms-3"></i></a> 
        </div>
    </nav>-->
    <!-- Navbar End -->
     <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 "><img src="img/wisepaq.jpg" alt="" width="60" height="60" style="margin-right: 5px;">WISEPAQ</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <?php
            $query = "SELECT * FROM menu1";
            $fetch_data = mysqli_query($connection, $query);

            if (mysqli_num_rows($fetch_data) == 0) {
                //echo "<h1 class='text-center'>No content Found</h1>";
            } else {
                while ($Row = mysqli_fetch_assoc($fetch_data)) {
                    
                    $menu_id = $Row['testm1'];
                    $menu_title = $Row['name'];
                    $link = $Row['link'];
           ?>
                
                    <div class="nav-item dropdown">       
                   <a href="<?php echo $link; ?>" class="nav-item nav-link active"><?php echo $menu_title;  ?></a>
              
            <?php

                        $query_sub = "SELECT * FROM menus1 where testm1 = $menu_id";
                        $fetch_data_sub = mysqli_query($connection, $query_sub);

                        if (mysqli_num_rows($fetch_data_sub) == 0) {
                            //echo "<h1 class='text-center'>No content Found</h1>";
                        } else {
                       ?>     
                              <div class="dropdown-menu fade-up m-0">
                      <?php       
                            while ($Row_sub = mysqli_fetch_assoc($fetch_data_sub)) {
                                $menu_title_sub = $Row_sub['name1'];
                                $link_sub = $Row_sub['link1'];
                  ?>
                                    <a href="<?php echo $link_sub;  ?>" class="dropdown-item"><?php echo $menu_title_sub  ?></a>
                            <?php 
                              }
                          } ?>                 
                 </div>    
                     </div>         
            <?php 
                }
            } ?>

            <!-- <a href="" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Get A Quote<i class="fa fa-arrow-right ms-3"></i></a> -->
        </div>
       </div>        
    </nav>
    <!-- Navbar End -->