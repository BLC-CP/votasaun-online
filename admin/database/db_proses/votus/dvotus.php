<?php 

	$idHamos = $_GET['id'];

	mq("DELETE FROM tb_votus WHERE id_votus='$idHamos' ");

	alert('hamos', 'votus', 'votus');

 ?>