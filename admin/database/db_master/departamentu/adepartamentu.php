 <?php 

 if(isset($_POST['aumenta'])){

  $id_departamentu= $_POST['id_departamentu'];
  $nrn_departamentu= $_POST['nrn_departamentu'];

  $add = mq("INSERT INTO tb_departamentu VALUES('$id_departamentu', '$nrn_departamentu')");

  alert('aumenta', 'departamentu', 'departamentu');

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
              <label for="iddepartamentu">Id Departamentu</label>
              <input type="text" class="form-control" name="id_departamentu" value="<?= uniqueId('4', 'tb_departamentu'); ?>" readonly id="iddepartamentu">
            </div>
            <div class="form-group">
              <label for="nrn_departamentu">Departamentu</label>
              <input type="text" class="form-control" name="nrn_departamentu" id="nrn_departamentu" placeholder="Departamentu..">
            </div>
            
          <div class="form-group">
            <button type="submit" class="btn btn-primary btn-sm" name="aumenta"><i class="fa fa-plus"></i> Aumenta</button>
            <button type="reset" class="btn btn-warning btn-sm" name="hamos"><i class="fa fa-trash"></i> Hamos</button>
            <a href="?page=departamentu" class="btn btn-success btn-sm"><i class="fa fa-undo"></i> Kansela</a>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- /.row -->
</section>