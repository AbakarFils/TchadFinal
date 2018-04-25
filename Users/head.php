<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Consul du TCHAD || Sénégal</title>
		<!-------Liens CSS-------!-->
		<link href="CSS/bootstrap.min.css" rel="stylesheet">
		   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link  href="CSS/font-awesome.min.css" rel="stylesheet">
		<link href="CSS/animate.min.css" rel="stylesheet">
		<link  type="text/css" href="CSS/magnific-popup.css" rel="stylesheet">
		<link href="CSS/style.css" rel="stylesheet" />
		<link href="CSS/bootstrap-responsive.min.css" rel="stylesheet" />

	
	</head>
	<?php ?>
	<body>
		<!------------------------nav !-----------------------------------------!-->
		<header id="header">
			<nav class="navbar navbar-fixed-top" role="banner">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand topnav" href="index.html">
							<img src="Images/logo.png" class="img-responsive">
						</a>
					</div>
					<div class="collapse navbar-collapse" id="menu">
						<ul class="nav navbar-nav navbar-right">
							<li class="active">
								<a href="#consul" >Accueil</a>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" id="formalites" data-toggle="dropdown">Formalités
									<span class="caret"></span>
								</a>
								<!--Formalites!-------------->
								<?php 
									require_once '../Admin/model/DB.php' ;
									 require_once '../Admin/model/formaliteDB.php';

									 $formalites =  $db->query(listeFormalite());
									 $resu =  $formalites->fetchAll()
								?>
								<ul class="dropdown-menu " role="menu" aria-labelledby="formalites">
									<?php foreach ($resu as $formalite):?>
										<?php if($formalite->libF=="visa"): ?>
											<li role="presentation"><a role="menuitem" href="#<?php echo $formalite->idF ?>">Demande de <?php echo $formalite->libF ?></a></li>
										<?php endif?>
										<?php if($formalite->libF!="visa"): ?>
									<li role="presentation"><a role="menuitem" href="#<?php echo $formalite->idF ?>
									" data-toggle="modal"><?php echo $formalite->libF?></a></li>
									<?php include 'mdlFormalite.php'?>
								
										<?php endif?>
									<?php endforeach?>
								</ul>	
			
								
								<!-------Fin Formalites----------------!-->
							</li>
							
							
							<?php 
								include 'mdlCharte.php';
							?>
							<?php 
								include 'mdlIndicateurs.php';
							?>
							
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" id="tourisme" data-toggle="dropdown">Tourisme et Culture
									<span class="caret"></span>
									
								</a>
								<!--Tourisme!-------------->
								<ul class="dropdown-menu " role="menu" aria-labelledby="tourisme">
									<li role="presentation"><a role="menuitem" href="#presentation">Présentation</a></li>
									<li role="presentation"><a role="menuitem" href="#Tourismes">Tourisme</a></li>
									<li role="presentation"><a role="menuitem" href="#culture">Culture</a></li>
								</ul>
								<!-------Fin Tourisme----------------!-->
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" id="investir" data-toggle="dropdown">Investir au Tchad
									<span class="caret"></span>
								</a>
								<!--Investir!-------------->
								<ul class="dropdown-menu " role="menu" aria-labelledby="investir">
									<li role="presentation"><a role="menuitem" href="#charte" data-toggle="modal">La Charte des Investissements</a></li>
									<li role="presentation"><a role="menuitem" href="#indicateurs" data-toggle="modal">Indicateurs économiques</a></li>
								</ul>
								<!-------Fin Investir----------------!-->
							</li>
							<li>
								<a href="#contact">Contact</a>
							</li>
						</ul>
					</div>
				</div><!--/.container-->
			</nav><!--/nav-->
		</header><!--/header-->
					<!-------------------------- Navigation || Fin -------------------------------!-->