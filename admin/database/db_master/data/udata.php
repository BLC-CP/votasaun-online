 <?php 

$id = $_GET['id'];
 if(isset($_POST['hadia'])){

  $id_data= $_POST['id_data'];
  $loron_votasaun= $_POST['loron_votasaun'];
  $oras_hahu= $_POST['oras_hahu'];
  $oras_remata= $_POST['oras_remata'];
  $obs_hahu= $_POST['obs_hahu'];
  $obs_remata= $_POST['obs_remata'];

  $add = mq("UPDATE tb_data SET
    id_data='$id_data',
    loron_votasaun='$loron_votasaun', 
    oras_hahu='$oras_hahu',
    oras_remata='$oras_remata',
    obs_hahu='$obs_hahu',
    obs_remata='$obs_remata'
    WHERE id_data='$id'
    ");

  alert('hadia', 'data', 'data');

}

?>

<section class="content ">
  <?php 

$koko = mfa_mq("SELECT * FROM tb_data WHERE id_data='$id'");

?>
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
              <input type="date" class="form-control" name="loron_votasaun" id="iddata" value="<?= $koko['loron_votasaun']; ?>">
              <input type="hidden" class="form-control" name="id_data" value="<?= $koko['id_data']; ?>">
            </div>
            <div class="form-group">
              <label for="oras_hahu">Oras Hahus</label>
              <input type="time" class="form-control" name="oras_hahu" value="<?= $koko['oras_hahu']; ?>" id="oras_hahu">
            </div>
             <div class="form-group">
              <label for="rem">Oras Remata</label>
              <input type="time" class="form-control" value="<?= $koko['oras_remata']; ?>" name="oras_remata" id="rem">
            </div>
             <div class="form-group">
              <label for="obsh">Observasaun Hahus</label>
              <input type="text" class="form-control" name="obs_hahu" id="obsh" value="<?= $koko['obs_hahu']; ?>">
            </div>
             <div class="form-group">
              <label for="obsr">Observasaun Remata</label>
              <input type="text" class="form-control" name="obs_remata" id="obs_remata" value="<?= $koko['obs_remata']; ?>">
            </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary btn-sm" name="hadia"><i class="fa fa-plus"></i> Hadia</button>
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