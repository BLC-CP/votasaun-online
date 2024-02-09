
<div class="col-xs-12">
  <div class="box">
    <a href="?page=aklase" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i> Aumenta Dadus</a>
    <div class="box-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Id Klase</th>
            <th>Klase</th>
            <th>Aksaun</th>
          </tr>
        </thead>
        <tbody>

        <?php 

          $query = mq("SELECT * FROM tb_klase");
          $no = 1;
          while ($data = mfa($query)) {

         ?>

          <tr>
            <td><?= $no++; ?></td>
            <td><?= $data['id_klase']; ?></td>
            <td><?= $data['nrn_klase'] ?></td>
            <td>
              <a href="?page=uklase&id=<?= $data['id_klase']; ?>" class="btn btn-success btn-xs"><i class="fa fa-edit"></i> Hadia</a>
              <a href="?page=dklase&id=<?= $data['id_klase'] ?>" class="btn btn-danger btn-xs" onclick="return confirm('Tebes atu hamos dadus <?= $data['nrn_klase']; ?> ');"><i class="fa fa-trash"></i> Hamos</a>
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