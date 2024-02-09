 <?php 

 $idHadia = $_GET['id'];
 if(isset($_POST['hadia'])){

  $id_klase = $_POST['id_klase'];
  $nrn_klase = $_POST['nrn_klase'];

  $add = mq("UPDATE tb_klase SET
    id_klase='$id_klase', 
    nrn_klase='$nrn_klase'
    WHERE id_klase='$idHadia'
    ");

  alert('hadia', 'klase', 'klase');

}

?>

<?php 

$data = mfa_mq("SELECT * FROM tb_klase WHERE id_klase='$idHadia'");

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
              <input type="text" class="form-control" name="id_klase" value="<?= $data['id_klase']; ?>" readonly id="idklase" placeholder="Id Klase..">
            </div>

            <div class="form-group">
              <label for="nrn_klase">Klase</label>
              <input type="text" class="form-control" name="nrn_klase" value="<?= $data['nrn_klase'] ?>" id="nrn_klase" placeholder="Klase..">
            </div>

            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-sm" name="hadia"><i class="fa fa-plus"></i> Hadia</button>
              <a href="?page=klase" class="btn btn-success btn-sm"><i class="fa fa-undo"></i> Kansela</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- /.row -->
</section>