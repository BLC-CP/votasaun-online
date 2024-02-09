
<div class="col-xs-12">
  <div class="box">
    <a href="?page=adepartamentu" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i> Aumenta Dadus</a>
    <div class="box-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Id Departamentu</th>
            <th>Departamentu</th>
            <th>Aksaun</th>
          </tr>
        </thead>
        <tbody>

        <?php 

          $query = mq("SELECT * FROM tb_departamentu");
          $no = 1;
          while ($data = mfa($query)) {

         ?>

          <tr>
            <td><?= $no++; ?></td>
            <td><?= $data['id_departamentu']; ?></td>
            <td><?= $data['nrn_departamentu'] ?></td>      
            <td>
              <a href="?page=udepartamentu&id=<?= $data['id_departamentu']; ?>" class="btn btn-success btn-xs"><i class="fa fa-edit"></i> Hadia</a>
              <a href="?page=ddepartamentu&id=<?= $data['id_departamentu'] ?>" class="btn btn-danger btn-xs" onclick="return confirm('Tebes atu hamos dadus <?= $data['nrn_departamentu']; ?> ');"><i class="fa fa-trash"></i> Hamos</a>
            </td>
          </tr>

          <?php } ?>

        </tbody>
      </table>
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->
</div>