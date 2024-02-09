<?php 

$page = '';
if(isset($_GET['page'])){
	$page = $_GET['page'];

}

switch ($page) {

	case 'baranda':
	$page = "include 'template/content.php';";
	break;

	case 'kandidatu':
	$page = "include 'template/kandidatu.php';";
	break;

	case 'grafiku':
	$page = "include 'template/grafiku.php';";
	break;

	case 'ajuda':
	$page = "include 'template/ajuda.php';";
	break;

	case 'kontaktu':
	$page = "include 'template/kontaktu.php';";
	break;
	
	default:
	$page = "include 'template/content.php';";
	break;
}

$CONTENT['main'] = $page;

?>