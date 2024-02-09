
<div class="col-lg-12">
  <div class="box">
    <div class="box-body">
       <table id="example1" class="table table-bordered table-striped"> 
        <thead>
          <tr>
            <th>No</th>
            <!-- <th >Kandidatu</th> -->
            <th>Estudante</th>
            <th>Data & Horas</th>
          </tr>
        </thead>
        <tbody>

          <?php 

          $query = mq("SELECT * FROM tb_votus 
            JOIN tb_estudante ON tb_votus.id_user=tb_estudante.emis ORDER BY id_kandidatu DESC 
            ");
          $no = 1;
          while($data = mfa($query)){
            $idkn1 = $data['id_kandidatu']
            ?>

            <tr>
              <td><?= $no++; ?></td>
              <!-- <td>

                <?php 

                $kand = $data['id_kandidatu'];
                $kand1 = mfa_mq("SELECT * FROM tb_estudante WHERE emis='$kand'");

                echo $kand1['nrn_estudante'];

                ?>

              </td> -->
              <td>
                
                <?php 
                  $user = $data['id_user'];
                  $user1 = mfa_mq("SELECT * FROM tb_estudante WHERE emis='$user'");
                  echo $user1['nrn_estudante'];
                 ?>

              </td>
              <td>
               <?= $data['oras_vota'] ?>
              </td>
            </tr>

          <?php } ?>

        </tbody>
      </table>
    </div>
  </div>
</div>

