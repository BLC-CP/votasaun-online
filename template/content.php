
<div class="row mt-5">
  <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
    <!-- <h1>Votasaun Online</h1> -->
    <h2>Votasaun Online Estrutura OSIS ESGNCSL</h2>
    <?php 

    $loron = mq("SELECT * FROM tb_data");
    $dLoron = mfa($loron);
    $dataVotasaun = $dLoron['loron_votasaun'];

    date_default_timezone_set("Asia/Dili");

    $datasss = date("Y-m-d");

    // echo $datasss;

    ?>

    <?php 
    if($dataVotasaun != $datasss){
      ?>
 <p class="h5 mt-2" style="color:orange;">Deskulpa Loron Votasaun Seidauk To'o, Votasaun Sei Hahu iha <b class="text-primary"><?= $dataVotasaun; ?></b></p>
      <?php }else{ ?>
    <div class="d-flex justify-content-center justify-content-lg-start mt-3">
      <a href="loginvota/login.php" class="btn-get-started scrollto btn btn-primary btn-sm">Login Iha Ne'e</a>
     
      <!-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a> -->
    </div>
     <?php } ?>
  </div>
  <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
    <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
  </div>
</div>