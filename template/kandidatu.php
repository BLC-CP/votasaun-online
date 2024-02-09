
<div class="row mt-5 " data-aos="zoom-out" data-aos-delay="200">
  <h1 class="mt-5">Kandidatu</h1>

  <?php 

  $query = mq("SELECT * FROM tbl_kandidatu 
    JOIN tb_estudante ON tbl_kandidatu.emis=tb_estudante.emis 
    JOIN tb_departamentu ON tb_estudante.id_departamentu=tb_departamentu.id_departamentu
    JOIN tb_klase ON tb_estudante.id_klase=tb_klase.id_klase
    ORDER BY id_kandidatu ASC

    ");
  $no = 1;
  while ($data = mfa($query)) {

    ?>
    <div class="card mt-2 me-2 col-lg-2 col-md-4">
      <img src="admin/imgestudante/<?= $data['foto'] ?>" class="card-img-top mt-2" style="height: 50%;">
      <div class="card-body">
        <h5 class="card-title text-center" style="padding:0; margin:0;"><?= $data['nrn_estudante'] ?></h5><hr>
        <p class="card-text" style="padding:0; margin:0;"><?= $data['sexo'] ?></p><hr>
        
        <p class="card-text" style="padding:0; margin:0;"><?= $data['nrn_departamentu'] ?></p><hr>
        <p class="card-text" style="padding:0; margin:0;"><?= $data['nrn_klase'] ?></p><hr>
        <p class="card-text" style="padding:0; margin:0; font-weight: bold;">Total Votus : <b class="text-warning h3"><?php 

            $datasLos = $data['emis'];
            echo $count = mnr(mq("SELECT * FROM tb_votus WHERE id_kandidatu = '$datasLos' "));

            ?></b></p><hr>
      </div>
    </div>
  <?php } ?>
</div>