<?php

Class Categorie
{
    private $idCategorie;
    private $nomCategorie;
    
    
    function getIdCategorie() 
    {
        return $this->idCategorie;
    }

    function getNomCategorie() 
    {
        return $this->nomCategorie;
    }

    function setIdCategorie($idCategorie) 
    {
        $this->idCategorie = $idCategorie;
    }

    function setNomCategorie($nomCategorie) 
    {
        $this->nomCategorie = $nomCategorie;
    }

}

?>