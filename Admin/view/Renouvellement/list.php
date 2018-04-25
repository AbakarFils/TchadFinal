

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
                      Liste pieces de Renouvellement ou de Perte
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
                        <tr  class="teal-text">
                         
                           <th><i class="fa fa-info-circle"></i> Libellé</th>  
                           <th><i class="fa fa-book"></i> Formalité</th>                                   
                           <th><center>Action</center></th>
                           <th><center>Action</center></th>
                           <th><center>Action</center></th> 
                           <th>Voir Pieces</th>
                        </tr>

                        <?php 
                        
                        require_once '../../model/DB.php';
                         require_once '../../model/renouvellementDB.php';
                         require_once '../../model/formaliteDB.php';
                          $renouvellements = $db->query(listeRenouvellement());
                          $renouvellement =  $renouvellements->fetchAll();
                          foreach ($renouvellement as $Ren )
                          {
                            $forms = $db->query(getFormaliteById($Ren->idF));
                            $resu=$forms->fetchAll();
                            foreach ($resu as $key) {

                              $libF = $key->libF;
                               echo "
                          <tr>
                                <td>".$Ren->libR."</td>   
                                <td>".$libF."</td>     
                                <td><a href='list.php?idR=".$Ren->idR."&op=edit&libR=".$Ren->libR."&idF=".$Ren->idF."&libF=".$libF."'><i class='fa fa-edit text-success'></i>Editer</a></td>
                                <td><a href='../../controller/renouvellementCtrl.php?idR=".$Ren->idR."' onclick='return getConfirmation();'><i class='fa fa-trash-o text-danger'></i>Supprimer</a></td>                             
                                <td><a href='../Pieces/add.php?idR=".$Ren->idR."&libR=".$Ren->libR."'><i class='fa fa-plus text-primary'></i>Ajouter Piece</a></td>
                                <td><a href='../Pieces/list.php?idR=".$Ren->idR."&libR=".$Ren->libR."&op=seePieces'><i class='fa fa-eye text-info'></i>Voir</a></td>
                          </tr>";
                            }

                          }
                          
                       ?>
                        <!-- ****************************Modification Renouvellement**********************-->
                        <?php 
                          if (isset($_GET['op']) && $_GET['op'] == "edit"){
                            extract($_GET);
                            echo "
                                <form  method='post' accept-charset='utf-8' action='../../controller/renouvellementCtrl.php' >
                                     <input type='hidden' class='form-control' name='idR' id='idR' required='required' value='$idR'>
                                  <td class='form-group'>
                                    <input type='text' name='libR' value='$libR' class='form-control'>
                                  </td>
                                  <td class='form-group'>
                                  <select name='idF' class='form-control'>
                                      <option value='$idF'>$libF</option>";

                                       $formalites = $db->query(listeFormalite());
                                        foreach( ($formalite = $formalites->fetchAll()) as $forma )
                                        {
                                          echo "
                                             <option value=".$forma->idF.">".$forma->libF."</option>";
                                          }
                                    echo "
                                  </select>
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
                       <!-- ****************************Ajout Renouvellement!**********************-->
                      <tr>
                        <td colspan="6"><hr></td>
                      </tr>
                       <tr>
                         <form  method="post" accept-charset="utf-8" action="../../controller/renouvellementCtrl.php" >
                          <div class="row"></div>
                            <td class="input-field ">
                              <input type="text" name="libR" id="libR">
                              <label for="libR">Nom du Document à renouveller </label>
                              
                            </td>
                            </div>
                            <td class="input-field">
                                <select name='idF'">
                                      <option value="" disabled selected>Formalité</option>
                                        <?php
                                         $formalites = $db->query(listeFormalite());
                                          foreach( ($formalite = $formalites->fetchAll()) as $forma ){
                                            echo "
                                               <option value=".$forma->idF.">".$forma->libF."</option>";
                                            }
                                         ?>
                                  </select>
                            </td>   
                            <td class="form-group text-center" colspan="2">
                              <input type="submit" name="Valider" value="Ajouter" class="btn btn-success">
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
    <script  type="text/javascript" charset="utf-8" async defer>
        $(document).ready(function() {
         $('select').material_select();
      });
    </script>
    </body>
  </html>                          