<div class="container-fluid">
	<?php 

	$idDetail = $_GET['id'];
	$query = mq("SELECT * FROM tbl_kandidatu JOIN tb_estudante ON tbl_kandidatu.emis=tb_estudante.emis WHERE id_kandidatu='$idDetail' ");
	$no = 1;

	while ($data = mfa($query)) {

		?>
		<div class="row" style="margin-bottom:15px">

			<div class="col-sm-12 col-md-6 col-lg-6">

				<table>
					<tr>
						<td><h4>Naran : </h4></td>
						<td><h4> <?= $data['nrn_estudante'] ?></h4></td>
					</tr>
					<tr>
						<td><h4>Pozisaun : </h4></td>
						<td><h4> <?= $data['pozisaun'] ?></h4></td>
					</tr>
					<tr>
						<td><h4>Observasaun : </h4></td>
						<td><h4> <?= $data['obs_kandidatu'] ?></h4></td>
					</tr>
					<tr>
						<td><a class="btn btn-primary" href="?page=kandidatu">Fila Ba Baranda</a></td>
					</tr>
				</table>

			</div>
			<div class="col-sm-12 col-md-6 col-lg-6 imgdetailkand" style="margin-top:">
				<td><img src="imgestudante/<?= $data['foto'] ?>" width="50%"></td>
			</div>
		</div>

		<div class="row ">
			<div class="col-sm-12 col-md-12 col-lg-12">
				<h3 class="text-center bg-primary" style="padding: 10px;">Estrutura</h3>
				<img src="imgkandidatu/<?= $data['fotos'] ?>" width="100%">
			</div>
		</div>
	<?php } ?>
</div>