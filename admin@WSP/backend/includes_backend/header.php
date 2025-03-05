<<<<<<< HEAD
<?php
ob_start();
include '../../includes/db.php';
session_start();
if (!isset($_SESSION['username'])) {
  header("Location: ../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <!-- <script src="./js/ckeditor.js"></script> -->
  <script src="../ckeditor/ckeditor.js"></script>
  <script src="https://www.gstatic.com/charts/loader.js">
  </script>


  <title>WISEPAQ | วางระบบ network | Thailand</title>

  <!-- Favicon -->
  <link href="../../img/wisepaq.jpg" rel="icon">
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">



  <!-- Vendor CSS Files -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="../vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="../vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- data table -->
  <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  <script src="https://cdn.datatables.net/2.2.2/js/dataTables.js"></script>
  <script src="https://cdn.datatables.net/2.2.2/js/dataTables.jqueryui.js"></script>
  <script src="https://cdn.datatables.net/buttons/3.2.2/js/dataTables.buttons.js"></script>
  <script src="https://cdn.datatables.net/buttons/3.2.2/js/buttons.jqueryui.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/3.2.2/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/3.2.2/js/buttons.print.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/3.2.2/js/buttons.colVis.min.js"></script>

  <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/2.2.2/css/dataTables.jqueryui.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/3.2.2/css/buttons.jqueryui.css">


  <!-- Template Main CSS File -->
  <link href="../css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center" style="width: 11rem;">
        <span class="d-none d-lg-block">WISEPAQ</span>
        <sub class="fs-5" style="color:#578FCA;">Admin</sub>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->


    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">
        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0 " href="#" data-bs-toggle="dropdown">
            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center" style="background-color: #f0f0f0; width: 30px; height: 30px;">
              <i class="bi bi-person" style="font-size: 20px;"></i>
            </div>
            <span class="d-none d-md-block dropdown-toggle p-2 pe-4"><?php echo $_SESSION['username'] ?> </span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?php echo $_SESSION['username'] ?></h6>
              <span>Web Designer</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="profile.php">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <!-- <li>
      <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
        <i class="bi bi-gear"></i>
        <span>Account Settings</span>
      </a>
    </li>
    <li>
      <hr class="dropdown-divider">
    </li> -->
            <li>
              <a class="dropdown-item d-flex align-items-center" href="../includes_admin/logout.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->
=======
<?php
ob_start();
include '../../includes/db.php';
session_start();
if (!isset($_SESSION['username'])) {
  header("Location: ../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- <script src="./js/ckeditor.js"></script> -->
  <script src="../ckeditor/ckeditor.js"></script>
  <script src="https://www.gstatic.com/charts/loader.js">
  </script>


  <title>WISEPAQ | วางระบบ network | Thailand</title>

  <!-- Favicon -->
  <link href="../../img/wisepaq.jpg" rel="icon">

  <!-- Bootstrap Core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">


  <!-- Libraries Stylesheet -->
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Customized Bootstrap Stylesheet -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- glightbox -->
  <link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="css/sb-admin.css" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  <link
    rel="icon"
    href="assets/img/kaiadmin/favicon.ico"
    type="image/x-icon" />

  <!-- Fonts and icons -->
  <script src="assets/js/plugin/webfont/webfont.min.js"></script>
  <script>
    WebFont.load({
      google: {
        families: ["Public Sans:300,400,500,600,700"]
      },
      custom: {
        families: [
          "Font Awesome 5 Solid",
          "Font Awesome 5 Regular",
          "Font Awesome 5 Brands",
          "simple-line-icons",
        ],
        urls: ["assets/css/fonts.min.css"],
      },
      active: function() {
        sessionStorage.fonts = true;
      },
    });
  </script>

  <!-- CSS Files -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/plugins.min.css" />
  <link rel="stylesheet" href="assets/css/kaiadmin.min.css" />

  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link rel="stylesheet" href="assets/css/demo.css" />


  <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  <script src="https://cdn.datatables.net/2.2.2/js/dataTables.js"></script>
  <script src="https://cdn.datatables.net/2.2.2/js/dataTables.jqueryui.js"></script>
  <script src="https://cdn.datatables.net/buttons/3.2.2/js/dataTables.buttons.js"></script>
  <script src="https://cdn.datatables.net/buttons/3.2.2/js/buttons.jqueryui.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/3.2.2/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/3.2.2/js/buttons.print.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/3.2.2/js/buttons.colVis.min.js"></script>

  <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/2.2.2/css/dataTables.jqueryui.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/3.2.2/css/buttons.jqueryui.css">

</head>

<body>

  <!-- <div id="wrapper"> -->
>>>>>>> f210771355439f265820ae9777d49bf0dabfe4de
