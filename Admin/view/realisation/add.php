<?php 
    include '../Entete/header.php';
    include '../../model/DB.php';
    include 'controllerRealisation.php';
 ?>
 <div class="container">
    <h1>Ajouter Réalisation</h1>
        <div class="row">
            <div class="col-md-8"> 
                <form action="#"  method="post" ENCTYPE="multipart/form-data">
                    <div class="row ">
                        <div class="input-field">
                           
                            <input type='text'  id='name' name='name' value=''>
                            <label for='name'>Nom de la réalisation</label>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="input-field">
                           
                            <textarea type='text' class="materialize-textarea" id='textarea1' name='contenu' ></textarea>
                             <label for='textarea1'>Contenu de la réalisation</label>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="file-field input-field">
                            <div class="btn">
                                <span>Image</span>
                                <input type="file" name="image[]" multiple>
                                <input type="file" name="image[]" class="hidden" id="duplicate">
                            </div>

                           <div class="file-path-wrapper">
                                 <input class="file-path validate" type="text" placeholder="Sélectionner une image">
                           </div><br>
                        </div>
                    </div>
                    <div class="row ">
                     <div class="input-field">
                        <button type="submit" class="btn right">Enregistrer</button>
                      </div>
                    </div>
                </form>
            </div>
            <div class="col-md-4">
                <h4><i class="material-icons medium prefix teal-text">event</i><a href="Liste.php" class="btn-link">Actualités</a></h4>
                <h6> <i class="material-icons medium prefix teal-text">photo_camera</i></h6>
                <?php foreach($images as $img):?>
                   <a href="?delete_image=<?=$img->id  ?>" onclick="confirm('Sûr de Sûr')" >
                       <img src="../img/realisation/<?=$img->name?>" width="100">
                   </a>
                <?php endforeach?>

            </div>
        </div>
    </div>
    <?php ob_start();?>
        <script src="../../public/JS/jquery-2.1.1.min.js"></script>
        <script src="../../public/JS/tinymce/js/tinymce/tinymce.min.js">
        </script>
       <script src="../../public/JS/materialize.js"></script>

            <script>
                // ce script permet de faire un choix multiple d'image
                (function ($) {
                    $('#duplicatebtn').click(function(e)
                    {
                         e.preventDefault();
                        var $clone= $('#duplicate').clone().attr('id','').removeClass('hidden');
                        $('#duplicate').before($clone);
                    })
                })(jQuery);
                // celui-ci genère la partie de mise en forme de text
                tinymce.init({
                    selector: 'textarea',
                    mode:'textarea',
                    theme:'advanced',
                    height: 300,
                    theme: 'modern',
                    image_advtab: true,
                    templates: [
                        { title: 'Test template 1', content: 'Test 1' },
                        { title: 'Test template 2', content: 'Test 2' }
                    ]

                });
                $('#textarea1').val('New Text');
                 $('#textarea1').trigger('autoresize');
            </script>
    <?php $script= ob_get_clean(); ?>
    <?php include_once 'footer.php'?>