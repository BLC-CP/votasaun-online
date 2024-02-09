
    <!-- Logo -->
    <a href="?page=content" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>IOB</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Votasaun</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="imgestudante/<?= $dadus['foto'] ?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?= $_SESSION['level']; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="imgestudante/<?= $dadus['foto'] ?>" class="img-circle" alt="User Image">

                <p>
                  <?= $_SESSION['level']; ?>
                  <small><?= $dadus['nrn_estudante'] ?></small>
                </p>
              </li>
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="logs/logoutiob.php" class="btn btn-default btn-flat">Logout</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>