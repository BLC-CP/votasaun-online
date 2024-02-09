<?php 

	$idDelete = $_GET['id'];

	mq("DELETE FROM tb_user WHERE id_user='$idDelete'");

  alert('hamos', 'useriob', 'useriob');

 ?>