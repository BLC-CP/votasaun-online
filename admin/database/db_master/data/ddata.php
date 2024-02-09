<?php 

	$idDelete = $_GET['id'];

	mq("DELETE FROM tb_data WHERE id_data='$idDelete'");

  alert('hamos', 'data', 'data');

 ?>