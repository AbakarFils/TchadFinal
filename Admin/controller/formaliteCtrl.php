<?php 
	require_once '../model/DB.php';
	require_once '../model/formaliteDb.php';

if (isset($_POST['Valider'])){
		extract($_POST);
		$result = 1;
		$db->query(addFormalite($libF));
		header( "location: ../view/Formalites/list.php?formajoute=$result");
	}
   if (isset($_POST['Modifier'])){
		extract($_POST);
		$result =1;
		$db->query( updateFormalite($idF,$libF));
		header( "location: ../view/Formalites/list.php?formupdated=$result");
	}
	 if (isset($_GET['idF'])){
	
		$result =1; 
		$db->query(deleteFormalite($_GET['idF']));
		header( "location: ../view/Formalites/list.php?formdeleted=$result");
	}


 ?>