<?php 
	function addPiece($libP){
		$sql = "INSERT into piece VALUES(null, '$libP')";

		return ($sql);
	}

	function updatePiece($idP,$libP){
		$sql = "UPDATE piece SET libP = '$libP'
									WHERE idP = $idP";

		return ($sql);
	}

	function deletePiece($idP){
		$sql = "DELETE FROM piece WHERE idP = $idP";

		return ($sql);
	}

	function listePiece(){
		$sql = "SELECT * FROM piece";

		return ($sql);
	}

	function getPieceById($idP){
		$sql = "SELECT * FROM piece WHERE idP = $idP";

		return ($sql);
	}

	

 ?>