 <?php 

 if(isset($_POST['aumenta'])){

  $id_kandidatu = $_POST['id_kandidatu'];
  $emis = $_POST['emis'];
  $foto = uploadFotos();

  $add = mq("INSERT INTO tbl_kandidatu VALUES('$id_kandidatu', '$emis', '$foto')");

  alert('aumenta', 'kandidatu', 'kandidatu');

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
              <label for="idkandidatu">Id Kandidatu</label>
              <input type="text" class="form-control" name="id_kandidatu" value="<?= uniqueId('1', 'tbl_kandidatu'); ?>" readonly id="idkandidatu">
            </div>

            <div class="form-group">
              <label>Kandidatu</label>
              <select class="form-control select2" name="emis" style="width: 100%">
                <option selected="selected">Hili Kandidatu</option>

                <?php 

                $query = mq("SELECT * FROM tb_estudante");
                while ($data = mfa($query)) {
                 ?>

                 <option value="<?= $data['emis'] ?>"><?= $data['nrn_estudante'] ?></option>

               <?php } ?>

             </select>
           </div>

          <div class="form-group">
            <label for="foto">Foto Estrutura</label>
            <input type="file" class="form-control" name="foto" id="foto">
          </div>

              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-sm" name="aumenta"><i class="fa fa-plus"></i> Aumenta</button>
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