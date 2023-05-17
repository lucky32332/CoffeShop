<?php if( !defined('CMS') ) exit(); ?>

<?php
require_once 'head-html.php';
?>
<body>
    <?php require_once 'header-html.php'; ?>

    <main id="main">

    <!-- ======= Blog Section ======= -->
    <section class="inner-page">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Вход</h2>
        </div>

        <div class="col-lg-12">
            <form action="login.php" method="post" role="form" class="php-email-formmm">
            <input type="hidden" name="login" value="0" id="login">
            <input type="hidden" name="csrf_token" value="<?=$_SESSION['csrf_token'] ?>" >
              <div class="row">
                <div class="col-md-6 form-group mt-3 mt-md-2">
                  <input type="text" class="form-control" name="email" id="email" placeholder="Вашият Email" required>
                </div>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-2">
                <input type="password" class="form-control" name="password" id="password" placeholder="Парола" required>
              </div>
              <div class="text-left mt-3"><button type="submit" onclick="document.getElementById('login').value=1;">Вход</button></div>
            </form>
        </div><!-- End Contact Form -->


      </div>
    </section><!-- End Inner Page -->

  </main><!-- End #main -->

  <?php require_once 'footer-html.php'; ?>

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>