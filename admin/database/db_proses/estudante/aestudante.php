 <?php 

 if(isset($_POST['aumenta'])){

 $emis = $_POST['emis'];
 $nrn_estudante = $_POST['nrn_estudante'];
 $sexo = $_POST['sexo'];
 $no_tlp = $_POST['no_tlp'];
 $foto = uploadFoto();
 $id_departamentu = $_POST['id_departamentu'];
 $id_klase = $_POST['id_klase'];
 $turma = $_POST['turma'];
 $string = substr(str_shuffle("abcdefghijklmnopqrstuvwxyz"), 0, 5);
 $level = $_POST['level'];




 $add = mq("INSERT INTO tb_estudante VALUES('$emis', '$nrn_estudante', '$sexo', '$no_tlp', '$foto', '$id_departamentu', '$id_klase', '$turma', '$level', '$string')");

 alert('aumenta', 'estudante', 'estudante');

}

?>

<section class="content">
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
              <input type="text" class="form-control" name="emis" id="idestudante" placeholder="No Emis..">
            </div>

            <div class="form-group">
              <label for="nrn_estudante">Naran</label>
              <input type="text" class="form-control" name="nrn_estudante" id="nrn_estudante" placeholder="Naran Kompletu..">
            </div>

            <div class="form-group">
              <label for="sexo">Sexo </label>
              <input type="radio" name="sexo" value="M" checked> Mane
              <input type="radio" name="sexo" value="F"> Feto
            </div>

            <div class="form-group">
              <label for="nrn_estudante">No Telefone</label>
              <input type="text" class="form-control" name="no_tlp" id="nrn_estudante" placeholder="Priense Numeru Telefone..">
            </div>

            <div class="form-group">
              <label>Departamento</label>
              <select class="form-control select2" name="id_departamentu" style="width: 100%">
                <option selected="selected">Hili Departamentu</option>

                <?php 

                $query = mq("SELECT * FROM tb_departamentu");
                while ($data = mfa($query)) {
                 ?>

                 <option value="<?= $data['id_departamentu'] ?>"><?= $data['id_departamentu'] ?> & <?= $data['nrn_departamentu'] ?></option>

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

               <option value="<?= $data['id_klase'] ?>"><?= $data['id_klase'] ?> & <?= $data['nrn_klase'] ?></option>

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
          <label for="semester">Turma</label>
          <input type="text" class="form-control" name="turma" id="semester" placeholder="Turma..">
        </div>

        <div class="form-group">
          <label for="sexo">Level </label>
          <input type="radio" name="level" value="admin"> Admin
          <input type="radio" name="level" value="user" checked> User
        </div>
<!-- 
        <div class="form-group"> 
          <label for="pass">Password</label> 
          <input type="text" class="form-control" name="password" id="pass">
        </div>  --> 


        <div class="form-group">
          <label for="exampleInputFile">Foto</label>
          <input type="file" name="foto" id="exampleInputFile">
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-primary btn-sm" name="aumenta"><i class="fa fa-plus"></i> Aumenta</button>
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