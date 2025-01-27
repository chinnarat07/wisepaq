<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Zoofari - Zoo & Safari Park Website Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="" name="keywords" />
  <meta content="" name="description" />

  <!-- Favicon -->
  <link href="img/favicon.ico" rel="icon" />

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Quicksand:wght@600;700&display=swap"
    rel="stylesheet" />

  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

  <!-- Libraries Stylesheet -->
  <link href="lib/animate/animate.min.css" rel="stylesheet" />
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet" />
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

  <!-- Customized Bootstrap Stylesheet -->
  <link href="css/bootstrap.min.css" rel="stylesheet" />

  <!-- Template Stylesheet -->
  <link href="css/style.css" rel="stylesheet" />
</head>


<!-- Spinner Start -->


<!-- Navbar Start -->
<?php
include "includes/db.php";
/* Page Header and navigation */
//=include "includes/header.php";
//=include "includes/navigation.php";
?>


<body>
  <?php include("./includes/header.php") ?>
  <!-- Navbar End -->

  <!-- Page Header Start -->
  <div class="container-fluid header-bg py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
      <h1 class="display-4 text-white mb-3 animated slideInDown">About Us</h1>
      <nav aria-label="breadcrumb animated slideInDown">
        <ol class="breadcrumb mb-0">
          <li class="breadcrumb-item">
            <a class="text-white" href="#">Home</a>
          </li>
          <li class="breadcrumb-item">
            <a class="text-white" href="#">Pages</a>
          </li>
          <li class="breadcrumb-item text-primary active" aria-current="page">
            About Us
          </li>
        </ol>
      </nav>
    </div>
  </div>
  <!-- Page Header End -->

  <!-- About Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="row g-5">
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
          <p><span class="text-primary me-2">#</span>Welcome To Zoofari</p>
          <h1 class="display-5 mb-4">
            Why You Should Visit
            <span class="text-primary">Zoofari</span> Park!
          </h1>
          <p class="mb-4">
            Stet no et lorem dolor et diam, amet duo ut dolore vero eos. No
            stet est diam rebum amet diam ipsum. Clita clita labore, dolor duo
            nonumy clita sit at, sed sit sanctus dolor eos.
          </p>
          <h5 class="mb-3">
            <i class="far fa-check-circle text-primary me-3"></i>Free Car
            Parking
          </h5>
          <h5 class="mb-3">
            <i class="far fa-check-circle text-primary me-3"></i>Natural
            Environment
          </h5>
          <h5 class="mb-3">
            <i class="far fa-check-circle text-primary me-3"></i>Professional
            Guide & Security
          </h5>
          <h5 class="mb-3">
            <i class="far fa-check-circle text-primary me-3"></i>World Best
            Animals
          </h5>
          <a class="btn btn-primary py-3 px-5 mt-3" href="">Read More</a>
        </div>
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
          <div class="img-border">
            <img class="img-fluid" src="img/about.jpg" alt="" />
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- About End -->

  <!-- Facts Start -->
  <div class="container-xxl bg-primary facts my-5 py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
      <div class="row g-4">
        <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
          <i class="fa fa-paw fa-3x text-primary mb-3"></i>
          <h1 class="text-white mb-2" data-toggle="counter-up">12345</h1>
          <p class="text-white mb-0">Total Animal</p>
        </div>
        <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
          <i class="fa fa-users fa-3x text-primary mb-3"></i>
          <h1 class="text-white mb-2" data-toggle="counter-up">12345</h1>
          <p class="text-white mb-0">Daily Vigitors</p>
        </div>
        <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
          <i class="fa fa-certificate fa-3x text-primary mb-3"></i>
          <h1 class="text-white mb-2" data-toggle="counter-up">12345</h1>
          <p class="text-white mb-0">Total Membership</p>
        </div>
        <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
          <i class="fa fa-shield-alt fa-3x text-primary mb-3"></i>
          <h1 class="text-white mb-2" data-toggle="counter-up">12345</h1>
          <p class="text-white mb-0">Save Wild Life</p>
        </div>
      </div>
    </div>
  </div>
  <!-- Facts End -->

  <!-- Testimonial Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <h1 class="display-5 text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
        Our Clients Say!
      </h1>
      <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
        <div class="testimonial-item text-center">
          <img class="img-fluid rounded-circle border border-2 p-2 mx-auto mb-4" src="img/testimonial-1.jpg"
            style="width: 100px; height: 100px" />
          <div class="testimonial-text rounded text-center p-4">
            <p>
              Clita clita tempor justo dolor ipsum amet kasd amet duo justo
              duo duo labore sed sed. Magna ut diam sit et amet stet eos sed
              clita erat magna elitr erat sit sit erat at rebum justo sea
              clita.
            </p>
            <h5 class="mb-1">Patient Name</h5>
            <span class="fst-italic">Profession</span>
          </div>
        </div>
        <div class="testimonial-item text-center">
          <img class="img-fluid rounded-circle border border-2 p-2 mx-auto mb-4" src="img/testimonial-2.jpg"
            style="width: 100px; height: 100px" />
          <div class="testimonial-text rounded text-center p-4">
            <p>
              Clita clita tempor justo dolor ipsum amet kasd amet duo justo
              duo duo labore sed sed. Magna ut diam sit et amet stet eos sed
              clita erat magna elitr erat sit sit erat at rebum justo sea
              clita.
            </p>
            <h5 class="mb-1">Patient Name</h5>
            <span class="fst-italic">Profession</span>
          </div>
        </div>
        <div class="testimonial-item text-center">
          <img class="img-fluid rounded-circle border border-2 p-2 mx-auto mb-4" src="img/testimonial-3.jpg"
            style="width: 100px; height: 100px" />
          <div class="testimonial-text rounded text-center p-4">
            <p>
              Clita clita tempor justo dolor ipsum amet kasd amet duo justo
              duo duo labore sed sed. Magna ut diam sit et amet stet eos sed
              clita erat magna elitr erat sit sit erat at rebum justo sea
              clita.
            </p>
            <h5 class="mb-1">Patient Name</h5>
            <span class="fst-italic">Profession</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Testimonial End -->

  <!-- Footer Start -->
  <?php include("./includes/footer.php") ?>
  <!-- Footer End -->

  <!-- Back to Top -->
  <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

  <!-- Template Javascript -->
  <script src="js/main.js"></script>
</body>

</html>