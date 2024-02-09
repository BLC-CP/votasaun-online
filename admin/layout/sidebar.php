<?php if($_SESSION['level'] == 'admin'){ ?>


    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="imgestudante/<?= $dadus['foto'] ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?= $dadus['nrn_estudante']; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <ul class="sidebar-menu">
        <li class="header">Menu Prinsipal</li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-database"></i>
            <span>Dadus Master</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="?page=departamentu"><i class="fa fa-book"></i> Dadus Departamentu</a></li>
            <li><a href="?page=klase"><i class="fa fa-book"></i> Dadus Klase</a></li>
            <li><a href="?page=data"><i class="fa fa-book"></i> Dadus Data</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i>
            <span>Dadus Proses</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="?page=estudante"><i class="fa fa-users"></i>  Dadus Estudante</a></li>
            <li><a href="?page=kandidatu"><i class="fa fa-users"></i> Dadus Kandidatu</a></li>
            <li><a href="?page=votus"><i class="fa fa-book"></i> Dadus Votus</a></li>
          </ul>
          <li><a href="http://localhost/db/vsgiob2022/"><i class="fa fa-book"></i> Interface</a></li>
        </li>
      
      </ul>
    </section>
    <!-- /.sidebar -->

    <?php }elseif($_SESSION['level'] == 'fiskais'){ ?>


    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="imgestudante/<?= $dadus['foto'] ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?= $dadus['nrn_estudante']; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <ul class="sidebar-menu">
        <li class="header">Menu Prinsipal</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i>
            <span>Dadus Proses</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="?page=votus"><i class="fa fa-book"></i> Dadus Votus</a></li>
          </ul>
        </li>
      
      </ul>
    </section>
    <!-- /.sidebar -->

    <?php } ?>