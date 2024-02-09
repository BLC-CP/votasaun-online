<?php 
session_start();
require '../config/config.php';

if(isset($_POST['login'])){

  $username = $_POST['username'];
  $password = $_POST['password'];

  $query = mq("SELECT * FROM tb_estudante WHERE emis='$username' && password='$password'");

  $data = mfa($query);

  if(mnr($query) > 0){

    header("Location:baranda.php");

    if($data['level'] == 'admin'){

      $_SESSION['status'] = 'logins';
      $_SESSION['level'] = 'admin';
      $_SESSION['nre'] = $data['emis'];

      header("Location:../");

    }elseif($data['level'] == 'fiskais'){

      $_SESSION['status'] = 'logins';
      $_SESSION['level'] = 'fiskais';
      $_SESSION['nre'] = $data['emis'];

      header("Location:../");

    }else{
      header("Location:?status=laosadmin");
    }

  }else{
    header("Location:?status=loginLaDiak");
  }

}


?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sistema Login</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../plugins/iCheck/square/blue.css">
</head>
<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href="#" style="color:blue;"><b>Sistema Login</b></a><hr>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">

     <?php 

     if(isset($_GET['status'])){
       if($_GET['status'] == 'loginlai'){
        echo "<div class='alert alert-success text-center'>Login hodi bele asesu ba sistema</div>";
      }elseif($_GET['status'] == 'loginLaDiak') {
        echo "<div class='alert alert-warning text-center'>Username ou Password Salah</div>";
      }elseif ($_GET['status'] == 'laosadmin') {
        echo "<div class='alert alert-warning text-center'>Ita boot laiha direitu atu asesu sistema</div>";
     }
   }

   ?>

   <form action="" method="post">
    <div class="form-group has-feedback">
      <input type="text" name="username" autofocus class="form-control" placeholder="Username" autocomplete="off">
      <span class="glyphicon glyphicon-user form-control-feedback" ></span>
    </div>
    <div class="form-group has-feedback">
      <input type="password" name="password" class="form-control" placeholder="Password">
      <span class="glyphicon glyphicon-lock form-control-feedback"></span>
    </div>
    <div class="row">
      <div class="col-xs-4">
        <button type="submit" name="login" class="btn btn-primary btn-block btn-flat" style="border-radius: 5px;">Login</button>
      </div>
      <!-- /.col -->
    </div>
  </form>
</div>
</div>

<script src="../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="../plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
