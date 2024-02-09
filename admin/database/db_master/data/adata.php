 <?php 

 if(isset($_POST['aumenta'])){

  $loron_votasaun= $_POST['loron_votasaun'];
  $oras_hahu= $_POST['oras_hahu'];
  $oras_remata= $_POST['oras_remata'];
  $obs_hahu= $_POST['obs_hahu'];
  $obs_remata= $_POST['obs_remata'];

  $add = mq("INSERT INTO tb_data VALUES(null, '$loron_votasaun', '$oras_hahu', '$oras_remata', '$obs_hahu', '$obs_remata')");

  alert('aumenta', 'data', 'data');

}

?>

<section class="content ">
  <div class="row ">
    <!-- left column -->
    <div class="col-md-12 col-lg-12 col-sm-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title"><?= $title; ?></h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="" method="post" enctype="multipart/form-data">
          <div class="box-body">
            <div class="form-group">
              <label for="iddata">Loron Votasaun</label>
              <input type="date" class="form-control" name="loron_votasaun" id="iddata">
            </div>
            <div class="form-group">
              <label for="oras_hahu">Oras Hahus</label>
              <input type="time" class="form-control" name="oras_hahu" id="oras_hahu">
            </div>
             <div class="form-group">
              <label for="rem">Oras Remata</label>
              <input type="time" class="form-control" name="oras_remata" id="rem">
            </div>
             <div class="form-group">
              <label for="obsh">Observasaun Hahus</label>
              <input type="text" class="form-control" name="obs_hahu" id="obsh" placeholder="Observasaun Hahu..">
            </div>
             <div class="form-group">
              <label for="obsr">Observasaun Remata</label>
              <input type="text" class="form-control" name="obs_remata" id="obs_remata" placeholder="Observasaun Remata..">
            </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary btn-sm" name="aumenta"><i class="fa fa-plus"></i> Aumenta</button>
            <button type="reset" class="btn btn-warning btn-sm" name="hamos"><i class="fa fa-trash"></i> Hamos</button>
            <a href="?page=data" class="btn btn-success btn-sm"><i class="fa fa-undo"></i> Kansela</a>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- /.row -->
</section>