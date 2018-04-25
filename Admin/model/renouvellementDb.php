<?php 
	function addRenouvellement($libR,$idF){
		$sql = "INSERT into renouvellement VALUES(null,'$libR',$idF)";

		return ($sql);
	}

	function updateRenouvellement($idR,$libR,$idF){
		$sql = "UPDATE renouvellement SET libR = '$libR',
										  idF = $idF
									WHERE idR = $idR";

		return ($sql);
	}

	function deleteRenouvellement($idR){
		$sql = "DELETE FROM renouvellement WHERE idR = $idR";

		return ($sql);
	}

	function listeRenouvellement(){
		$sql = "SELECT * FROM renouvellement";

		return ($sql);
	}

	function getRenouvellementById($idR){
		$sql = "SELECT * FROM renouvellement WHERE idR = $idR";

		return ($sql);
	}

 ?>