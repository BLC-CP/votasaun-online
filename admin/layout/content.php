
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row d-flex justify-content-center">
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">

              <?php 

                $ttlEst = mq("SELECT * FROM tb_estudante");
                $count = mnr($ttlEst);

               ?>

              <h3><?= $count; ?></h3>

              <p>Total Estudantes</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>

            <?php if($_SESSION['level'] == 'admin'){ ?>
            <a href="?page=estudante" class="small-box-footer">Informasaun Detallu <i class="fa fa-arrow-circle-right"></i></a>
          <?php }elseif ($_SESSION['level'] == 'fiskais') { ?>
          <?php } ?>

          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">

              <?php 

                $ttlvotus = mq("SELECT * FROM tb_votus");
                $count1 = mnr($ttlvotus);

               ?>

              <h3><?= $count1; ?></h3>

              <p>Total Votus</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
             <?php if($_SESSION['level'] == 'admin'){ ?>
            <a href="?page=votus" class="small-box-footer">Informasaun Detallu <i class="fa fa-arrow-circle-right"></i></a>
          <?php }elseif ($_SESSION['level'] == 'fiskais') { ?>
          <?php } ?>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <?php 

                $ttlkand = mq("SELECT * FROM tbl_kandidatu");
                $count2 = mnr($ttlkand);

               ?>

              <h3><?= $count2; ?></h3>

              <p>Total Kandidatus</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <?php if($_SESSION['level'] == 'admin'){ ?>
            <a href="?page=kandidatu" class="small-box-footer">Informasaun Detallu <i class="fa fa-arrow-circle-right"></i></a>
          <?php }elseif ($_SESSION['level'] == 'fiskais') { ?>
          <?php } ?>
          </div>
        </div>
        <div class="col-lg-12 col-xs-12">
           <h3 class="h1 text-center font-weight-bold">Sistema Votasaun Online Escola Secundario Geral Nino Conis Santana de Lospalos Bazeadu Website</h3> 
        </div>
      </div>

      <!-- <div class="row d-flex justify-content-center">
        <h3>Sistema Votasaun Online Escola Secundario Geral Nino Conis Santana de Lospalos</h3>
      </div>  -->

    </section>
    <!-- /.content -->

    