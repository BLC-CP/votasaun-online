<?php 
session_start();
$nre = $_SESSION['nre'];
include '../admin/config/config.php';

if($_SESSION['status'] != 'logins'){
	header("Location:../loginuser/Login/loginuser.php");
}elseif ($_SESSION['level'] != 'admin' && $_SESSION['level'] != 'user' && $_SESSION['level'] != 'fiskais') {
	header("Location:../loginuser/Login/loginuser.php");
}

?>

<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<title>User Login</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<style>
		body{
			background-image: url('fotobg/bg.svg');
			background-position: center;
			background-repeat: no-repeat;
			background-size: 100% 100%;
			background-attachment: fixed;
			background-color: lightgray;
		}
	</style>
</head>
<body>



	<nav class="navbar navbar-expand-lg navbar-warning bg-primary mb-4" style="border-bottom:3px solid orange;">
		<div class="container">
			<a class="navbar-brand text-white" href="#">Nino Conis Santana de Lospalos</a>
		<a class="navbar-brand text-white" href="../loginvota/logout.php">Logout</a>
		</div>
	</nav>

	<?php 


	$dUser = mq("SELECT * FROM tb_votus WHERE id_user='$nre'");
	if(mnr($dUser) > 0){
		?>

		<h1 class="text-center display-6 mt-3"> 

			<?php 

			$u = mq("SELECT * FROM tb_estudante WHERE emis = '$nre'");
			$ud = mfa($u);
			?>
			<i style="color:red;"><?= $ud['nrn_estudante']; ?></i>

			Ita Boot Vota Ona ba 

			<b style="color:blue; font-family:"> 

				<?php 
				$dkand = mfa($dUser);
				$dkand1 = $dkand['id_kandidatu'];
				$data2 = mfa_mq("SELECT * FROM tb_estudante WHERE emis='$dkand1'");

				echo $data2['nrn_estudante'];

				?>
			</b>
		</h1>

		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-4 col-lg-12 d-flex justify-content-center" >
					<img class="rounded-circle" src="../admin/imgestudante/<?= $data2['foto'] ?>" height='400px' width='400px'>
				</div>
			</div>
		</div>

	<?php }else{ ?>

		<div class="container vkandidatu">
			<div class="row">

				<?php

				if(isset($_POST['vota'])){
					$id_kandidatu = $_POST['id_kandidatu'];
					$id_user = $_POST['id_user'];
					$data = $_POST['data_vota'];

					$insert = mq("INSERT INTO tb_votus VALUES(null, '$id_kandidatu', '$id_user', '$data')");

					if(mysqli_affected_rows($conn) > 0){
						echo "
						<script>
						alert('Ita boot vota ho susesu');
						</script>
						";
						echo '<meta http-equiv=refresh content="0">';
						exit;
					}else{
						echo "
						<script>
						alert('Vota Ladiak');
						</script>
						";
						echo '<meta http-equiv=refresh content="0">';
						exit;
					}
				}

				$query = mq("SELECT * FROM tbl_kandidatu JOIN tb_estudante ON tbl_kandidatu.emis=tb_estudante.emis");
				while ($data = mfa($query)) {
					?>
					<div class="col-sm-12 col-md-12 col-lg-3 text-center">

						<form action="" method="POST">
							<div class="card" style="width: 100%;">
								<img src="../admin/imgestudante/<?= $data['foto'] ?>" class="card-img-top rounded-circle" style="height: 270px;">
								<div class="card-body">
									<h4 class="card-title"><?= $data['nrn_estudante'] ?></h4>
									<input type="hidden" name="id_kandidatu" value="<?= $data['emis'] ?>">
									<input type="hidden" value="<?= $_SESSION['nre'] ?>" name="id_user" >
									<?php 
									date_default_timezone_set("Asia/Dili");
								 $datas = date('d F Y, h:i:s A');
								 ?>
								<input type="hidden" name="data_vota" value="<?= $datas; ?>">
									<button type="submit" name="vota" class="btn btn-success btn-sm shadow" style="width: 100%;">Vota</button>
								</div>
								
							</div>
						</form>
					</div>
				<?php } ?>
			</div>
		</div>

	<?php } ?>

	<script src="../admin/bootstrap/js/bootstrap.bundle.js" ></script>
</body>
</html>
