<?php
include '../Entete/header.php';
?>
		 <div class="card-panel teal col s8">
            <div class="card-content white-text">
              <span class="card-title center-align"><h1>Ajout de Personnes</h1></span>
				<form class="col s10 " id="msform" onsubmit="return false">
					  <!-- progressbar -->
			      <ul id="progressbar">
			        <li class="active">Informations Personnelles</li>
			        <li>Origines</li>
			        <li>Contact</li>  
			      </ul>
			        <fieldset>
			        	<h2 class="fs-title">Informations Personnelles</h2>
       				    <h3 class="fs-subtitle">C'est Parti!</h3>
       				    <div class="row ">
							<div class="input-field col s10">
								<i class="material-icons prefix">account_circle</i>
								<input id="Identite" type="text" length="10" name="identite">
								<label for="Identite">Identite</label>
							</div>
						</div>
						<div class="row ">
							<div class="input-field col s10">
								<i class="material-icons prefix">account_circle</i>
								<input id="name" type="text" length="10" name="nom">
								<label for="name">Nom</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s10">
								 <i class="material-icons prefix">account_circle</i>
								<input id="prenom" type="text" length="10" name="prenom">
								<label for="prenom">Prénom</label>
							</div>
						</div>
						<div class="row">
							<i class="material-icons prefix">supervisor_account</i>		
						      <input name="genre" type="radio" id="homme" checked value="M" />
						      <label for="homme">Homme</label>
						    
						      <input name="genre" type="radio" id="Femme" value="F" />
						      <label for="Femme">Femme</label>
						</div>
						<div class="row">
							<div class="input-field col s10">
								<i class="material-icons prefix">event</i>
								<input type="date" class="datepicker" id="dateNaiss" name="dateNaiss">
								<label for="dateNaiss">Date de Naissance</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s10">
								<i class="material-icons prefix">place</i>
								<input id="lieu" type="text" length="10" name="lieu">
								<label for="lieu">Lieu de Naissance</label>
							</div>
						</div>
						<input type="button" name="next" class="next action-button" value="Suiv" />
					</fieldset>

					<fieldset>
						<h2 class="fs-title">Origines</h2>
        				<h3 class="fs-subtitle">Deuxième étape</h3>
						<div class="row">
							<div class="input-field col s10">
								<i class="material-icons prefix">flag</i>
								<input id="nationalite" type="text" length="10" name="nationalite">
								<label for="nationalite">Nationalite</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s10">
								<i class="material-icons prefix">work</i>
								<select id="profession" name="profession">
									<option  value="" disabled selected>Sélectionner Profession</option>
									<option value="Etudiant">Etudiant</option>
									<option value="Ingénieur">Ingénieur</option>
									<option value="Comptable">Comptable</option>
									<option value="Professeur">Professeur</option>
								</select>
								<label for="profession">Profession</label>
							</div>
						</div>
						
						
						<div class="row">
							<div class="input-field col s10">
								<i class="material-icons prefix">person_pin</i>
								<input id="Pere" type="text" length="10" name="pere">
								<label for="Pere">Père</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s10">
								<i class="material-icons prefix">person_pin_circle</i>	
								<input id="Mere" type="text" length="10" name="mere">
								<label for="Mere">Mère</label>
							</div>
						</div>
						<input type="button" name="previous" class="previous action-button" value="Prec" />
        				<input type="button" name="next" class="next action-button" value="Suiv" />
					</fieldset>

					<fieldset>
						<h2 class="fs-title">Contact</h2>
        				<h3 class="fs-subtitle">Dernière étape</h3>
						<div class="row">
							<div class="input-field col s10">
								<i class="material-icons prefix">email</i>
								<input  id="email" type="email" class="validate" name="email">
								<label for="email" data-error="wrong" data-success="right">Email</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s10">
								   <i class="material-icons prefix">phone</i>
								<input id="phone" type="text" length="10" name="phone">
								<label for="phone">Téléphone</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s10">
								<i class="material-icons prefix">place</i>
								<input id="domicile" type="text" length="10" name="domicile">
								<label for="domicile">Domicile</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s10">
								   <i class="material-icons prefix">contact_phone</i>
								<input id="Contact" type="text" length="10" name="pers_a_cont">
								<label for="Contact">Numéro Personne à Contacter</label>
							</div>
						</div>
						  <input type="button" name="previous" class="previous action-button" value="Prec" />
       					  <button type="button" onclick="submitForm()" class="btn waves-effect waves-light submit" />
								 <i class="material-icons center">send</i>
       					</button>
					</fieldset>
				<!--<div class="row center-align">
				    <button class="btn waves-effect waves-light" type="submit" name="action">Enregistrer
				       
				    </button>
				</div>-->
			</form>
	</div>
</div>





<script src="../../public/JS/jquery-2.1.1.min.js"></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
 <script  src="../../public/JS/index 2.js"></script>
<script src="../../public/JS/materialize.js"></script>
<script>
	$(document).ready(function() {
		$('select').material_select();
		$('.datepicker').pickadate({
		    selectMonths: true, 
		    selectYears: 15 
  		});
  		 $(".button-collapse").sideNav();

   	    Waves.attach('.YOUR-Button-Class', ['waves-button', 'waves-float']);
	});
	function submitForm(){
		document.getElementById("msform").method = "post";
		document.getElementById("msform").action = "../../controller/personneController.php";
		document.getElementById("msform").submit();
	}
</script>
	</body>
</html>