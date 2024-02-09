
<div class="col-xs-12">
  <div class="box">
    <a href="?page=akandidatu" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i> Aumenta Dadus</a>
    <div class="box-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Id kandidatu</th>
            <th>Kandidatu</th>
            <th>Foto Estrutura</th>
            <th>Aksaun</th>
          </tr>
        </thead>
        <tbody>

          <?php 

          $query = mq("SELECT * FROM tbl_kandidatu JOIN tb_estudante ON tbl_kandidatu.emis=tb_estudante.emis");
          $no = 1;
          while ($data = mfa($query)) {

           ?>

           <tr>
            <td><?= $no++; ?></td>
            <td><?= $data['id_kandidatu']; ?></td>
            <td><?= $data['nrn_estudante'] ?></td>
            <td><img src="imgkandidatu/<?= $data['foto_estrutura'] ?>" width="50px"></td>
            <td>
              <a href="?page=ukandidatu&id=<?= $data['id_kandidatu']; ?>" class="btn btn-success btn-xs"><i class="fa fa-edit"></i> Hadia</a>
              <a href="?page=dtlkandidatu&id=<?= $data['id_kandidatu']; ?>" class="btn btn-info btn-xs"><i class="fa fa-info"></i> Detaillu</a>
              <a href="?page=dkandidatu&id=<?= $data['id_kandidatu'] ?>" class="btn btn-danger btn-xs" onclick="return confirm('Tebes atu hamos dadus <?= $data['nrn_estudante']; ?> ');"><i class="fa fa-trash"></i> Hamos</a>
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