<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ajout Renouvellement</title>
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
				<legend class="text-center">Ajout Renouvellement</legend>
				<form  method="post" accept-charset="utf-8" action="../../controller/renouvellementCtrl.php" >
						<div class="form-group">
							<input type="text" name="libR" placeholder="Libellé" class="form-control">
						</div>
						<select name="idF" >
							<option value="">Formalité</option>
							<?php 
								require_once '../../model/DB.php';
								require_once '../../model/formaliteDb.php';

								 $formalites = $db->query(listeFormalite());
								 $formalite =$formalites->fetchAll();
                                ?>
                                <?php foreach($formalite as $forma): ?> 
                               		 <option value="$formalite->idF"><?=$forma->libF?></option>
                               	<?php endforeach; ?>
						</select>

						<div class="form-group text-center">
							<input type="submit" name="Valider" value="Valider" class="btn btn-angel btn-lg">
						</div>				
					</form>
			</fieldset> 
		</div>


</body>
</html>