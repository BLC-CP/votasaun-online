<?php 

if(isset($_POST['aumenta'])){

  $id_user = $_POST['id_user'];
  $emis = $_POST['emis'];
  $string =  substr(str_shuffle("abcdefghijklmnopqrstuvwxyz"), 0, 5);
  $level = $_POST['level'];

  $sql = mq("INSERT INTO tb_user VALUES('$id_user', '$emis', '$string', '$level');");

  if(mysqli_affected_rows($conn) > 0){
   echo "
   <script>
   document.location.href='?page=auser';
   </script>
   ";
 }else{
   echo "
   <script>
   alert('Dadus Iha Tiha Ona');
   document.location.href='?page=auser';
   </script>
   "; 
 }

  //alert('aumenta', 'useriob', 'useriob');

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
        <form role="form" action="" method="post" enctype="multipart/form-data">
          <div class="box-body">

           <div class="form-group">
            <!-- <label for="password">Password</label> -->
            <input type="hidden" class="form-control" name="id_user" value="<?= uniqueId('2', 'tb_user'); ?>" id="password" placeholder="Password">
          </div>

          <div class="form-group">
            <label>Votantes</label>
            <select class="form-control select2" name="emis" style="width: 100%">
              <option selected="selected">Aumenta Votantes</option>

              <?php 

              $query = mq("SELECT * FROM tb_estudante");
              while ($data = mfa($query)) {
               ?>

               <option value="<?= $data['emis'] ?>"> <?= $data['emis'] ?> & <?= $data['nrn_estudante'] ?></option>

             <?php } ?>

           </select>
         </div>


         <div class="form-group">
          <!-- <label for="password">Password</label> -->
          <input type="hidden" class="form-control" name="password" value="<?= $string; ?>" id="password" placeholder="Password">
        </div>
        <div class="form-group">
          <label>Level</label>
              <!--<div class="radio">
                <label>
                  <input type="radio" name="level" value="admin">
                  Admin 
                </label>-->

              <!-- <div class="radio">
                <label>
                  <input type="radio" name="level" value="fiskais">
                  Fiskais
                </label>
              </div> -->
              <div class="radio">
                <label>
                  <input type="radio" name="level" value="user" checked>
                  User
                </label>
              </div>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-sm" name="aumenta"><i class="fa fa-plus"></i> Aumenta</button>
              <button type="reset" class="btn btn-warning btn-sm" name="hamos"><i class="fa fa-trash"></i> Hamos</button>
              <a href="?page=useriob" class="btn btn-success btn-sm"><i class="fa fa-undo"></i> Kansela</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- /.row -->
</section>
