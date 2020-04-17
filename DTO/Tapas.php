<?php

Class Tapas
{
    private $idTapas;
    private $quantite;
    private $nbExemplaires;
    private $idCategorie;
    
    function getIdTapas() 
    {
        return $this->idTapas;
    }

    function getQuantite()
    {
        return $this->quantite;
    }

    function getNbExemplaires() 
    {
        return $this->nbExemplaires;
    }

    function getIdCategorie() 
    {
        return $this->idCategorie;
    }

    function setIdTapas($idTapas) 
    {
        $this->idTapas = $idTapas;
    }

    function setQuantite($quantite) 
    {
        $this->quantite = $quantite;
    }

    function setNbExemplaires($nbExemplaires) 
    {
        $this->nbExemplaires = $nbExemplaires;
    }

    function setIdCategorie($idCategorie) 
    {
        $this->idCategorie = $idCategorie;
    }

}
