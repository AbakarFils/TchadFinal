<?php
require_once '../model/DB.php';
require_once '../model/adminDb.php';

if (isset ($_POST['username']) && isset($_POST['password'])){
    extract($_POST); 
     $exist=$db->query(connect($username,$password));
            $reul= $exist->fetchAll();
            $i=0;
            foreach ($reul as $key )
             {
                $i++;
             }

            if($i>0)
            {
                header("location: ../view/personne/list.php?login=$user"); 
            }
            else
            {
                 header("location: ../index.php?erreur=1");
            }      
}

if(isset($_GET['logout'])){
    session_destroy();
    session_unset();
    header("location: ../login.php");
}
?>