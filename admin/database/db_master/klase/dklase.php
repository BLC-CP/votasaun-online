<?php 

	$idDelete = $_GET['id'];

	mq("DELETE FROM tb_klase WHERE id_klase='$idDelete'");

	alert('hamos', 'klase', 'klase');

 ?>