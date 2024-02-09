 <?php 

 $idHadia = $_GET['id'];
 if(isset($_POST['hadia'])){

  $id_user = $_POST['id_user'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $level = $_POST['level'];

  $add = mq("UPDATE tb_user SET
    id_user='$id_user', 
    emis='$username', 
    password='$password', 
    level='$level'
    WHERE id_user='$idHadia'
    ");

  alert('hadia', 'useriob', 'useriob');

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

          <?php $data = mfa_mq("SELECT * FROM tb_user WHERE id_user='$idHadia'"); ?>

          <div class="box-body">
            <div class="form-group">
              <label for="iduser">Id User</label>
              <input type="text" class="form-control" name="id_user" value="<?= $data['id_user']; ?>"  id="iduser">
            </div>
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" class="form-control" readonly name="username" value="<?= $data['emis']; ?>" id="username" placeholder="User">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="text" class="form-control" name="password" value="<?= $data['password'] ?>" id="password" placeholder="Password">
            </div>
            <div class="form-group">
              <label>Level</label>
              <div class="radio">
                <label>
                  <input type="radio" name="level" value="admin" <?= $data['level'] == 'admin' ? 'checked' : null ?> >
                  Admin
                </label>
              </div>
              <div class="radio">
                <label>
                  <input type="radio" name="level" value="fiskais" <?= $data['level'] == 'fiskais' ? 'checked' : null ?> >
                  Fiskais
                </label>
              </div>
              <div class="radio">
                <label>
                  <input type="radio" name="level" value="user" <?= $data['level'] == 'user' ? 'checked' : null ?> >
                  User
                </label>
              </div>
            </div>

            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-sm" name="hadia"><i class="fa fa-plus"></i> Hadia</button>
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