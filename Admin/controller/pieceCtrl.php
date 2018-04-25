<?php 
	require_once '../model/DB.php';
	require_once '../model/pieceDb.php';
	require_once '../model/appartenirDb.php';
	require_once '../model/concernerDb.php';

	if (isset($_POST['Valider'])){
		extract($_POST);
		if(isset($idF)){
			
			$result = 1;
			$db->query(addAppartenir($idF,$idP));
			header( "location: ../view/Formalites/list.php?ok=$result");
		}
		if(isset($idR)){
			/*echo "<pre>";
			var_dump($_POST);
			var_dump($db->query(addConcerner($idR,$idP)));
			echo "</pre>";
			die();*/
			$result = 1;
			$db->query(addConcerner($idR,$idP));
			header( "location: ../view/Renouvellement/list.php?ok=$result");
		}
		if(isset($libP)){
			$result = 1;
			$db->query(addPiece($libP));
			if(isset($idF)){
                header( "location: ../view/Pieces/add.php?idF=$idF&libF=$libF");
            }
            if(isset($idR)){
                header( "location: ../view/Pieces/add.php?idR=$idR&libR=$libR");
            }

		}

	}	
	 if (isset($_POST['Modifier'])){
		extract($_POST);
		$result = 1;
		$db->query(updatePiece($idP,$libP));
		header( "location: ../view/Pieces/list.php?formupdated=$result");
	}

	 if (isset($_GET['idP'])){
	 	if(isset($_GET['idF'])){
		$result = 1;

		$db->query(deleteAppartenir($_GET['idF'],$_GET['idP']));
		header( "location: ../view/Pieces/list.php?formdeleted=$result");
	   }else if(isset($_GET['idR'])){
	   		$result = 1;

			$db->query(deleteConcerner($_GET['idR'],$_GET['idP']));
			header( "location: ../view/Pieces/list.php?formdeleted=$result");
	   }else{
	   		$result = 1;

		 $db->query(deletePiece($_GET['idP']));
		 header( "location: ../view/Pieces/list.php?formdeleted=$result");
	   }
	}
 ?>