<?php

Class Visiteurs {

    private  $nom ; 
    private  $prenom;
    private  $email;
    private  $mp;
    private  $telephone; 

    function __construct($nom,$prenom,$email,$mp,$telephone){
        $this->nom = $nom; 
        $this->prenom = $prenom;
        $this->email = $email; 
        $this->mp = $mp ; 
        $this->telephone = $telephone ; 
    }

    function getNom(){
         return $this->nom ; 
    }

    function getPrenom(){
         return $this->prenom ; 
    }

    function getEmail(){
         return $this->email ; 
    }

    function getMp(){
         return $this->mp ; 
    }

    function getTelephone(){
         return $this->telephone ; 
    }


    function setNom($nom) {
        $this->nom = $nom ; 
    }

    function setPrenom($prenom) {
        $this->prenom = $prenom ; 
    }

    function setEmail($email) {
        $this->email = $email ; 
    }

    function setMp($mp) {
        $this->mp = $mp ; 
    }

    function setTelephone($telephone) {
        $this->telephone = $telephone ; 
    }



}

?>