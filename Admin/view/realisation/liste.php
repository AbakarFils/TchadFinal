    <?php
  
    include '../Entete/header.php';
    include '../../model/DB.php';
    include 'controllerRealisation.php';
 
    /**
     * Suppression
     */
    if(isset($_GET['delete'])){
        //checkCsrf();
        $id=$db->quote($_GET['delete']);
        $db->query("Delete From realisation WHERE  realisation_id=$id");
        //setFlash("la réalisations a bien été supprimée","danger");
        header("location:liste.php");
    }
    $select=$db->query("select * from realisation");
    $realisation = $select->fetchAll();
    ?>
 <div class="container">
    <h1>les réalisations</h1>
     <p><a href="add.php" class=" btn btn-success">ajout une nouvelle actualité</a> </p>
    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Nom</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
            <?php foreach ($realisation as $work):?>
                <tr>
                    <td><?=$work->realisation_id?></td>
                    <td><?=$work->name?></td>
                    <td>
                        <a href="add.php?id=<?php echo $work->realisation_id?>" class="btn-default"><i class='fa fa-edit text-success'></i>Editer</a>
                        <a href="?delete=<?=$work->realisation_id?>" class="btn btn-error" onclick="confirm('sûr de sûr ?')"><i class='fa fa-trash-o text-danger'></i>Supprimer</a>
                    </td>
                    <?php if($work->etat==1)
                       {
                         echo 
                        "
                         <td>
                        <a href='add.php?id=".$work->realisation_id."&etat=0' class='btn-default'><i class='fa fa-edit text-success'></i>Desactiver</a>
                        </td>
                        ";
                    }else 
                    {
                         echo 
                        "
                         <td>
                        <a href='add.php?id=".$work->realisation_id."&etat=1' class='btn-default'><i class='fa fa-edit text-success'></i>Activer</a>
                        </td>
                        ";
                    }
                    ?>
                </tr>
            <?php endforeach; ?>
        </tbody>

    </table>

 </div>
    <?php include_once 'footer.php'?>