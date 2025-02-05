<!-- Start Change lang -->
<?php
session_start();
if (isset($_GET['lang'])) {
  $_SESSION['lang'] = $_GET['lang'];
} elseif (!isset($_SESSION['lang'])) {
  $_SESSION['lang'] = 'en';
}
include('lang_' . $_SESSION['lang'] . '.php');
include "./includes/db.php";
?>
<!-- End Change lang -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <?php
  $current_page = basename($_SERVER['PHP_SELF']);
  $query_title = "SELECT * FROM tbl_menu";
  $fetch_data = mysqli_query($connection, $query_title);

  // ค่าเริ่มต้น
  $page_title = "WISEPAQ | วางระบบ Network | Thailand";
  if (mysqli_num_rows($fetch_data) > 0) {
    while ($Row_menu = mysqli_fetch_assoc($fetch_data)) {
      $menu_id = $Row_menu['id_menu'];
      $link = basename($Row_menu['link']); // ใช้ basename() เพื่อลดปัญหาพาธ
      $menu_title = ($_SESSION['lang'] == 'en') ? $Row_menu['name'] . " | WISEPAQ" : $Row_menu['menuTH'] . " | WISEPAQ";

      // ตรวจสอบว่าหน้าปัจจุบันตรงกับเมนูหลักหรือไม่
      if ($current_page == "index.php") {
        $page_title = "WISEPAQ | วางระบบ Network | Thailand";
      } elseif ($current_page == $link) {
        $page_title = $menu_title;
      }

      // ดึงเมนูย่อย
      $query_sub = "SELECT * FROM tbl_menu_dd WHERE id_menu = $menu_id";
      $fetch_data_sub = mysqli_query($connection, $query_sub);

      if (mysqli_num_rows($fetch_data_sub) > 0) {
        while ($Row_sub = mysqli_fetch_assoc($fetch_data_sub)) {
          $link_sub = basename($Row_sub['link_dd']);
          $menu_title_sub = ($_SESSION['lang'] == 'en') ? $Row_sub['name_dd'] . " | WISEPAQ" : $Row_sub['menuTH_dd'] . " | WISEPAQ";

          // ตรวจสอบว่าหน้าปัจจุบันตรงกับเมนูย่อยหรือไม่
          if ($current_page == $link_sub) {
            $page_title = $menu_title_sub;
          }
        }
      }
    }
  }

  echo "<title>$page_title</title>";
  ?>

  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="img/wisepaq.jpg" rel="icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">


  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  


  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
  <!-- <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/bootstrap.min.css"> -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="/js/main.js"></script>

  <!-- =======================================================
  * Template Name: iLanding
  * Template URL: https://bootstrapmade.com/ilanding-bootstrap-landing-page-template/
  * Updated: Nov 12 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="light-background">
  <!-- Topbar Start -->
  <div class="container-fluid p-0 wow fadeIn" style="background-color:#ebebeb;" data-wow-delay="0.1s">
    <div class="row gx-0 d-none d-lg-flex">
      <div class="col-lg-7 px-5 text-start">
        <div class="h-100 d-inline-flex align-items-center py-3 me-4">
          <small class="fa fa-map-marker-alt text-primary me-2"></small>
          <small><?php echo constant('address') ?></small>
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
        <div class="h-100 d-inline-flex align-items-center ">
          <a class="btn btn-sm-square bg-white text-primary me-1" href="https://www.facebook.com/Wisepaqbusiness/" target="_blank"><i class="bi bi-facebook "></i></a>
          <a class="btn btn-sm-square bg-white text-primary me-1" href="https://x.com/Wisepaq" target="_blank"><i class="bi bi-twitter-x " ></i></a>
          <a class="btn btn-sm-square bg-white text-primary me-1" href="https://youtube.com/@wisepaq-business?feature=shared" target="_blank"><i class="bi bi-youtube"></i></a>
          <a class="btn btn-sm-square bg-white text-primary me-0" href="https://www.instagram.com/peraphol/" target="_blank"><i class="bi bi-instagram"></i></a>
        </div>
      </div>
    </div>
  </div>
  <!-- Topbar End -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top shadow-sm rounded-4 p-0 ">
    <a href="index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
      <h2 class="m-0 "><img src="img/wisepaq.jpg" alt="" width="60" height="60" style="margin-right: 5px;">WISEPAQ</h2>
    </a>
    <button class="navbar-toggler me-4" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <div class="navbar-nav ms-auto p-4 p-lg-0">
        <?php
        $current_page = basename($_SERVER['PHP_SELF']);
        $query = "SELECT * FROM tbl_menu";
        $fetch_data = mysqli_query($connection, $query);

        if (mysqli_num_rows($fetch_data) == 0) {
          //echo "<h1 class='text-center'>No content Found</h1>";
        } else {
          while ($Row_menu = mysqli_fetch_assoc($fetch_data)) {
            $menu_id = $Row_menu['id_menu'];
            // $menu_title = ($_SESSION['lang'] == 'en') ? $Row_menu['menu_name'] : $Row_menu['menu_name_thai'];
            $link = $Row_menu['link'];
            if ($_SESSION['lang'] == 'en') {
              $menu_title = $Row_menu['name'];
            } else {
              $menu_title = $Row_menu['menuTH'];
            }
            $query_sub = "SELECT * FROM tbl_menu_dd WHERE id_menu = $menu_id";
            $fetch_data_sub = mysqli_query($connection, $query_sub);

            if (mysqli_num_rows($fetch_data_sub) == 0) {
              // ไม่มีเมนูย่อย
        ?>
              <a href="<?php echo $link; ?>" class="nav-item nav-link  <?php echo ($current_page == basename($link)) ? 'active' : ''; ?>">
                <?php echo $menu_title; ?>
              </a>
            <?php
            } else {
              // มีเมนูย่อย
            ?>
              <div class="nav-item dropdown">
                <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                  <?php echo $menu_title; ?>
                </a>
                <div class="dropdown-menu  m-0 ps-2 py-0">
                  <?php
                  while ($Row_sub = mysqli_fetch_assoc($fetch_data_sub)) {
                    // $menu_title_sub = ($_SESSION['lang'] == 'en') ? $Row_sub['menu_subname'] : $Row_sub['menu_subname_thai'];
                    $link_sub = $Row_sub['link_dd'];
                    if ($_SESSION['lang'] == 'en') {
                      $menu_title_sub = $Row_sub['name_dd'];
                    } else {
                      $menu_title_sub = $Row_sub['menuTH_dd'];
                    }
                  ?>
                    <a href="<?php echo $link_sub; ?>" class="dropdown-item text-uppercase  text-dark  py-2   <?php echo ($current_page == basename($link_sub)) ? 'active' : ''; ?>">
                      <?php echo $menu_title_sub; ?>
                    </a>
                  <?php
                  }
                  ?>
                </div>
              </div>
        <?php
            }
          }
        }
        ?>
      <!-- Language selector -->
      <!-- <li class="nav-item">
                  <select id="select_lang" onchange="change_lang(this.value)" class="form-select form-select-sm" style="font-size: 10px;">
                    <option value="" selected disabled hidden><?php echo constant("web_option_select"); ?></option>
                    <option value="th">ไทย</option>
                    <option value="en">English</option>
                  </select>
                </li> -->
      <!-- test -->
      <div class="mobile-lang ">
        <div class="btn-group btn-group-toggle me-4 nav-mobile-lang w-100" data-toggle="buttons">
          <label class="btn btn-primary text-light ps-0 fs-6  <?php if ($_SESSION['lang'] == 'th') {
                                                                echo 'active';
                                                              } ?>">
            <input type="radio" style="appearance: none;" id='select_lang' onchange="change_lang(this.value)" autocomplete="off" value="th">
            <img src="img/flag.png" alt="TH Flag" style="width: 23px; height: 23px; margin-left: 5px; object-fit:cover;"> TH
          </label>
          <label class="btn btn-primary text-light ps-1 fs-6  <?php if ($_SESSION['lang'] == 'en') {
                                                                echo 'active';
                                                              } ?>">
            <input type="radio" style="appearance: none;" id='select_lang' onchange="change_lang(this.value)" autocomplete="off" value="en">
            <img src="img/united-kingdom.png" alt="EN Flag" style="width: 23px; height: 23px; margin-left: 0px; object-fit:cover;"> EN
          </label>
        </div>
      </div>
      <div class="pc-lang my-auto me-4">
        <div class="text-box" id="dropdown">
          <span class="text-content">
            <img id="selected-flag" src="img/flag.png" alt="TH Flag" class="lang-select">
            <span id="current-language">TH</span>
          </span>
          <i class="arrow"></i>
          <ul class="dropdown-menu-lang">
            <li data-lang="th" data-flag="img/flag.png">
              <img src="img/flag.png" alt="TH Flag" class="lang-option">
              <span>TH</span>
            </li>
            <li data-lang="en" data-flag="img/united-kingdom.png">
              <img src="img/united-kingdom.png" alt="EN Flag" class="lang-option">
              <span>EN</span>
            </li>
          </ul>
        </div>
      </div>
      </div>                                                        
    </div>
  </nav>
  <!-- End Navber -->
  <script>
    $(document).ready(function() {
      $(".text-box").click(function() {
        const $dropdownMenu = $(".dropdown-menu-lang");
        const $arrow = $(".arrow");
        const $textBox = $(".text-box");

        if ($dropdownMenu.is(":visible")) {
          $dropdownMenu.slideUp("fast");
          $arrow.css("transform", "rotate(-45deg)");
          $textBox.css("border", "2px solid rgb(214, 208, 208)");
        } else {
          $dropdownMenu.slideDown("fast");
          $arrow.css("transform", "rotate(135deg)");
          $textBox.css("border", "2px solid rgb(31, 30, 30)");
        }
      });

      $(".dropdown-menu-lang li").click(function(e) {
        e.stopPropagation(); // ป้องกันไม่ให้ dropdown ปิดตัวเอง
        let lang = $(this).attr("data-lang");
        let flagSrc = $(this).attr("data-flag");

        $("#current-language").text(lang.toUpperCase());
        $("#selected-flag").attr("src", flagSrc);

        $(".dropdown-menu-lang").slideUp("fast"); // ซ่อนเมนูหลังเลือก
        $(".arrow").css("transform", "rotate(-45deg)");
        $(".text-box").css("border", "2px solid rgb(214, 208, 208)");

        change_lang(lang);
      });

      function change_lang(value) {
        localStorage.setItem("lang", value);
        window.location.replace("?lang=" + value);
      }

      // โหลดค่าภาษาที่บันทึกไว้ใน localStorage
      let savedLang = localStorage.getItem("lang") || "th";
      $("#current-language").text(savedLang.toUpperCase());
      $("#selected-flag").attr("src", savedLang === "th" ? "img/flag.png" : "img/united-kingdom.png");
    });
  </script>

  <script>
    function click_menu(element) {
      // ลบคลาส 'active' จากทุกเมนู
      const menuItems = document.querySelectorAll('.menu-item');
      menuItems.forEach(item => item.classList.remove('active'));

      // เพิ่มคลาส 'active' ให้กับเมนูที่ถูกคลิก
      element.classList.add('active');
    }
  </script>