<?php 
	
	try{
       $db= new PDO('mysql:host=localhost;dbname=tchad;',
           'root',
           ''
           // force l'encodage utf8
       );
       $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
       $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
       //var_dump($db);

	}catch (ErrorException $e)
   {
       echo 'impossible de se connecter à  la BD';
       echo $e->getMessage();
   }
 ?>


   
