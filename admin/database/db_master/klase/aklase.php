 <?php 

 if(isset($_POST['aumenta'])){

  $id_klase = $_POST['id_klase'];
  $nrn_klase = $_POST['nrn_klase'];

  $add = mq("INSERT INTO tb_klase VALUES('$id_klase', '$nrn_klase')");

  alert('aumenta', 'klase', 'klase');

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
              <label for="idklase">Id Klase</label>
              <input type="text" class="form-control" name="id_klase" value="<?= uniqueId('3', 'tb_klase'); ?>" readonly id="idklase" placeholder="Id Klase..">
            </div>


            <div class="form-group">
              <label for="id_klase">Klase</label>
              <input type="text" class="form-control" name="nrn_klase" id="id_klase" placeholder="Klase..">
            </div>
            
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-sm" name="aumenta"><i class="fa fa-plus"></i> Aumenta</button>
              <button type="reset" class="btn btn-warning btn-sm" name="hamos"><i class="fa fa-trash"></i> Hamos</button>
              <a href="?page=klase" class="btn btn-success btn-sm"><i class="fa fa-undo"></i> Kansela</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- /.row -->
</section>