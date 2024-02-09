
<div class="col-xs-12">
  <div class="box">
    <a href="?page=auser" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i> Aumenta Dadus</a>
    <div class="box-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Username</th>
            <th>Password</th>
            <th>Naran</th>
            <th>Level</th>
            <th>Aksaun</th>
          </tr>
        </thead>
        <tbody>

        <?php 

          $query = mq("SELECT * FROM tb_user JOIN tb_estudante ON tb_user.emis=tb_estudante.emis");
          $no = 1;
          while ($data = mfa($query)) {

         ?>

          <tr>
            <td><?= $no++; ?></td>
            <td><?= $data['emis'] ?></td>
            <td><?= $data['password'] ?></td>
            <td><?= $data['nrn_estudante'] ?></td>
            <td><?= $data['level'] ?></td>
            <td>
              <a href="?page=uuser&id=<?= $data['id_user']; ?>" class="btn btn-success btn-xs"><i class="fa fa-edit"></i> Hadia</a>
             <!-- <a href="?page=duser&id=<?= $data['id_user'] ?>" class="btn btn-danger btn-xs" onclick="return confirm('Tebes atu hamos dadus User <?= $data['nrn_estudante']; ?> ');"><i class="fa fa-trash"></i> Hamos</a> -->
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