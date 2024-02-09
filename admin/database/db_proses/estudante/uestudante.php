  <?php 
  $id = $_GET['id'];
  if(isset($_POST['aumenta'])){

    $emis = $_POST['emis'];
    $nrn_estudante = $_POST['nrn_estudante'];
    $sexo = $_POST['sexo'];
    $no_tlp = $_POST['no_tlp'];
    if($_FILES['foto']['error'] === 4){
      $foto = $_POST['img'];
    }else{
      $foto = uploadFoto();
    }
    $id_departamentu = $_POST['id_departamentu'];
    $id_klase = $_POST['id_klase'];
    $turma = $_POST['turma'];
    $password = $_POST['password'];
    $level = $_POST['level'];

    $add = mq("UPDATE tb_estudante SET
      emis='$emis',
      nrn_estudante='$nrn_estudante',
      sexo='$sexo',
      no_tlp='$no_tlp',
      foto='$foto',
      id_departamentu='$id_departamentu',
      id_klase='$id_klase',
      turma='$turma',
      level='$level',
      password='$password'
      WHERE emis = '$id'
      ");

    alert('aumenta', 'estudante', 'estudante');

  }

  ?>

  <section class="content">
    <?php 

    $koko = mfa_mq("SELECT * FROM tb_estudante WHERE emis='$id'");

    ?>
    <div class="row">
      <!-- left column -->
      <div class="col-md-6">
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
                <label for="idestudante">No Emis</label>
                <input type="text" class="form-control" name="emis" id="idestudante" value="<?= $koko['emis'] ?>">
              </div>

              <div class="form-group">
                <label for="nrn_estudante">Naran</label>
                <input type="text" class="form-control" name="nrn_estudante" id="nrn_estudante" value="<?= $koko['nrn_estudante'] ?>">
              </div>

              <div class="form-group">
                <label for="sexo">Sexo </label>
                <input type="radio" name="sexo" value="Mane" <?= $koko['sexo'] == 'Mane' ? 'checked' : null ?>> Mane
                <input type="radio" name="sexo" value="Feto" <?= $koko['sexo'] == 'Feto' ? 'checked' : null ?>> Feto
              </div>

              <div class="form-group">
                <label for="nrn_estudante">No Telefone</label>
                <input type="text" class="form-control" name="no_tlp" id="nrn_estudante" value="<?= $koko['no_tlp'] ?>">
              </div>

              <div class="form-group">
                <label>Departamento</label>
                <select class="form-control select2" name="id_departamentu" style="width: 100%">
                  <option selected="selected">Hili Departamentu</option>

                  <?php 

                  $query = mq("SELECT * FROM tb_departamentu");
                  while ($data = mfa($query)) {
                   ?>

                   <option <?php if($koko['id_departamentu'] == $data['id_departamentu']) echo "selected"; ?> value="<?= $data['id_departamentu'] ?>"><?= $data['id_departamentu'] ?> & <?= $data['nrn_departamentu'] ?></option>

                 <?php } ?>

               </select>
             </div>

             <div class="form-group">
              <label>Klase</label>
              <select class="form-control select2" name="id_klase" style="width: 100%">
                <option selected="selected">Hili Klase</option>

                <?php 

                $query = mq("SELECT * FROM tb_klase");
                while ($data = mfa($query)) {
                 ?>

                 <option <?php if($koko['id_klase'] == $data['id_klase']) echo "selected"; ?> value="<?= $data['id_klase'] ?>"><?= $data['id_klase'] ?> & <?= $data['nrn_klase'] ?></option>

               <?php } ?>

             </select>
           </div>

         </div>
       </div>

     </div>
     <div class="col-md-6">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-body">

          <div class="form-group">
            <label for="turma">Turma</label>
            <input type="text" class="form-control" name="turma" id="turma" value="<?= $koko['turma'] ?>">
          </div>

          <div class="form-group">
            <label for="sexo">Level </label>
            <input type="radio" name="level" value="admin" <?= $koko['level'] == 'admin' ? 'checked' : null ?>> Admin
            <input type="radio" name="level" value="user" <?= $koko['level'] == 'user' ? 'checked' : null ?>> User
          </div>

          <div class="form-group">
            <label for="pass">Password</label>
            <input type="text" class="form-control" name="password" id="pass" value="<?= $koko['password'] ?>">
          </div>


          <div class="form-group">
            <label for="exampleInputFile">Foto</label>
            <input type="file" name="foto" value="<?= $koko['foto'] ?>">
            <input type="hidden" name="img" value="<?= $koko['foto'] ?>">
          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-primary btn-sm" name="aumenta"><i class="fa fa-plus"></i> Hadia</button>
            <button type="reset" class="btn btn-warning btn-sm" name="hamos"><i class="fa fa-trash"></i> Hamos</button>
            <a href="?page=estudante" class="btn btn-success btn-sm"><i class="fa fa-undo"></i> Kansela</a>
          </div>
        </div>
      </form>
    </div>

  </div>
</div>
<!-- /.row -->
</section>