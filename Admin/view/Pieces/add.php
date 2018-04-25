<?php
include '../Entete/header.php';
?>
	

	
		<div class="container">
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
			<fieldset>
				<legend class="text-center teal white-text">Ajout Pièces</legend>
				<form  method="post" accept-charset="utf-8" action="../../controller/pieceCtrl.php">
					<div class="form-group">
						<?php 
							if(isset($_GET['idF'])){
								$formalite = $_GET['idF'];
								echo "<input class='form-control' type='hidden' readonly name='idF' id='idF' value='".$_GET['idF']."'>
									<div class='input-field'>
									<input type='text' readonly  id='libF' value='".$_GET['libF']."'>

									</div>
								";
							}

							if(isset($_GET['idR'])){
								$renouvellement = $_GET['idR'];
								echo "<input class='form-control' type='hidden' readonly name='idR' id='idR' value=' ".$_GET['idR']."'>
								<div class='input-field'>
									  <input  type='text' readonly name='libR' id='libR' value='".$_GET['libR']."'>
									  </div>
								";
							}

						 ?>
							
					</div>
					<div class="row">
						<div class="input-field col s10">
				
							<select name="idP" id="piece">
								<option value="" disabled selected>Sélectionner Pièce</option>
								<?php 
								require_once '../../model/DB.php';
								require_once '../../model/pieceDb.php';

								 $pieces = $db->query(listePiece());
								 $p=$pieces->fetchAll();
								 ?>
		                       <?php foreach ($p as $forma) : ?>
		                       		<option value="<?=$forma->idP?>" > <?=$forma->libP?></option>;
		                     <?php endforeach ?>
							</select> 
							<label for="piece">Piece</label>
							
						</div>
						<div class="col s2">
							<a class="btn-floating btn-large waves-effect waves-light red" data-toggle="collapse" href="#addPiece"><i class="material-icons">add</i></a>
						</div>
				   </div>
				   
				   

					<div class="form-group text-center">
						<input type="submit" name="Valider" value="Valider" class="btn btn-angel btn-lg">
					</div>				
					</form>
			</fieldset> 
		</div>

    <div id="addPiece" class="collapse col-md-offset-2 col-md-6" >
        <form action="../../controller/pieceCtrl.php" method="post" accept-charset="utf-8">
            <br>
            <?php
            if(isset($_GET['idF'])){
                $formalite = $_GET['idF'];
                echo "<input class='form-control' type='hidden' readonly name='idF' id='idF' value='".$_GET['idF']."'>
									<input class='form-control' type='hidden' readonly name='libF' id='libF' value='".$_GET['libF']."'>
								";
            }

            if(isset($_GET['idR'])){
                $renouvellement = $_GET['idR'];
                echo "<input class='form-control' type='hidden' readonly name='idR' id='idR' value=' ".$_GET['idR']."'>
									  <input class='form-control' type='hidden' readonly name='libR' id='libR' value='".$_GET['libR']."'>
								";
            }

            ?>
            <div class="row">
            <div class="input-field">
                <input type="text" name="libP" id="libP" >
                <label for="libP">Nom du nouveau document</label>
               
            </div>
            </div>
            <div class="form-group">
                <input type="submit" name="Valider" value="Ajouter" class="btn btn-info">
            </div>
        </form>

    </div>
		<script src="../../public/JS/jquery-2.1.1.min.js"></script>
		<script src="../../public/JS/bootstrap.min.js"></script>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
<script  src="../../public/JS/index 2.js"></script>
<script src="../../public/JS/materialize.js"></script>
<script>
	$(document).ready(function() {
		$('select').material_select();

	});
</script>
</body>
</html>