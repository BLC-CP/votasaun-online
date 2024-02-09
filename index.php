<!-- HEADER -->
<?php include 'template/header.php' ;?>

<div class="hotu-hotu">
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top mb-5  bg-primary" style="border-bottom: 3px solid orange;">
    <?php include 'template/navbar.php'; ?>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <div class="container mb-5">
    <?php eval($CONTENT['main']); ?>
  </div>
</div>
  <!-- ======= Footer ======= -->
  <footer id="footer" class="bg-primary">
    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Arsha</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="#" class="text-white">BLC</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


<!-- FOOTER -->
<?php include 'template/footer.php'; ?>
