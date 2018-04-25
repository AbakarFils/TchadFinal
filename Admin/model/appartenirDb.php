<?php 
	function addAppartenir($idF,$idP){
		$sql = "INSERT into appartenir VALUES(null, $idF,$idP)";

		return ($sql);
	}

	function updateAppartenir($idAp,$idF,$idP){
		$sql = "UPDATE appartenir SET idF = $idF,
									 idP = $idP
									WHERE idAp = $idAp";

		return ($sql);
	}

	function deleteAppartenir($idF,$idP){
		$sql = "DELETE FROM appartenir WHERE idF = $idF AND idP = $idP";

		return ($sql);
	}

	function listeAppartenir(){
		$sql = "SELECT * FROM appartenir";

		return ($sql);
	}

	function getAppartenirById($idAp){
		$sql = "SELECT * FROM appartenir WHERE idAp = $idAp";

		return ($sql);
	}

	function getPieceByFormalite($idF){
		$sql = "SELECT idP FROM appartenir WHERE idF = $idF";

		return ($sql);
	}
 ?>