<?php 

	$idDelete = $_GET['id'];

	$query = mq("SELECT * FROM tb_estudante WHERE emis='$idDelete'");

	$data = mfa($query);

	$dadus = $data['foto'];

	// var_dump($dadus);die;

	if(file_exists("imgestudante/$dadus")){
		unlink("imgestudante/$dadus");
	}

	mq("DELETE FROM tb_estudante WHERE emis='$idDelete'");

	alert('hamos', 'estudante', 'estudante');

 ?>