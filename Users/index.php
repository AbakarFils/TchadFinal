<?php 
	include 'head.php';
 ?>
<div id="accueil">
	<?php 
		include 'slider.php';
	?>	
</div>
<?php 
	include 'consul.php';
?>




							<!----------------------------Demande de Visa--------------------------!-->
	<div id="visa">
		<div class="container">
			<div class="row">
				<!-----------------Debout séjour ----------!-->
				<div class="modal fade" id="sejour" role="dialog">
					<div class="modal-dialog">
						<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">VISA SEJOUR</h4>
							</div>
							<div class="modal-body">
								<ul class="list-group">
									<li class="list-group-item">Passeport en cours de validité d'au moins 6 mois</li>
									<li class="list-group-item">1 formulaire de demande de visa</li>
									<li class="list-group-item">1 photo d’identité</li>
									<li class="list-group-item">Justificatif d’hébergement au Tchad avec adresse exacte (invitation et réservation d’hôtel)</li>
									<li class="list-group-item">Ordre de Mission /de Service (Fonctionnaires)</li>
									<li class="list-group-item">Lettre de Recommandation de l’Entreprise (Hommes d’affaires) </li>
									<li class="list-group-item">Vaccination contre la Fièvre jaune</li>
								</ul>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
							</div>
						</div>
					</div>
				</div>
				<!-----------------fin de séjour ----------!-->
				<!-----------------Debut Transit ----------!-->
				<div class="modal fade" id="transit" role="dialog">
					<div class="modal-dialog">
						<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">VISA TRANSIT</h4>
							</div>
							<div class="modal-body">
								<ul class="list-group">
									<li class="list-group-item">le Passeport en cours de validité</li>
									<li class="list-group-item">1 formulaire de demande de visa</li>
									<li class="list-group-item">1 photo d’identité</li>
									<li class="list-group-item">Le visa préalable du pays traversé avant d’arriver au Tchad</li>
									<li class="list-group-item">La vaccination contre la Fièvre Jaune</li>
									<li class="list-group-item">Le tarif est le même que pour un visa de séjour. </li>
								</ul>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
							</div>
						</div>
					</div>
				</div>
				<!-----------------fin de Transit ----------!-->
				
				<!-----------------Debut Affaires ----------!-->
				<div class="modal fade" id="affaires" role="dialog">
					<div class="modal-dialog">
						<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">VISA Affaire</h4>
							</div>
							<div class="modal-body">
								<ul class="list-group">
									<li class="list-group-item">1 Passeport valable au moins 6 mois</li>
									<li class="list-group-item">2 photos d'identité</li>
									<li class="list-group-item">1 formulaire de demande de visa</li>
									<li class="list-group-item">Attestation de voyage ou copie des billets d'avion</li>
									<li class="list-group-item">Invitation d'un correspondant</li>
									<li class="list-group-item">Lettre de la société attestant le motif, l'hébergement et la prise en charge de tout frais supplémentaire du séjour</li>
									<li class="list-group-item">Un certificat d'hébergement ou réservation hotelière</li>
									<li class="list-group-item">Copie du carnet de vaccination (Fièvre Jaune)</li>
								</ul>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
							</div>
						</div>
					</div>
				</div>
				<!-----------------fin de Affaires ----------!-->
				<div class="text-center">
					<h3>Demande de VISA</h3>
					<p><a href="1.pdf" ><h4 class="form-download">Télécharger le Formulaire</h4></a><br> </p>
				</div>
				<div class="col-md-4 wow fadeInLeft" data-wow-offset="0" data-wow-delay="0.3s">
					<div class="text-center">
						<a href="#sejour" data-toggle="modal">
							<div class="box">
								<i class="fa fa-map-marker" aria-hidden="true"></i>
								<h2>Visa Séjour</h2>
								<p>Vous voulez découvrir notre beau pays, vous voulez un visa pour le Tchad<br></p>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-4 wow fadeInLeft" data-wow-offset="0" data-wow-delay="0.6s">
					<div class="text-center">
						<a href="#transit" data-toggle="modal">
							<div class="box">
								<i class="fa fa-exchange" aria-hidden="true"></i>
								<h2>Visa Transit</h2>
								<p>Vous etes transitaires, vous voulez un visa pour exercer votre activité entre les deux pays</p>
							</div>
						</a>
					</div>
				</div>
				
				<div class="col-md-4 wow fadeInRight" data-wow-offset="0" data-wow-delay="1.2s">
					<div class="text-center">
						<a href="#affaires" data-toggle="modal">
							<div class="box">
								<i class="fa fa-bar-chart" aria-hidden="true"></i>
								<h2>Visa Affaires</h2>
								<p>Homme d'affaires voulant faire des affaires au Tchad<br><br></p>
							</div>
						</a>
					</div>
				</div>
			</div><!---row-----!-->
		</div><!--container!-->
	</div><!--#visa---!-->





	<div id="tourismeetCulture">
		<div id="presentation">
			<div class="container">
					
				<div class="panel-group" id="accordion">
                      <div class="panel">
                          <div class="panel-heading">
                              <h4 class="panel-title">
                                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#relief">
                                      Relief
                                  </a>
                              </h4>
                          </div>
                          <div id="relief" class="panel-collapse collapse in">
                              <div class="panel-body">
                                  Le relief du Tchad est comparable à une cuvette bordée par deux couronnes de montagnes et de plateau : au Nord avec le massif de Tibesti ( 3415 m au volcan de l’Emi Koussi) et à l’Est par le plateau gréseux de l’Ouaddaï (1360m) s’abaissant vers le Sud-Ouest. La zone la plus basse est occupée par le Lac Tchad, réceptacle final de vastes plaines d’inondation des fleuves Chari et Logone.
											Ces deux fleuves constituent l’unique réseau fluvial : le Cari coule sur 1200km depuis la Centrafrique et son principal affluent le Logone naît au Cameroun sur 1000km. Tous deux confluent à l’approche de la capitale. Ils sont en partie navigables quatre mois par an. Il y a cinq lacs principaux : Tchad, Fitri, Iro, Lere, Tekem. Les eaux y sont très poissonneuses mais rendues dangereuses par la bilharziose et le ver de Guinée.
                              </div>
                          </div>
                      </div>
                      <div class="panel">
                          <div class="panel-heading">
                              <h4 class="panel-title">
                                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#histoire">
                                      Histoire
                                  </a>
                              </h4>
                          </div>
                          <div id="histoire" class="panel-collapse collapse">
                              <div class="panel-body">
                                  L’histoire du Tchad remonte au Xe siècle, lorsque les Sao s’établissent au sud du Lac Tchad. Ces Sao, aujourd’hui disparus, sont ls ancêtres de plusieurs populations de la région tchadienne parmi lesquelles les Kotokos, peuple important de chasseurs et de pêcheurs. De nombreuses pièces de terre cuite et de bronze fabriquées par les Sao et représentant des êtres humains et des animaux ont été retrouvées au sud du Lac Tchad.
											Dans la seconde moitié du XIXe siècle, l’Europe découvre l’existence du Tchad par les récits des voyageurs Cheik El Toussi, Barth (1857) et Nachtigal (1879).
											Plusieurs Etats puissants se constituèrent, s’affrontèrent, se dominèrent tout à tour ; le royaume du Kanem-Bornou, le sultanat de Barguirmi, le puissant empire Ouaddaï étendirent successivement leur domination sur la majeure partie actuelle du pays entre le Ixe et la fin du XVIIIe siècle.
											La fondation de N’djaména (ex Fort-Lamy), future capitale du Tchad, et le rétablissement de la paix dans le royaume de Baguirmi et dans le royaume voisin du Ouaddaï mirent un terme aux luttes. Il faut attendre 1913 pour que le Tchad soit entièrement constitué.
											En 1940, Félix Eboué, gouverneur du Tchad, décide le ralliement du pays à la France libre. C’est du Tchad que pourra partir le Général Leclerc, et les soldats tchadiens seront à Paris pour la Libération.
											Proclamé République le 28 novembre 1958, le Tchad accède à la souveraineté internationale le 11 août 1960. Depuis cette date, le pays connaît une évolution institutionnelle et politique.
											Des années de dictature et de parti unique ont empêché l’éclosion de toute culture démocratique et  de pluralisme politique.
                              </div>
                          </div>
                      </div>
                      <div class="panel panel-primary">
                          <div class="panel-heading">
                              <h4 class="panel-title">
                                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#geo">
                                      Géographie
                                  </a>
                              </h4>
                          </div>
                          <div id="geo" class="panel-collapse collapse">
                              <div class="panel-body">
                                  Trait d’union entre le Maghreb et l’Afrique noire, carrefour des caravanes transsahariennes et berceau des civilisations nomades, ce pays cristallise en lui les contrastes entre le désert du Nord et la savane du Sud, les ascétiques traditions musulmanes et les rites animistes ou chrétiens élaborés, les populations nomades vivant au rythme de leur chameau et au gré de pâturages, et les agriculteurs sédentaires s’employant à domestiquer la terre et à lui donner un visage humain.
											Le Tchad est un pays d’Afrique centrale qui s’étend sur un territoire d’une superficie de 1.284.000 km2, 560 km2 sont à vocation agricole. Vingtième pays au monde par sa superficie, le Tchad est le cinquième pays le plus grand pays d’Afrique après le Soudan, l’Algérie, la République Démocratique du Congo et la Libye.
											Ce pays se caractérise par son immensité (2 fois plus grands que la France) mais aussi par son enclavement et son éloignement de la mer. Il est situé à 1700 km de Douala (Cameroun) et 2 400 km de Port Soudan sur la mer rouge.
											Ses frontières sont communes avec le Soudan à l’Est, la République Centrafricaine et le Cameroun du Sud, le Nigeria à l’Ouest, le Niger au Nord –Ouest et la Libye au Nord.								                                  </div>
                          </div>
                      </div>
                      <div class="panel panel-primary">
                          <div class="panel-heading">
                              <h4 class="panel-title">
                                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#climat">
                                      Climat
                                  </a>
                              </h4>
                          </div>
                          <div id="climat" class="panel-collapse collapse">
                              <div class="panel-body">
                                  Le climat est un climat tropical humide au sud (zone soudanienne la plus arrosée et la plus peuplée), offrant un paysage de savane arborée et de forêt plus clairsemée à l’approche des villages en raison de la coupe abusive du bois. Le climat de la zone centrale est de type sahélien caractérisé par une steppe épineuse, fortement marqué par une saison sèche plus longue que la saison des pluies. Le Nord, soumis à un climat saharien désertique aux paysages contrastés, représente la moitié de la superficie du pays.
											L’harmattan, un vent continental sec et chaud, est porteur de vents en provenance de l’Est et du Nord-Ouest du Sahara. La mousson, équatoriale, humide et fraîche avec des vents du Sud-Ouest, rythme saison sèche et saison des pluies.
											Le territoire compte 600 000 hectares de forêts classées et 400 000 hectares de parcs nationaux. Les deux parcs les plus importants offrant le plus de variétés d’espèces sont le célèbre parc national de Zakouma dans le Salamat et celui de Manda dans la préfecture de Sarh.
                              </div>
                          </div>
                      </div>
                 </div>
			</div>
		</div><!--Presentation-->
		
		<?php 
			include 'portfolio.php';
		 ?>




	<!--Forms-->
	<section id="contact">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 form wow fadeInLeft" data-wow-duration="3s" data-wow-delay="1s">
					<h3>Nous Contacter..</h3>
					<p>Pour toutes vos suggestions, critiques, questions ou pour plus d'informations merci de nous contacter </p>
					
					<form>
						<div class="form-group">
							<input type="text" name="name"  placeholder="Votre Nom" class="form-control" id="name">
						</div>
						<div class="form-group">
						</div>
						<div class="form-group">
							<textarea name="text" placeholder="Votre message" class="form-control" id="email" rows="6"></textarea>
						</div>
						<button type="submit" class="btn btn-block">Envoyer</button>
					</form>
				</div>
				<div class="col-sm-6 text-center frames wow fadeInRight" data-wow-duration="3s" data-wow-delay="1s">
					<h1>LOCALISATION</h1>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3859.121555586744!2d-17.46216938555372!3d14.705717189735578!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xec17294e19c0b3b%3A0x4deb19d759e8d26a!2sConsulat+du+Tchad!5e0!3m2!1sen!2ssn!4v1510864945434" width="100%" height="550px" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</section>
	<div class="clearfix"></div>
	<div id="footer" class="container-fluid">
		<div class="row">
			<div class="col-sm-6 col-md-3">
				<h4>&copy; Copyright - 2017 by Tchad-Up</h4>
			</div>
			<div class="col-sm-6 col-md-3">
				<i class="fa fa-phone" aria-hidden="true" style="display: inline; margin-right: 5px;"></i>
				<h4 style="display: inline; font-family: Times;">33 824 50 17</h4>
			</div>
			<div class="col-sm-6 col-md-3">
				<h4>Consulat Tchad à Dakar</h4>
			</div>
			<div class="col-sm-6 col-md-3">
				<h4>Sénégal 2017</h4>
			</div>
		</div>
	</div>

		<script src="JS/jquery.min.js"></script>
	<script type="text/javascript" src="JS/script.js"></script>
	<script type="text/javascript" src="JS/filter.js"></script>
											
	<script src="JS/jquery-2.1.1.min.js"></script>
	<script src="JS/bootstrap.min.js"></script>
	
	<script src="JS/wow.min.js"></script>
	
<script>
	new WOW().init();
	</script>
	<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>

	
	</body>
</html>