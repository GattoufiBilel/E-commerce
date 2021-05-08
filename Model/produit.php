<?php

Class Produits {

    private  $nom ;
    private  $description;
    private  $prix;
    private  $image;


    function __construct($nom,$description,$prix,$image){
        $this->nom = $nom;
        $this->description = $description;
        $this->prix = $prix;
        $this->image = $image ;

    }

    function getNom(){
         return $this->nom ;
    }

    function getDescription(){
         return $this->description ;
    }

    function getPrix(){
         return $this->prix;
    }

    function getImage(){
         return $this->image ;
    }


    function setNom($nom) {
        $this->nom = $nom ;
    }

    function setDescription($description) {
        $this->description = $description ;
    }

    function setPrix($prix) {
        $this->prix = $prix ;
    }

    function setImage($image) {
        $this->image = $image ;
    }



}

?>
