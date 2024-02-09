<?php 

	$idDelete = $_GET['id'];

	mq("DELETE FROM tb_departamentu WHERE id_departamentu='$idDelete'");

	alert('hamos', 'departamentu', 'departamentu');

 ?>