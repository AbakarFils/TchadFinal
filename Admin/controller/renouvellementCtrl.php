<?php 
	require_once '../model/DB.php';
	require_once '../model/renouvellementDb.php';


	if (isset($_POST['Valider'])){		
		extract($_POST);
		$result = 1;
		$db->query(addRenouvellement($libR,$idF));
		header( "location: ../view/Renouvellement/list.php?formajoute=$result");
	}
    if (isset($_POST['Modifier'])){
		extract($_POST);
		$result = 1;
		$db->query(updateRenouvellement($idR,$libR,$idF));
		header( "location: ../view/Renouvellement/list.php?formupdated=$result");
	}

	 if (isset($_GET['idR'])){
	
		$result = 1;
		$db->query(deleteRenouvellement($_GET['idR']));
		header( "location: ../view/Renouvellement/list.php?formdeleted=$result");
	}


 ?>