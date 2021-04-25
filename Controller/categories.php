<?php

//Connextion vers BD
include "connect.php";

// Creation de la Requette selectionner toute les categorie
    $req = "SELECT * FROM categories" ;

// execution de la req
    $res = $conn->query($req) ;

// affiche resultats
    $categories = $res->fetchAll() ;

//var_dump($categories);
