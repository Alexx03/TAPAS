<?php

Class Commande
{
    private $idCommande;
    private $dtaeCommande;
    private $idGroupe;
    
    function getIdCommande() 
    {
        return $this->idCommande;
    }

    function getDtaeCommande() 
    {
        return $this->dtaeCommande;
    }

    function getIdGroupe()
    {
    
        return $this->idGroupe;
    }

    function setIdCommande($idCommande) 
    {
        $this->idCommande = $idCommande;
    }

    function setDtaeCommande($dtaeCommande) 
    {
        $this->dtaeCommande = $dtaeCommande;
    }

    function setIdGroupe($idGroupe) 
    {
        $this->idGroupe = $idGroupe;
    }

}