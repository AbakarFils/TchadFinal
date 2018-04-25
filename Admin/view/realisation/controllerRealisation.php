<?php
    /**
     * sauvegarde ou MAJ
     */
    if(isset($_POST['name']) )
    {
        
        
        $name =($_POST['name']);
        $name =$db->quote($name);
        $contenu=($_POST['contenu']);
        $contenu= $db->quote($contenu);
       {
            /**
             * s'il s'agit d'une update
             */
            if(isset($_GET['id']))
            {
                $id= $db->quote($_GET['id']);
                if($db->query("UPDATE  realisation set name=$name,  contenu =$contenu WHERE id_realisation = $id")){

                    //setFlash("la categorie a été bien Modifiée");
                    header('location:add.php?ok=1');
                }else{
                    //setFlash("Erreur Quelque part",'danger');
                    header('location:add.php?ok=0');
                }
                die();
            }
            else
            {
				// nouvelle insertion                
                $name =$db->quote($_POST["name"]);
                $contenu= $db->quote($_POST['contenu']);
                $db->query("insert into realisation set name=$name,  contenu =$contenu ");
                /**
                 * j'envoie tous les images a poste pour un evenement donnée
                 */
                $_GET['id']=$db->lastInsertId();
                $realisation_id=$db->quote($_GET['id']);
                if (!empty($files['image'])) {
                    $files =$_FILES['image'];
                }
                $files =$_FILES['image'];
                $images= array();
                foreach($files['tmp_name'] as $k =>$v)
                {
                    $image =array(
                        'name'=>$files['name'][$k],
                        'tmp_name'=>$files['tmp_name'][$k]);

                    $extension = pathinfo($image['name'],PATHINFO_EXTENSION);
                    if(in_array($extension,array('jpg','pgj','jpeg'))){
                        $db->query("insert into image set realisation_id=$realisation_id");
                        $image_id=$db->lastInsertId();
                        $image_name=$image_id.'.'.$extension;//nom image
                        move_uploaded_file($image['tmp_name'],'../img/realisation/'.$image_name);// sauve image ds le dossier
                        $image_name =$db->quote($image_name);
                        $image_id =$db->quote($image_id);
                        $db->query("UPDATE image SET name= $image_name WHERE id=$image_id");// maj du nom ds la BD

                    }
                }
                header('location:add.php');
                die();
            }

        }
        {
            //setFlash("le Slug n'est pas Valid","danger");
            //header('location:work.php');
        }
    }
    /***
     * Moidification d'une categorie
     */
    if(isset($_GET['id']))
    {
        $id= $db->quote($_GET['id']);
        $select = $db->query("select * from realisation WHERE  realisation_id=$id");
        if($select->rowCount()==0)
        {
           // setFlash("Il n'ya pas de Réalisation avec cette ID","Danger");
            header('location:add.php');
            die();
        }else{

            $_POST= $select->fetch();
        }
    }
  
    /**
     *  charge les les images à coté
     */
    if(isset($_GET['id']))
    {
        $work_id =$db->quote($_GET['id']);
        $selection =$db->query("select id, name from image  WHERE realisation_id=$work_id");
        $images= $selection->fetchAll();
    }
    else
    {
        $images =array();
    }
    /**
     * supression d'une image
     */
    if(isset($_GET['delete_image']))
    {
        $id= $db->quote($_GET['delete_image']);
        $select =$db->query("SELECT name ,work_id from image id=$id");
        $image =$select->fetchAll();
        unlink('../img/realisation/'.$image['name']);
        $db->query("DELETE name from image WHERE  id=$id");
    }

    if(isset($_GET['etat'])){
        $id= $db->quote($_GET['id']);
        $select = $db->query("UPDATE realisation SET etat = 1 WHERE  realisation_id = $id");
        //$images = $select->fetchAll();
        $db->query("UPDATE realisation SET etat = 0 WHERE  realisation_id != $id");
        header("location:liste.php");

    }
    ?>