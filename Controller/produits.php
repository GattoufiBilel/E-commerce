<?php

class Crud_produit {
       
        private $conn ; 
        function __construct(){
            $obj = new Config(); 
            $this->conn = $obj->getConnexion(); 
        }
         
 

        function getAllProducts() {
        
        // Creation de la Requette selectionner toute les categorie
            $req = "SELECT * FROM produits" ;

        // execution de la req
            $res = $this->conn->query($req) ;

        // affiche resultats
            $produits = $res->fetchAll() ;

        //var_dump($produits);

        return $produits;

        }

        function searchProduits($keyword){


        // Creation de la Requette selectionner toute les categorie
        $req = "SELECT * FROM PRODUITS WHERE nom LIKE '%$keyword%' ";
        // execution de la req
        $res = $this->conn->query($req) ;

        // affiche resultats
        $produits = $res->fetchAll() ;

        //var_dump($produits);

        return $produits;

        }

        function getProduitById($id) {

            
            $req = " SELECT * FROM produits where id = $id ";
            $res = $this->conn->query($req) ;
            $produit = $res->fetch() ;
            return $produit;

        }

}