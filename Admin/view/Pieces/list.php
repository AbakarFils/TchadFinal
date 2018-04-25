<?php
include '../Entete/header.php';
?>



  <script type="text/javascript">
  function getConfirmation(){
      var ok=confirm("Voulez vous vraiment supprimer ?");
      if(ok == true){
          return true;
      }else{
          return false;
      }
  }
  </script>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <?php 

          if (isset($_GET['formupdated'])){
                            if ($_GET['formupdated'] == 1){
                              echo "<div class='alert alert-success'>
                                Données Modifiées avec succés
                              </div>";
                            }else{
                              echo "<div class='alert alert-warning'>
                                Erreur!!! Données non modifiées
                              </div>";
                            }
                          }

                           if (isset($_GET['formdeleted'])){
                            if ($_GET['formdeleted'] == 1){
                              echo "<div class='alert alert-success'>
                                Données Supprimées avec succés
                              </div>";
                            }else{
                              echo "<div class='alert alert-warning'>
                                Erreur!!! Données non supprimées
                              </div>";
                            }}
                          ?>
                          <?php
            if(isset($_GET['libF'])&&isset($_GET['idF'])){
              echo "
           
          <section class='panel'>
            <header class='panel-heading teal white-text'>
              <i class='fa fa-bars'></i>".$_GET['libF']."
            </header>
            <table class='table table-striped table-advance table-hover'>
              
              <tbody>
                <tr class='teal-text'>
                  
                  <th><i class='fa fa-info-circle'></i> Libellé</th>
               
                  <th>Action</th>
                </tr>";
                
                require_once '../../model/DB.php';
                require_once  '../../model/appartenirDB.php';
                require_once  '../../model/pieceDb.php';
                
                extract ($_GET);
              $idis =  $db->query(getPieceByFormalite($idF));
                $ids = $idis->fetchAll();
                foreach ($ids as $p )
                {
                    $pieces =$db->query(getPieceById($p->idP ));
                    $piece = $pieces->fetchAll();
                    foreach ($piece as $p) {
                      echo "<tr>
                              <td>".$p->libP." ".$p->idP."</td>
                              <td><a href='../../controller/pieceCtrl.php?idP=".$p->idP."&idF=$idF' onclick='return getConfirmation();'><i class='fa fa-trash-o text-danger'></i>Supprimer</a></td>
                            </tr>";
                    }
                }}   
              ?>
              </tbody>
            </table>
          </section>
        <?php
         if(isset($_GET['libR'])&&isset($_GET['idR'])){
         
              echo "
           
          <section class='panel'>
            <header class='panel-heading teal white-text'>
              <i class='fa fa-bars'></i>".$_GET['libR']."
            </header>
            <table class='table table-striped table-advance table-hover'>
              
              <tbody>
                <tr class='teal-text'>
                  
                  <th><i class='fa fa-info-circle'></i> Libellé</th>
               
                  <th>Action</th>
                </tr>";
                
                require_once '../../model/DB.php';
                require_once  '../../model/concernerDb.php';
                require_once  '../../model/pieceDb.php';
                
                extract ($_GET);
               $idis =  $db->query( getPieceByRenouvellement($idR));
                                  $ids = $idis->fetchAll();
                                  foreach ($ids as $p )
                                   {
                                    $pieces =$db->query(getPieceById($p->idP ));
                                    $piece = $pieces->fetchAll();
                                    foreach ($piece as $p) {
                                      echo "<tr>
                                              <td>".$p->libP."</td>
                                              <td><a href='../../controller/pieceCtrl.php?idP=".$p->idP."&idR=$idR''  onclick='return getConfirmation();'><i class='fa fa-trash-o text-danger'></i>Supprimer</a></td>
                                            </tr>";
                                    }
                               }}   ?>
              </tbody>
            </table>
          </section>
              <button type='button' data-toggle='collapse' data-target='#allPieces' class='text-center btn btn-info'>Voir toutes les pièces <i class='fa fa-eye'></i></button>
            <div class="collapse" id=allPieces>

              <section class="panel">
                <header class="panel-heading teal white-text">
                  <p>
                      <i class="material-icons prefix">list</i>
                      Liste de Pièces
                    </p>
                </header>
                <table class="table table-striped table-advance table-hover">
                  
                  <tbody>
                    <tr class="teal-text">
                      
                      <th><i class="fa fa-info-circle"></i> Libellé</th>
                      <th>Action</th>
                      <th>Action</th>
                    </tr>
                   
                    <?php 
                      require_once '../../model/DB.php';
                      require_once '../../model/pieceDb.php';

                      $pieces =$db->query(listePiece());
                      $piece =$pieces->fetchAll(); ?>
                    <?php foreach ($piece as $p) :?>   
                      <tr>
                        <td><?=$p->libP?></td>
                          <td><a href='list.php?idP=<?=$p->idP?>&op=edit'><i class='fa fa-edit text-success'></i>Editer</a></td>
                        <td><a href='../../controller/pieceCtrl.php?idP=<?=$p->idP?>' onclick='return getConfirmation();'><i class='fa fa-trash-o text-danger'></i>Supprimer</a></td>
                      </tr>
                    <?php endforeach ?>
                  </tbody>
                </table>
              </section>

            </div>
                 <!-- ****************************Modification Piéce!**********************-->
                        <?php 
                          if (isset($_GET['op']) && $_GET['op'] == "edit"){
                            extract($_GET);
                            require_once '../../model/DB.php';
                            require_once '../../model/pieceDb.php';
                            $p =$db->query(getPieceById($idP));
                            $piece =$p->fetchAll();
                            foreach ($piece as  $pi) {
                              $idP =$idP;
                              $libP=$pi->libP;
                            echo ' 
                                <form  method="post" accept-charset="utf-8" action="../../controller/pieceCtrl.php" >
                                     <input type="hidden" class="form-control" name="idP" id="idP" required="required" value="'.$idP.'">
                                  <td class="form-group">
                                    <input type="text" name="libP" value="'.$libP.'" class="form-control">
                                  </td>

                                  <td class="form-group text-center" colspan="2">
                                    <input type="submit" name="Modifier" value="Modifier" class="btn btn-success btn-lg">
                                  </td>      
                                  <td class="form-group text-center" colspan="2">
                                    <input type="reset" name="Annuler" value="Annuler" class="btn btn-danger btn-lg">
                                  </td>  
                               </form>
                            ';
                            }
                          }
                         ?>

        </div>
      </div>
    </div>
    <script src="../../public/JS/jquery-2.1.1.min.js"></script>
    <script src="../../public/JS/bootstrap.min.js"></script>
  </body>
