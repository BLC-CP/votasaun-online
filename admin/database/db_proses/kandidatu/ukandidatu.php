   <?php 

$id = $_GET['id'];
 if(isset($_POST['aumenta'])){

  $id_kandidatu = $_POST['id_kandidatu'];
  $emis = $_POST['emis'];
  if($_FILES['foto']['error'] === 4){
    $foto = $_POST['img'];
  }else{
    $foto = uploadFotos();
  }

  $add = mq("UPDATE tbl_kandidatu SET
    id_kandidatu='$id_kandidatu', 
    emis='$emis', 
    foto_estrutura='$foto'
    WHERE id_kandidatu='$id'
    ");

  alert('aumenta', 'kandidatu', 'kandidatu');

}

?>

<section class="content ">
  <?php 

          $koko = mfa_mq("SELECT * FROM tbl_kandidatu WHERE id_kandidatu='$id'");

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
              <label for="idkandidatu">Id Kandidatu</label>
              <input type="text" class="form-control" name="id_kandidatu" value="<?= $koko['id_kandidatu']; ?>" readonly id="idkandidatu">
            </div>

            <div class="form-group">
              <label>Kandidatu</label>
              <select class="form-control select2" name="emis" style="width: 100%">
                <option selected="selected">Hili Kandidatu</option>

                <?php 

                $query = mq("SELECT * FROM tb_estudante");
                while ($dadus = mfa($query)) {
                 ?>

                 <option <?php if($koko['emis'] == $dadus['emis']) echo "selected"; ?> value="<?= $dadus['emis'] ?>"><?= $dadus['nrn_estudante'] ?></option>

               <?php } ?>

             </select>
           </div>

          <div class="form-group">
            <label for="foto">Foto Estrutura</label>
            <input type="file" class="form-control" name="foto" value="<?= $koko['foto_estrutura']; ?>">
            <input type="hidden" class="form-control" name="img" value="<?= $koko['foto_estrutura']; ?>">
          </div>

              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-sm" name="aumenta"><i class="fa fa-plus"></i> Hadia</button>
                <button type="reset" class="btn btn-warning btn-sm" name="hamos"><i class="fa fa-trash"></i> Hamos</button>
                <a href="?page=kandidatu" class="btn btn-success btn-sm"><i class="fa fa-undo"></i> Kansela</a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- /.row -->
  </section>