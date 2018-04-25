<?php 
	function addConcerner($idR,$idP){
		$sql = "INSERT into concerner VALUES(null, $idR,$idP)";

		return ($sql);
	}

	function updateConcerner($idC,$idR,$idP){
		$sql = "UPDATE concerner SET idR = $idR,
									 idP = $idP
									WHERE idC = $idC";

		return ($sql);
	}

	function deleteConcerner($idR,$idP){
		$sql = "DELETE FROM concerner WHERE idR = $idR AND idP = $idP";

		return ($sql);
	}

	function listeConcerner(){
		$sql = "SELECT * FROM concerner";

		return ($sql);
	}

	function getConcernerById($idC){
		$sql = "SELECT * FROM concerner WHERE idC = $idC";

		return ($sql);
	}

	function getPieceByRenouvellement($idR){
		$sql = "SELECT idP FROM concerner WHERE idR = $idR";

		return ($sql);
	}

 ?>