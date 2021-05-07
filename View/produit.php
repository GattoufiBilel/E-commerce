<?php
//Connextion vers BD
include "../Config/connect.php";
include "../Controller/categories.php";
include "../Controller/produits.php";

$crud_product = new Crud_produit(); 
//$produit = $product->getProduitById($_GET['id']) ; 

if (isset($_GET['id'])) {
    $produit = $crud_product->getProduitById($_GET['id']) ; 
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E commerce</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <!---->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">

    <!-- CSS-->
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <!-- debut navbar-->
   <?php
     include "../inc/header.php" ;
   ?>
    <!-- fin nav bar -->

    <!-- Liste du produits -->
<div class="container">
    <div class="row col-12 mt-4">
        <div class="card col-8 offset-2">
        <img src="$produit['image']" class="card-img-top" alt="produit">
        <div class="card-body">
            <h5 class="card-title"><?php echo $produit['nom'] ; ?> </h5>
            <p class="card-text"><?php echo $produit['description'] ; ?></p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><?php echo $produit['prix'] ; ?> DT</li>
            <li class="list-group-item">Catégorie : <?php echo $produit['categorie'] ; ?></li>
        </ul>
        </div>
    </div>
</div>
    <!-- fin liste des produits -->


    <!-- footer-->

    <?php
    include "../inc/footer.php";
    ?>
    <!-- fin footer -->

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>


</html>