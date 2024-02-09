<div class="col-xs-12">
  <div class="box">
    <a href="?page=aestudante" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i> Aumenta Dadus</a>
    <div class="box-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>No Emis</th>
            <th>Naran</th>
            <th>Sexo</th>
            <th>Telefone</th>
            <th>Foto</th>
            <th>Departamentu</th>
            <th>Klase</th>
            <th>Turma</th>
            <th>Password</th>
            <th>Level</th>
            <th>Aksaun</th>
          </tr>
        </thead>
        <tbody>

        <?php 

          $query = mq("SELECT * FROM tb_estudante 
            JOIN tb_departamentu ON tb_estudante.id_departamentu=tb_departamentu.id_departamentu
            JOIN tb_klase ON tb_estudante.id_klase=tb_klase.id_klase 

            ORDER BY emis ASC
            ");
          $no = 1;
          while ($data = mfa($query)) {

         ?>

          <tr>
            <!-- <td><?= $no++; ?></td> -->
            <td><?= $data['emis']; ?></td>
            <td><?= $data['nrn_estudante'] ?></td>
            <td><?= $data['sexo'] ?></td> 
            <td><?= $data['no_tlp'] ?></td> 
            <td><img src="imgestudante/<?= $data['foto'] ?>" width="30px" height="30px"></td>
            <td><?= $data['nrn_departamentu'] ?></td>
            <td><?= $data['nrn_klase'] ?></td>
            <td><?= $data['turma'] ?></td>
            <td><?= $data['password'] ?></td>
            <td><?= $data['level'] ?></td>
            <td>
              <a href="?page=uestudante&id=<?= $data['emis']; ?>" class="btn btn-success btn-xs"><i class="fa fa-edit"></i> Hadia</a>
              <a href="?page=destudante&id=<?= $data['emis'] ?>" class="btn btn-danger btn-xs" onclick="return confirm('Tebes atu hamos dadus <?= $data['nrn_estudante']; ?> ');"><i class="fa fa-trash"></i> Hamos</a> 
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