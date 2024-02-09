
<div class="col-xs-12">
  <div class="box">
    <a href="?page=adata" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i> Aumenta Dadus</a>
    <div class="box-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Id Data</th>
            <th>Loron Votasaun</th>
            <th>Oras Hahus</th>
                  <th>Oras Remata</th>
                  <th>Obs Hahus</th>
                  <th>Obs Remata</th>
                  <th>Aksaun</th>
          </tr>
        </thead>
        <tbody>

        

        <?php 

          $query = mq("SELECT * FROM tb_data");
          $no = 1;
          while ($data = mfa($query)) {

         ?>

          <tr>
            <td><?= $no++; ?></td>
            <td><?= $data['id_data'] ?></td>
            <td><?= $data['loron_votasaun'] ?></td>
            <td><?= $data['oras_hahu'] ?></td>
            <td><?= $data['oras_remata'] ?></td>
             <td><?= $data['obs_hahu'] ?></td>
              <td><?= $data['obs_remata'] ?></td>
            <td>
              <a href="?page=udata&id=<?= $data['id_data']; ?>" class="btn btn-success btn-xs"><i class="fa fa-edit"></i> Hadia</a>
             <a href="?page=ddata&id=<?= $data['id_data'] ?>" class="btn btn-danger btn-xs" onclick="return confirm('Tebes atu hamos dadus User <?= $data['nrn_estudante']; ?> ');"><i class="fa fa-trash"></i> Hamos</a>
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