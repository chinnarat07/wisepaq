<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index - iLanding Bootstrap Template</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
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

<!-- Start Change lang -->
<?php
session_start();
if (isset($_GET['lang'])) {
  $_SESSION['lang'] = $_GET['lang'];
} elseif (!isset($_SESSION['lang'])) {
  $_SESSION['lang'] = 'en';
}
include('lang_' . $_SESSION['lang'] . '.php');
?>
<!-- End Change lang -->

<!-- Topbar Start -->
<div class="container-fluid bg-light p-0 wow fadeIn" data-wow-delay="0.1s">
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
        <a class="btn btn-sm-square bg-white text-primary me-1" href="https://www.facebook.com/Wisepaqbusiness/"><i class="bi bi-facebook"></i></a>
        <a class="btn btn-sm-square bg-white text-primary me-1" href="https://x.com/Wisepaq"><i class="bi bi-twitter-x"></i></a>
        <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="bi bi-line"></i></a>
        <a class="btn btn-sm-square bg-white text-primary me-0" href=""><i class="bi bi-instagram"></i></a>
      </div>
    </div>
  </div>
</div>
<!-- Topbar End -->

<!-- <style>
  .navbar {
    max-width: 95%;
    /* กำหนดความกว้างสูงสุด */
    height: 90px;
    margin: 0 auto;
    /* จัดตำแหน่งให้อยู่กลาง */
  }
</style> -->

<nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top shadow-sm rounded-4 p-0 ">
  <div class="container" style="width: 100%;"> <!-- container ปกติ -->
    <a href="index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
      <h2 class="m-0"><img src="img/wisepaq.jpg" alt="" width="60" height="60" class="me-2">WISEPAQ</h2>
    </a>
    <button class="navbar-toggler me-4" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav ms-auto p-4 p-lg-0">
        <?php
        // Query to fetch menu data
        $query = "SELECT * FROM menu";
        $fetch_data = mysqli_query($connection, $query);

        if (mysqli_num_rows($fetch_data) > 0) {
          while ($Row = mysqli_fetch_assoc($fetch_data)) {
            $menu_id = $Row['id_menu'];
            $menu_title = ($_SESSION['lang'] == 'en') ? $Row['name'] : $Row['menuTH'];
            $link = $Row['link'];

            // Query to fetch submenu data
            $query_sub = "SELECT * FROM menu_dd WHERE id_menu = $menu_id";
            $fetch_data_sub = mysqli_query($connection, $query_sub);

            // Check if submenu exists
            if (mysqli_num_rows($fetch_data_sub) == 0) {
        ?>
              <!-- Regular menu item -->
              <li class="nav-item">
                <a href="<?php echo $link; ?>" class="nav-link"><?php echo $menu_title; ?></a>
              </li>
            <?php
            } else {
            ?>
              <!-- Dropdown menu item -->
              <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-expanded="false"><?php echo $menu_title; ?></a>
                <ul class="dropdown-menu">
                  <?php
                  // Fetch and display submenu items
                  while ($Row_sub = mysqli_fetch_assoc($fetch_data_sub)) {
                    $menu_title_sub = ($_SESSION['lang'] == 'en') ? $Row_sub['name_dd'] : $Row_sub['menuTH_dd'];
                    $link_sub = $Row_sub['link_dd'];
                  ?>
                    <li><a href="<?php echo $link_sub; ?>" class="dropdown-item"><?php echo $menu_title_sub; ?></a></li>
                  <?php } ?>
                </ul>
              </li>

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

        <div class="pc-lang">
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
      </ul>
    </div>
  </div>
</nav>


<!-- End Navber -->

<!--<script>
  (function() {
   // jQuery สำหรับการคลิกที่ .text-box
   $(".text-box").click(function() {
    // เมื่อคลิกครั้งแรกเพิ่ม class 'active' และเปลี่ยนกรอบเป็นสีโฟกัส
    if (!$(this).hasClass("active")) {
        $(this).addClass("active");
        $(this).css("border", "2px solid rgb(31, 30, 30)");
    } else {
        // ถ้ามี class 'active' อยู่แล้ว ให้สลับไปใช้กรอบปกติ
        $(this).removeClass("active");
        $(this).css("border", "2px solid rgb(214, 208, 208)");
    }
  });
    const $dropdown = $('#dropdown');
    const $arrow = $dropdown.find('.arrow');
    const $dropdownMenu = $dropdown.find('.dropdown-menu-lang');
    const $textBox = $dropdown.find('.text-box'); // เลือก .text-box
  
    // เปิด/ปิด Dropdown ด้วย fade
    $dropdown.on('click', function () {
        const isOpen = $dropdownMenu.is(':visible');
        
        // เปลี่ยนสถานะเปิด/ปิดเมนูด้วย fade
        if (isOpen) {
            $dropdownMenu.slideUp('fast'); // ปิด dropdown
            $arrow.css('transform', 'rotate(-45deg)'); // ชี้ลง
        } else {
            $dropdownMenu.slideDown('fast'); // เปิด dropdown
            $arrow.css('transform', 'rotate(135deg)'); // ชี้ขึ้น
        }
  
        // เมื่อคลิกเปิดให้กรอบเป็นสีดำ
        if (!isOpen) {
            $textBox.css('border', '2px solid rgb(31, 30, 30)'); // กรอบสีดำเมื่อเปิด
        } else {
            $textBox.css('border', '2px solid rgb(214, 208, 208)'); // รีเซ็ตกรอบสีเดิมเมื่อปิด
        }
  
    // เมื่อคลิกที่ตัวเลือกภาษา
    const languageItems = dropdownMenu.querySelectorAll('li');
    languageItems.forEach(item => {
        item.addEventListener('click', function (e) {
            e.stopPropagation(); // หยุดการส่งต่อเหตุการณ์คลิกไปยังตัวแม่
  
            const language = this.getAttribute('data-lang');
            const flagSrc = this.getAttribute('data-flag');
            
            
            
            // เปลี่ยนข้อความในกล่อง
            selectedLanguage.textContent = language;
            
            // เปลี่ยนรูปธงในกล่อง
            selectedFlag.src = flagSrc;
            
            // ปิดเมนู dropdown เมื่อเลือกภาษา
            dropdownMenu.style.display = 'none';
            arrow.style.transform = 'rotate(-45deg)'; // หมุนลูกศรกลับ
            
            // รีเซ็ตกรอบให้กลับเป็นสีเดิม
            textBox.style.border = "2px solid rgb(214, 208, 208)"; // กรอบสีเดิม
        });
    });
  });
});
</script>

<script>
        // ฟังก์ชันในการเปลี่ยนภาษา
        function change_lang(value) {
            // เก็บข้อมูลภาษาที่เลือกลงใน localStorage
            localStorage.setItem("lang", value);

            // เปลี่ยน URL เพื่อให้ระบบ backend รู้
            window.location.replace("?lang=" + value);
        }

        // ฟังก์ชันในการโหลดภาษาเมื่อโหลดหน้าใหม่
        window.onload = function() {
            // ตรวจสอบว่าใน localStorage มีการบันทึกภาษาไว้หรือไม่
            const lang = localStorage.getItem("lang") || 'en'; // ใช้ 'th' เป็นค่าเริ่มต้น

            // อัปเดตข้อความและธงตามภาษาที่เลือก
            const currentLanguage = document.getElementById("current-language");
            const selectedFlag = document.getElementById("selected-flag");

            if (lang === "th") {
                currentLanguage.textContent = "TH";
                selectedFlag.src = "img/flag.png";
                selectedFlag.alt = "TH Flag";
            } else if (lang === "en") {
                currentLanguage.textContent = "EN";
                selectedFlag.src = "img/united-kingdom.png";
                selectedFlag.alt = "EN Flag";
            } 
        }
    </script>-->
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