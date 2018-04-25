<?php 
	function addFormalite($libF){
		$sql = "INSERT into formalite VALUES(null, '$libF')";

		return ($sql);
	}

	function updateFormalite($idF,$libF){
		$sql = "UPDATE formalite SET libF = '$libF'
									WHERE idF = $idF ";

		return ($sql);
	}

	function deleteFormalite($idF){
		$sql = "DELETE FROM formalite WHERE idF = $idF";

		return ($sql);
	}

	function listeFormalite(){
		$sql = "SELECT * FROM formalite";

		return ($sql);
	}

	function getFormaliteById($idF){
		$sql = "SELECT * FROM formalite WHERE idF = $idF";

		return ($sql);
	}

 ?>