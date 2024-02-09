
<?php 

session_start();

if($_SESSION['status'] != 'logins'){
  header("Location:logs/loginiob.php?status=loginlai");
}

?>

<?php include 'layout/header.php'; ?>
<div class="wrapper">

  <header class="main-header">
    <?php include 'layout/navbar.php'; ?>
  </header>

  <aside class="main-sidebar">
    <?php 

    if($_SESSION['level'] == 'admin'){
      include 'layout/sidebar.php';
    }elseif ($_SESSION['level'] == 'fiskais') {
      include 'layout/sidebar.php';
    }

    ?>




  </aside>

  <div class="content-wrapper">
    <?php eval($CONTENT['main']); ?>
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer text-center">
    <div class="pull-right hidden-xs">
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="">Junior IT Smart Academy V1.1</a>.</strong> 
  </footer>
</div>

<?php include 'layout/footer.php'; ?>