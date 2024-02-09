<?php 
session_start();
require '../admin/config/config.php';

if(isset($_POST['login'])){

	$username = htmlspecialchars($_POST['username']);
	$password = htmlspecialchars($_POST['password']);

	$query = mq("SELECT * FROM tb_estudante WHERE emis = '$username' && password = '$password'");

	$data = mfa($query);

	// $datas = mfa($nrnEst);

	if(mnr($query) > 0){

		header("Location:../uservota/vota.php");

		if($data['level'] == 'admin' || $data['level'] == 'user'){

			$_SESSION['status'] = 'logins';
			$_SESSION['level'] = $data['level'];
			$_SESSION['nre'] = $data['emis'];

			header("Location:../uservota");

		}else{
			header("Location:?status=loginLaDiak");
		}

	}else{
		header("Location:?status=loginLaDiak");
	}

}

$data = mq("SELECT * FROM tb_data");
$data = mfa($data);

// var_dump($data);die();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V2</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="" method="post">
					<span class="login100-form-title p-b-26">
						Bemvindo
					</span>
					<?php

					date_default_timezone_set("Asia/Dili");

					$datas = date("H:i:s");

					if($datas < $data['oras_hahu']){
						?>

						<script>
							setInterval(customClock, 500);
							function customClock() {
								var time = new Date();
								var hrs = time.getHours();
								var min = time.getMinutes();
								var sec = time.getSeconds();
								
								document.getElementById('clock').innerHTML = hrs + ":" + min + ":" + sec;
								
							}
							
						</script>
						<p class="login100-form-title-1" style="color:red; text-align: center;">
							<?= $data['obs_hahu'] ?> <br> <?= $data['oras_hahu']; ?> AM
						</p>
						<h2 style="color:yellow; margin:0; padding: 0; text-align: center;" id="clock">
						<?php }elseif($datas > $data['oras_remata']){ ?>
							<p class="login100-form-title-1" style="color:red; text-align: center;">
							<?= $data['obs_remata'] ?> <br> oras liu tiha ona <?= $data['oras_remata']; ?> PM
						</p>
							<?php }else{ ?>

						<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
							<input class="input100" type="text" name="username">
							<span class="focus-input100" data-placeholder="Emis.."></span>
						</div>

						<div class="wrap-input100 validate-input" data-validate="Enter password">
							<span class="btn-show-pass">
								<i class="zmdi zmdi-eye"></i>
							</span>
							<input class="input100" type="password" name="password">
							<span class="focus-input100" data-placeholder="Password.."></span>
						</div>

						<div class="container-login100-form-btn">
							<div class="wrap-login100-form-btn">
								<div class="login100-form-bgbtn"></div>
								<button class="login100-form-btn" type="submit" name="login">
									Login
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
<?php } ?>

		<div id="dropDownSelect1"></div>

		<!--===============================================================================================-->
		<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
		<!--===============================================================================================-->
		<script src="vendor/animsition/js/animsition.min.js"></script>
		<!--===============================================================================================-->
		<script src="vendor/bootstrap/js/popper.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<!--===============================================================================================-->
		<script src="vendor/select2/select2.min.js"></script>
		<!--===============================================================================================-->
		<script src="vendor/daterangepicker/moment.min.js"></script>
		<script src="vendor/daterangepicker/daterangepicker.js"></script>
		<!--===============================================================================================-->
		<script src="vendor/countdowntime/countdowntime.js"></script>
		<!--===============================================================================================-->
		<script src="js/main.js"></script>

	</body>
	</html>