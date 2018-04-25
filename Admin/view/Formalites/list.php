<?php
include '../Entete/header.php';
?>

  <div class="container">
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
       <div class="row">
          <div class="col-lg-12">
              <section class="panel">
                  <header class="panel-heading teal white-text">
                     <p>
                      <i class="material-icons prefix">list</i>
                      Liste de Formalités
                    </p>
                  </header>
                     <?php
                          if (isset($_GET['formajoute'])){
                            if ($_GET['formajoute'] == 1){
                              echo "<div class='alert alert-success'>
                                Données Ajoutées avec succés
                              </div>";
                            }else{
                              echo "<div class='alert alert-warning'>
                                Erreur!!! Données non ajoutées
                              </div>";
                            }
                          }

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
                            }
                          }
                      ?>
                  <table class="table table-striped table-advance table-hover">
                     <tbody>
                        <tr class="teal-text">
                         
                           <th><i class="fa fa-info-circle"></i> Libellé</th>                                  
                           <th colspan="3"><center>ACTION</center></th>
      
                           <th>Voir Pieces</th>
                        </tr>

                        <?php 
                        
                         require_once '../../model/DB.php';
                         require_once '../../model/formaliteDB.php';
                         
                          $formalites = $db->query(listeFormalite());
                          $formalite = $formalites->fetchAll();?>
                        <?php foreach ($formalite as $forma) : ?>
                          <tr>
                                <td><?=$forma->libF?></td>       
                                <td><a class='text-success' href='list.php?idF=<?=$forma->idF?>&op=edit&libF=<?=$forma->libF?>'><i class='fa fa-edit'></i>Editer</a></td>
                                <td><a class='text-danger' href="../../controller/formaliteCtrl.php?idF=<?=$forma->idF?>" onclick='return getConfirmation();'><i class='fa fa-trash-o'></i>Supprimer</a></td>                             
                                <td><a  class='black-text' href='../Pieces/add.php?idF=<?=$forma->idF?>&libF=<?=$forma->libF?>'><i class='fa fa-plus'></i>Ajouter Piece</a></td>
                                <td><a class='black-text' href='../Pieces/list.php?idF="<?=$forma->idF?>"&libF="<?=$forma->libF?>"&op=seePieces'><i class='fa fa-eye'></i>Voir</a></td>
                          </tr>
                      
                       <?php endforeach ;?>
                        <!-- ****************************Modification Formalité!**********************-->
                        <?php 
                          if (isset($_GET['op']) && $_GET['op'] == "edit"){
                            extract($_GET);
                            echo "
                                <form  method='post' accept-charset='utf-8' action='../../controller/formaliteCtrl.php' >
                                     <input type='hidden' class='form-control' name='idF' id='idF' required='required' value='$idF'>
                                  <td class='form-group'>
                                    <input type='text' name='libF' value='$libF' class='form-control'>
                                  </td>

                                  <td class='form-group text-center' colspan='2'>
                                    <input type='submit' name='Modifier' value='Modifier' class='btn btn-success btn-lg'>
                                  </td>      
                                  <td class='form-group text-center' colspan='2'>
                                    <input type='reset'name='Annuler' value='Annuler' class='btn btn-danger btn-lg'>
                                  </td>  
                               </form>
                            ";
                          }
                         ?>
                       <!-- ****************************Ajout Formalité!**********************-->
                       <tr>
                         <td colspan="6"><hr/></td>
                       </tr>
                       <tr>
                         <form  method="post" accept-charset="utf-8" action="../../controller/formaliteCtrl.php" >

                            <td class="input-field">
                              <input type="text" name="libF"  id="libF" >
                              <label for="libF">Nom de la Formalité</label>
                            </td>

                            <td class="form-group text-center" colspan="2">
                              <input type="submit" name="Valider" value="ajouter formalite" class="btn btn-lg">
                            </td>      
                            
                          </form>
                       </tr>
                     </tbody>
                  </table>
                  <!-- ****************************Voir Pieces!**********************-->

              </section>
            </div>
        </div>
      </div> 

    <script src="../../public/JS/jquery-2.1.1.min.js"></script>
    <script src="../../public/JS/bootstrap.min.js"></script>
    <script src="../../public/JS/materialize.js"></script>
    </body>
  </html>                          