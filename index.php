<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />

  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <title>Yayasan Dian Mandiri</title>
  <meta content="author" name="Tri Maryanto" />
  <meta content="email" name="triemaryanto93@gmail.com" />

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon" />
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet" />
  <!-- slider -->
  <link rel="stylesheet" href="assets/css/style2.css">
  <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"> -->
  <!-- endslider -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
  <!-- =======================================================
  * Template Name: Tempo - v4.10.0
  * Template URL: https://bootstrapmade.com/tempo-free-onepage-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <style>
    .hidden {
      opacity: 0;
    }

    .visible {
      opacity: 1;
      transition: opacity 1s ease-out;
    }
  </style>

</head>

<body>
  <!-- ======= Header ======= -->
  <?php include "header.php"; ?>
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <h3>Welcome to <strong>Dian Mandiri</strong></h3>
      <h1>Assist Through Action</h1>
      <h2>
        Dian Mandiri (DIMAN) Foundation was established in 1998 with a
        strong commitment to reduce poverty in Indonesia through
        holistic Micro Enterprise Development (MED).
      </h2>
      <a href="#about" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section>
  <!-- End Hero -->

  <main id="main">
    <!-- ======= About Section ======= -->
    <?php include "about.php"; ?>
    <!-- End About Section -->
    <!-- ======= Program Section ======= -->
    <?php include "program.php"; ?>
    <!-- End Program Section -->
    <!-- reward -->
    <?php include "reward.php"; ?>
    <!-- end reward -->
    <!-- ======= Team Section ======= -->
    <?php include "team.php"; ?>
    <!-- End Team Section -->
    <!-- ======= media Section ======= -->
    <?php include "media.php"; ?>
    <!-- Media news Section -->
    <!-- ======= sertifikat Section ======= -->
    <?php include "figures.php"; ?>
    <!-- End sertifikat Section -->
    <!-- ======= sertifikat Section ======= -->
    <?php include "sertifikat.php"; ?>
    <!-- End sertifikat Section -->
    <!-- affilations -->
    <?php include "affilations.php"; ?>
    <!-- end affilations -->
    <?php include "donate.php"; ?>
    <!-- ======= Contact Section ======= -->
    <?php include "contact.php"; ?>
    <!-- End Contact Section -->
  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">


    <div class="container d-md-flex py-4">
      <div class="me-md-auto text-center text-md-start">
        <div class="credits">
          &copy; Copyright <span><strong>Dian Mandiri</strong></span> @2023. All Rights Reserved
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="https://facebook.com/dimanfoundation" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://instagram.com/dimanfoundation" class="instagram"><i class="bx bxl-instagram"></i></a>
      </div>
    </div>
  </footer>
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <!-- slider js -->
  <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="assets/js/script.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
  <script type="text/javascript">
    window.addEventListener("load", function() {
      baguetteBox.run(".gallery");
      baguetteBox.run(".figure");
    });

    function googleTranslateElementInit() {
      new google.translate.TranslateElement({
        defaultLanguage: 'en',
        pageLanguage: 'en',
        includedLanguages: 'en,id,ja,zh-CN,zh-TW',
        layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
        multilanguagePage: true,
      }, 'google_translate_element');
    }
  </script>
  <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</body>

</html>