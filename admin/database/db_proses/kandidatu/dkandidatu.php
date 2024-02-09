<?php 

	$idDelete = $_GET['id'];

	$query = mq("SELECT * FROM tbl_kandidatu WHERE id_kandidatu='$idDelete'");

	$data = mfa($query);

	$dadus = $data['fotos'];

	// var_dump($dadus);die;

	if(file_exists("imgkandidatu/$dadus")){
		unlink("imgkandidatu/$dadus");
	}

	mq("DELETE FROM tbl_kandidatu WHERE id_kandidatu='$idDelete'");

	alert('hamos', 'kandidatu', 'kandidatu');

 ?>