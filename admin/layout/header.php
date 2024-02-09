<?php include 'page/page.php'; include 'config/config.php'; ?>

<?php 

  $data = $_SESSION['nre'];

  $query = mq("SELECT * FROM tb_estudante WHERE emis='$data'");

  $dadus = mfa($query);

 ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Votasaun OSIS ESGNCL</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <!-- url index.php -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  <link rel="stylesheet" href="plugins/morris/morris.css">
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- end url index.php -->


  <!-- url dataTables data.php -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css" />
  <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css" />
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css" />
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css" />
  <!-- end url dataTables data.php -->


  <!-- select buka dadus advance.php -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css" />
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css" />
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css" />
  <link rel="stylesheet" href="plugins/iCheck/all.css" />
  <link rel="stylesheet" href="plugins/colorpicker/bootstrap-colorpicker.min.css" />
  <link rel="stylesheet" href="plugins/timepicker/bootstrap-timepicker.min.css" />
  <link rel="stylesheet" href="plugins/select2/select2.min.css" />
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css" />
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css" />
  <!-- end select buka dadus advance.php -->

</head>
<body class="hold-transition skin-blue sidebar-mini">