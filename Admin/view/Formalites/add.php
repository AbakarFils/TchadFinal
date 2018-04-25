<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ajout Formalite</title>
	<link rel="stylesheet" type="text/css" href="../../public/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../../public/css/style.css">
</head>
<body>
	

	<?php
				if (isset($_GET['ok'])){
		 		if ($_GET['ok'] == 1){
		 			echo "<div class='alert alert-success'>
		 				Données Ajoutées avec succés
		 			</div>";
		 		}else{
		 			echo "<div class='alert alert-warning'>
		 				Erreur!!! Données non ajoutées
		 			</div>";
		 		}
		 	}
		  ?>
		<div class="container">
			<fieldset>
				<legend class="text-center">Ajout Formalité</legend>
				<form  method="post" accept-charset="utf-8" action="../../controller/formaliteCtrl.php" >
						<div class="form-group">
							<input type="text" name="libF" placeholder="Nom de la formalite" class="form-control">
						</div>

						<div class="form-group text-center">
							<input type="submit" name="Valider" value="Valider" class="btn btn-angel btn-lg">
						</div>				
					</form>
			</fieldset> 
		</div>


</body>
</html>