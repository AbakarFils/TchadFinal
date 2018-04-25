<?php
  
    function AjoutPersonne($identite,$nom,$prenom,$id_profession,$nationalite,$dateNaiss,$lieu,$pere,$mere,$domicile,$pers_a_cont,$email,$phone,$genre)
    {
        $requet ="INSERT INTO `citoyen` (`numIdentite`, `nom`, `prenom`, `id_profession`, `nationalite`, `date_naissance`, `lieu_naissance`, `Pere`, `mere`, `domicile`, `num_pers_contact`, `mail`, `phone`, `genre`) VALUES ($identite,$nom,$prenom,$id_profession,$nationalite,$dateNaiss,$lieu,$pere,$mere,$domicile,$pers_a_cont,$email,$phone,$genre) ";
            return $requet;
    }

    function listPers()
    {
        $requet = "SELECT * from citoyen";
        return $requet;
    }
?>