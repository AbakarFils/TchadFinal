<!DOCTYPE html>
<html>
	<head>
		<meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
	 <link rel="stylesheet" type="text/css" href="../../public/css/bootstrap.css">
     <link rel="stylesheet" type="text/css" href="../../public/css/font-awesome.css">
     <link rel="stylesheet" type="text/css" href="../../public/css/style.css">
        <link rel="stylesheet" type="text/css" href="../../public/css/animate.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../../public/css/login.css">
        
     <link href="ie10-viewport-bug-workaround.css" rel="stylesheet">
	</head>
<body>	
<style type="text/css">
    
    .navbar-inverse{
        background-color: #009688;
        border: none;
        opacity: 1;
        color: #fff ;
        
    }
    .navbar-brand{
        color: #fff !important;
    }

    ul.nav>li>a{
        color: #fff !important;
    }
    .navbar-inverse{
        min-height:56px;
        height:auto;
    }
   nav .navbar-inverse
   {
    position:relative;
    height:100%;
    }
    .panel-heading{
        background-color: #009688;
        color: #fff;
        text-align: center;
        font-size: 28px;
    }
    .panel{
        border-color: #009688;
    }
</style>
<nav class="navbar navbar-inverse ">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">TCHAD</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
               <li><a href="../../index.php">Accueil</a></li>
                <li><a href="../Formalites/list.php" title="">Formalités</a></li>
                <li><a href="../Renouvellement/list.php" title="">Renouvellement</a></li>
                <li><a href="../realisation/liste.php" title="">Actualités</a></li>
                <li><a href="../personne/list.php" title="">Personne</a></li>
                <li><a href="../Pieces/list.php" title="">Documents</a></li>
            </ul>
        </div>
    </div>
</nav>

<br class="clearfix">

<div class="container-fluid">

 
 	<div class="">
		<a href="addPersonne.php" class="btn-angel btn-angel-circle btn-lg" title="Ajouter Personne">+</a>
	</div>
<br>
 	<div class="panel">
 		<div class="panel-heading">listes Des Compatriotes</div>
 		<div class="panel-body">
            <?php
                if (isset($_GET['ok'])){
                if ($_GET['ok'] == 1){
                    echo "<div class='alert alert-success'>
                        Données supprimer avec succés
                    </div>";
                }else{
                    echo "<div class='alert alert-warning'>
                        Erreur!!! Données non supprimée
                    </div>";
                }
            }
          ?>
 			
 	
            <table class="table table-hover table-striped" >
            	<thead>
                <tr>
                    <th>Numero Identité</th>
                    <th>Nom</th>
                    <th>prenom</th>
                    <th>Profession</th>
                    <th>Domicile</th>
                    <th> Personne à contacter</th>
                   	<th><center>Mail</center></th>
                   	<th>Numéro de Téléphone</th>
                   	<th>Genre</th>
                    <th >Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                include '../../model/DB.php';
                include '../../model/personneDb.php';
               
               
                if(isset($_POST['ok']))
                {
                	$prof=$_POST['Profession'];
                	$requet= $db->query("select from Citoyen where id_profession =$prof");
                	 $users =$requet->fetchAll();
                }
                else
                {
                	 $requet =$db->query(listPers());
                	 $users =$requet->fetchAll();

                }    
                   ?>
                       <?php foreach($users as $user) : ?>
                            <tr>
                                <td><?=$user->numIdentite?></td>
                                <td><?=$user->nom?></td>
                                <td><?=$user->prenom?></td>
                                <td><?=$user->id_profession?></td>
                                <td><?=$user->domicile?></td>
                                <td><?=$user->num_pers_contact?></td>
                                <td><?=$user->mail?></td>
                                <td><?=$user->phone?></td>
                                <td><?=$user->genre?></td>



                                <td><a href="../../controller/personneController.php?id=<?=$user->numIdentite?>" class="delete_data text-danger " ><i class='fa fa-trash-o text-danger' style="color: crimson; font-size: 22px;"></i></a> </td>
                           </tr>
                    
                    <?php endforeach?>
                   
                   </tbody> 
            </table>
 		</div>
 	</div>
     </div>
     <script src="../../public/JS/jquery-2.1.1.min.js"></script>
     <script src="../../public/JS/jquery.dataTables.js"></script>
     <script src="../../public/JS/dataTables.bootstrap.js"></script>
     <script type="text/javascript">
     	$(".table").DataTable(

            {
                "bInfo" : false,
                "aLengthMenu": [[5, 7, 10, -1], [5, 7, 10, "All"]],
                "pageLength": 5,
                "oLanguage":{
                    "sLengthMenu": "Afficher _MENU_  Personnes par page",
                    "sSearch" : "Rechercher ",
                    "zeroRecords": "No Data Found",
                    "info": "Total",
                    "infoEmpty": "No records available",
                    "infoFiltered": "(filtered from _MAX_ total records)",

                }

            }
            );
     </script>
 </body>
 </html> 