<?php
require_once '../model/DB.php';
require_once '../model/personneDb.php';
	if(isset($_POST['nom'])){
		extract($_POST);
		$identite =$db->quote($identite);
		$nom=$db->quote($nom);
		$prenom=$db->quote($prenom);
		$pere=$db->quote($pere);
		$mere=$db->quote($mere);
		$domicile=$db->quote($domicile);
		$pers_a_cont=$db->quote($pers_a_cont);
		$genre=$db->quote($genre);
		$nationalite=$db->quote($nationalite);
		$profession=$db->quote($profession);
		$lieu =$db->quote($lieu);
		$dateNaiss =$db->quote($dateNaiss);
		$email=$db->quote($email);
	     $db->query(AjoutPersonne($identite,$nom,$prenom,$profession,$nationalite,$dateNaiss,$lieu,$pere,$mere,$domicile,$pers_a_cont,$email,$phone,$genre));
 		$result = 1;
		header( "location: ../view/personne/addPersonne.php?ok=$result");
	    /* $db->prepare("insert into citoyen values(?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
	    if($db->exec(array($identite,$nom,$prenom,$id_profession,$nationalite,$dateNaiss,$lieu,$pere,$mere,$domicile,$pers_a_cont,$email,$phone,$genre)))*/
	
	}
 if (isset($_GET['id'])){
	 	$id =$db->quote($_GET['id']);
		$db->query("DELETE FROM `citoyen` WHERE `citoyen`.`numIdentite` = $id");
		$result=1;
		header( "location: ../view/personne/list.php?ok=$result");
	}
?>