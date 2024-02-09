 <?php 

 $idHadia = $_GET['id'];
 if(isset($_POST['hadia'])){

  $id_departamentu = $_POST['id_departamentu'];
  $nrn_departamentu = $_POST['nrn_departamentu'];

  $add = mq("UPDATE tb_departamentu SET
    id_departamentu ='$id_departamentu', 
    nrn_departamentu='$nrn_departamentu'
    WHERE id_departamentu='$idHadia'
    ");

  alert('hadia', 'departamentu', 'departamentu');

}

?>

<?php 

$data = mfa_mq("SELECT * FROM tb_departamentu WHERE id_departamentu='$idHadia'");

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
              <label for="iddepartamentu">Id Departamentu</label>
              <input type="text" class="form-control" name="id_departamentu" value="<?= $data['id_departamentu']; ?>" readonly id="iddepartamentu" placeholder="Id Fakuldade">
            </div>
            <div class="form-group">
              <label for="nrn_departamentu">Departamentu</label>
              <input type="text" class="form-control" name="nrn_departamentu" value="<?= $data['nrn_departamentu'] ?>" id="nrn_departamentu" placeholder="Departamentu..">
            </div>

            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-sm" name="hadia"><i class="fa fa-plus"></i> Hadia</button>
              <a href="?page=departamentu" class="btn btn-success btn-sm"><i class="fa fa-undo"></i> Kansela</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- /.row -->
</section>