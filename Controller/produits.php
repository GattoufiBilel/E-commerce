<?php


function getAllProducts() {

//Connextion vers BD
$conn = getConnextion();

// Creation de la Requette selectionner toute les categorie
    $req = "SELECT * FROM produits" ;

// execution de la req
    $res = $conn->query($req) ;

// affiche resultats
    $produits = $res->fetchAll() ;

//var_dump($produits);

return $produits;

}

function searchProduits($keyword){

//Connextion vers BD
$conn = getConnextion();

// Creation de la Requette selectionner toute les categorie
$req = "SELECT * FROM PRODUITS WHERE nom LIKE '%$keyword%' ";
// execution de la req
$res = $conn->query($req) ;

// affiche resultats
$produits = $res->fetchAll() ;

//var_dump($produits);

return $produits;

}

function getProduitById($id) {

    $conn = getConnextion();
    $req = " SELECT * FROM produits where id = $id ";
    $res = $conn->query($req) ;
    $produit = $res->fetch() ;
    return $produit;

}
