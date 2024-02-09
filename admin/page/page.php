<?php 

$page = '';
if(isset($_GET['page'])){
	$page = $_GET['page'];

}

switch ($page) {

		// estudante
	case 'estudante':
	$title = "Dadus Estudante";
	$page = "include 'database/db_proses/estudante/index.php';";
	break;
	case 'uestudante':
	$title = "Form Hadia Dadus Estudante";
	$page = "include 'database/db_proses/estudante/uestudante.php';";
	break;
	case 'destudante':
	$title = "";
	$page = "include 'database/db_proses/estudante/destudante.php';";
	break;
	case 'aestudante':
	$title = "Form Aumenta Dadus Estudante";
	$page = "include 'database/db_proses/estudante/aestudante.php';";
	break;
		// end estudante

		// klase
	case 'klase':
	$title = "Dadus Klase";
	$page = "include 'database/db_master/klase/index.php';";
	break;
	case 'uklase':
	$title = "Form Hadia Dadus Klase";
	$page = "include 'database/db_master/klase/uklase.php';";
	break;
	case 'dklase':
	$title = "";
	$page = "include 'database/db_master/klase/dklase.php';";
	break;
	case 'aklase':
	$title = "Form Aumenta Dadus Klase";
	$page = "include 'database/db_master/klase/aklase.php';";
	break;
		// end fakuldade

		// kandidatu
	case 'kandidatu':
	$title = "Dadus Kandidatu";
	$page = "include 'database/db_proses/kandidatu/index.php';";
	break;
	case 'ukandidatu':
	$title = "Form Hadia Dadus Kandidatu";
	$page = "include 'database/db_proses/kandidatu/ukandidatu.php';";
	break;
	case 'dkandidatu':
	$title = "";
	$page = "include 'database/db_proses/kandidatu/dkandidatu.php';";
	break;
	case 'akandidatu':
	$title = "Form Aumenta Dadus Kandidatu";
	$page = "include 'database/db_proses/kandidatu/akandidatu.php';";
	break;
	case 'dtlkandidatu':
	$title = "Detaillu Kandidatu";
	$page = "include 'database/db_proses/kandidatu/dtlakandidatu.php';";
	break;
		// end kandidatu

		// departamentu
	case 'departamentu':
	$title = "Dadus Departamentu";
	$page = "include 'database/db_master/departamentu/index.php';";
	break;
	case 'udepartamentu':
	$title = "Form Hadia Dadus Departamentu";
	$page = "include 'database/db_master/departamentu/udepartamentu.php';";
	break;
	case 'ddepartamentu':
	$title = "";
	$page = "include 'database/db_master/departamentu/ddepartamentu.php';";
	break;
	case 'adepartamentu':
	$title = "Form Aumenta Dadus Departamentu";
	$page = "include 'database/db_master/departamentu/adepartamentu.php';";
	break;
		// end departamentu


		// data
	case 'data':
	$title = "Dadus Data";
	$page = "include 'database/db_master/data/index.php';";
	break;
	case 'udata':
	$title = "Form Hadia Dadus Data";
	$page = "include 'database/db_master/data/udata.php';";
	break;
	case 'ddata':
	$title = "";
	$page = "include 'database/db_master/data/ddata.php';";
	break;
	case 'adata':
	$title = "Form Aumenta Dadus Data";
	$page = "include 'database/db_master/data/adata.php';";
	break;
		// end data

		// votus
	case 'votus':
	$title = "Dadus Votus";
	$page = "include 'database/db_proses/votus/index.php';";
	break;
	case 'dvotus':
	$title = "";
	$page = "include 'database/db_proses/votus/dvotus.php';";
	break;
		// end votus
	
	default:
	$page = "include 'layout/content.php';";
	break;
}

$CONTENT['main'] = $page;

?>