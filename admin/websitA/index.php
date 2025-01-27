<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>WISEPAQ</title>
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


<?php
include "includes/db.php";
/* Page Header and navigation */
//=include "includes/header.php";
//=include "includes/navigation.php";
?>


<body>
  <?php include("./includes/header.php") ?>

  <!-- Header Start -->
  <div class="container-fluid bg-dark p-0 mb-5">
    <div class="row g-0 flex-column-reverse flex-lg-row">
      <div class="col-lg-6 p-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="header-bg h-100 d-flex flex-column justify-content-center p-5">
          <h1 class="display-4 text-light mb-5">
            Your Trusted Technology Partner
          </h1>
          <div class="d-flex align-items-center pt-4 animated slideInDown">
            <a href="" class="btn btn-primary py-sm-3 px-3 px-sm-5 me-5">Read More</a>
            <button type="button" class="btn-play" data-bs-toggle="modal"
              data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
              <span></span>
            </button>
            <h6 class="text-white m-0 ms-4 d-none d-sm-block">Watch Video</h6>
          </div>
        </div>
      </div>
      <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
        <div class="owl-carousel header-carousel">
          <div class="owl-carousel-item">
            <img class="img-fluid" src="img/ImgMain/IMGHome/show_1.jpg" alt="" />
          </div>
          <div class="owl-carousel-item">
            <img class="img-fluid" src="img/ImgMain/IMGHome/show_2.jpg" alt="" />
          </div>
          <div class="owl-carousel-item">
            <img class="img-fluid" src="img/ImgMain/IMGHome/show_3.jpg" alt="" />
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Header End -->

  <!-- Video Modal Start -->
  <div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content rounded-0">
        <div class="modal-header">
          <h3 class="modal-title" id="exampleModalLabel">Youtube Video</h3>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-- 16:9 aspect ratio -->
          <div class="ratio ratio-16x9">

            <iframe width="560" height="315"
              src="https://www.youtube.com/embed/_BhSz6qwMfI?si=uWwOnqTswed45_-Xautoplay=1&loop=1z"
              title="YouTube video player" frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
              referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
            </iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Video Modal End -->

  <!-- About Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="row g-5">
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
          <p><span class="text-primary me-2">#</span>Welcome To test</p>
          <h1 class="display-5 mb-4">
            WELCOME TO
            <span class="text-primary">WISEPAQ</span>
          </h1>
          <p class="mb-4">
            Welcome to Wisepaq, your trusted partner for all your technology needs.
            We specialize in providing top-notch technology, IT support, engineering, and outsource services to enhance
            your organization's success and productivity.
            With our tailored solutions, we ensure that your technology supports your business goals and growth.
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
            <img class="img-fluid" src="./img/ImgMain/IMGHome/pic2.avif" alt="" />
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

  <!-- Service Start -->
  <div class="container-xxl py-5">
    <div class="container py-5">
      <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="col-lg-6">
          <p><span class="text-primary me-2">#</span>Our test</p>
          <h1 class="display-5 mb-0">
            Our
            <span class="text-primary">Partner</span>
          </h1>
        </div>
        <div class="col-lg-6">
          <div class="bg-primary h-100 d-flex align-items-center py-4 px-4 px-sm-5">
            <i class="fa fa-3x fa-mobile-alt text-white"></i>
            <div class="ms-4">
              <p class="text-white mb-0">Call for more info</p>
              <h2 class="text-white mb-0">+012 345 6789</h2>
            </div>
          </div>
        </div>
      </div>
      <div class="row gy-5 gx-4">
        <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
          <img class="img-fluid mb-3" src="img/ImgMain/logopartner/arubag.png" alt="1" />
          <h5 class="mb-3">arubag</h5>
          <span>1</span>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
          <img class="img-fluid mb-3" src="img/ImgMain/logopartner/nutanixg.png" alt="Icon" />
          <h5 class="mb-3">Animal Photos</h5>
          <span>2</span>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
          <img class="img-fluid mb-3" src="img/ImgMain/logopartner/sophosg.png" alt="Icon" />
          <h5 class="mb-3">Guide Services</h5>
          <span>3</span>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
          <img class="img-fluid mb-3" src="img/ImgMain/logopartner/watchguardg.png" alt="Icon" />
          <h5 class="mb-3">Food & Beverages</h5>
          <span>4</span>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
          <img class="img-fluid mb-3" src="img/ImgMain/logopartner/VMware.png" alt="Icon" />
          <h5 class="mb-3">Zoo Shopping</h5>
          <span>5</span>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
          <img class="img-fluid mb-3" src="img/ImgMain/logopartner/wallix.png" alt="Icon" />
          <h5 class="mb-3">Free Hi Speed Wi-Fi</h5>
          <span>6</span>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
          <img class="img-fluid mb-3" src="img/ImgMain/logopartner/fortinet.png" alt="Icon" />
          <h5 class="mb-3">Play Ground</h5>
          <span>7</span>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
          <img class="img-fluid mb-3" src="img/ImgMain/logopartner/ruijie.png" alt="Icon" />
          <h5 class="mb-3">Rest House</h5>
          <span>8</span>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
          <img class="img-fluid mb-3" src="img/ImgMain/logopartner/sangforg.png" alt="Icon" />
          <h5 class="mb-3">Play Ground</h5>
          <span>9</span>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
          <img class="img-fluid mb-3" src="img/ImgMain/logopartner/hewlet pack enterprise.png" alt="Icon" />
          <h5 class="mb-3">Play Ground</h5>
          <span>10</span>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
          <img class="img-fluid mb-3" src="img/ImgMain/logopartner/veeamg.png" alt="Icon" />
          <h5 class="mb-3">Play Ground</h5>
          <span>11</span>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
          <img class="img-fluid mb-3" src="img/ImgMain/logopartner/ciscog.png" alt="Icon" />
          <h5 class="mb-3">Play Ground</h5>
          <span>12</span>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
          <img class="img-fluid mb-3" src="img/ImgMain/logopartner/kasperskyg.png" alt="Icon" />
          <h5 class="mb-3">Play Ground</h5>
          <span>13</span>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
          <img class="img-fluid mb-3" src="img/ImgMain/logopartner/pacific internet.png" alt="Icon" />
          <h5 class="mb-3">Play Ground</h5>
          <span>14</span>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
          <img class="img-fluid mb-3" src="img/ImgMain/logopartner/symantec.png" alt="Icon" />
          <h5 class="mb-3">Play Ground</h5>
          <span>15</span>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
          <img class="img-fluid mb-3" src="img/ImgMain/logopartner/solarwindg.png" alt="Icon" />
          <h5 class="mb-3">Play Ground</h5>
          <span>16</span>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
          <img class="img-fluid mb-3" src="img/ImgMain/logopartner/logitechg.png" alt="Icon" />
          <h5 class="mb-3">Play Ground</h5>
          <span>17</span>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
          <img class="img-fluid mb-3" src="img/ImgMain/logopartner/veritesg.png" alt="Icon" />
          <h5 class="mb-3">Play Ground</h5>
          <span>18</span>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
          <img class="img-fluid mb-3" src="img/ImgMain/logopartner/bitdefenderg.png" alt="Icon" />
          <h5 class="mb-3">Play Ground</h5>
          <span>19</span>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
          <img class="img-fluid mb-3" src="img/ImgMain/logopartner/extream partner network.png" alt="Icon" />
          <h5 class="mb-3">Play Ground</h5>
          <span>20</span>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
          <img class="img-fluid mb-3" src="img/ImgMain/logopartner/aisg.png" alt="Icon" />
          <h5 class="mb-3">Play Ground</h5>
          <span>21</span>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
          <img class="img-fluid mb-3" src="img/ImgMain/logopartner/grandstreamg.png" alt="Icon" />
          <h5 class="mb-3">Play Ground</h5>
          <span>22</span>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
          <img class="img-fluid mb-3" src="img/ImgMain/logopartner/symantec.png" alt="Icon" />
          <h5 class="mb-3">Play Ground</h5>
          <span>23</span>
        </div>

        <!-- Slider main container -->
        <?php include("./includes/indexSlide.php") ?>
        <!-- end slider -->

      </div>
    </div>
  </div>
  <!-- Service End -->

  <!-- Animal Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="row g-5 mb-5 align-items-end wow fadeInUp" data-wow-delay="0.1s">
        <div class="col-lg-6">
          <p><span class="text-primary me-2">#</span>Our Animals</p>
          <h1 class="display-5 mb-0">
            Let`s See Our <span class="text-primary">Zoofari</span> Awsome
            Animals
          </h1>
        </div>
        <div class="col-lg-6 text-lg-end">
          <a class="btn btn-primary py-3 px-5" href="">Explore More Animals</a>
        </div>
      </div>
      <div class="row g-4">
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
          <div class="row g-4">
            <div class="col-12">
              <a class="animal-item" href="img/ImgMain/SL1.jpg" data-lightbox="animal">
                <div class="position-relative">
                  <img class="img-fluid" src="img/ImgMain/SL1.jpg" alt="" />
                  <div class="animal-text p-4">
                    <p class="text-white small text-uppercase mb-0">Animal</p>
                    <h5 class="text-white mb-0">Elephant</h5>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-12">
              <a class="animal-item" href="img/animal-lg-1.jpg" data-lightbox="animal">
                <div class="position-relative">
                  <img class="img-fluid" src="img/animal-lg-1.jpg" alt="" />
                  <div class="animal-text p-4">
                    <p class="text-white small text-uppercase mb-0">Animal</p>
                    <h5 class="text-white mb-0">Elephant</h5>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
          <div class="row g-4">
            <div class="col-12">
              <a class="animal-item" href="img/ImgMain/SL2.jpg" data-lightbox="animal">
                <div class="position-relative">
                  <img class="img-fluid" src="img/ImgMain/SL2.jpg" alt="" />
                  <div class="animal-text p-4">
                    <p class="text-white small text-uppercase mb-0">Animal</p>
                    <h5 class="text-white mb-0">Elephant</h5>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-12">
              <a class="animal-item" href="img/ImgMain/SL3.jpg" data-lightbox="animal">
                <div class="position-relative">
                  <img class="img-fluid" src="img/ImgMain/SL3.jpg" alt="" />
                  <div class="animal-text p-4">
                    <p class="text-white small text-uppercase mb-0">Animal</p>
                    <h5 class="text-white mb-0">Elephant</h5>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
          <div class="row g-4">
            <div class="col-12">
              <a class="animal-item" href="img/animal-md-3.jpg" data-lightbox="animal">
                <div class="position-relative">
                  <img class="img-fluid" src="img/animal-md-3.jpg" alt="" />
                  <div class="animal-text p-4">
                    <p class="text-white small text-uppercase mb-0">Animal</p>
                    <h5 class="text-white mb-0">Elephant</h5>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-12">
              <a class="animal-item" href="img/animal-lg-3.jpg" data-lightbox="animal">
                <div class="position-relative">
                  <img class="img-fluid" src="img/animal-lg-3.jpg" alt="" />
                  <div class="animal-text p-4">
                    <p class="text-white small text-uppercase mb-0">Animal</p>
                    <h5 class="text-white mb-0">Elephant</h5>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Animal End -->

  <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
    <div class="owl-carousel header-carousel">
      <div class="owl-carousel-item">
        <img class="img-fluid" src="img/ImgMain/IMGHome/show_1.jpg" alt="" />
      </div>
      <div class="owl-carousel-item">
        <img class="img-fluid" src="img/ImgMain/IMGHome/show_2.jpg" alt="" />
      </div>
      <div class="owl-carousel-item">
        <img class="img-fluid" src="img/ImgMain/IMGHome/show_3.jpg" alt="" />
      </div>
    </div>
  </div>

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
  <a href="c" class="c btn-primary btn-lg-square back-to-top"><i class="
        -up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>

  <!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="js/scriptMain.js"></script>-->


  <!-- Template Javascript -->

  <script src="js/main.js"></script>
</body>

</html>