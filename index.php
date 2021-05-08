<?php
//Connextion vers BD
include "Config/connect.php";
include "Controller/categories.php";
include "Controller/produits.php";


$crud_pr = new Crud_produit();

if (!empty($_POST)) {
    echo "Produit chercher est ".$_POST['search'] ;
    //$produits=searchProduits($_POST['search']) ;
    $crud_pr->searchProduits($_POST['search']) ;
}
else {
    //$produits = getAllProducts();
        $crud_pr->getAllProducts();
}

//$produits = getAllProducts();

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
    <link rel="stylesheet" >

</head>

<body>

    <!-- debut navbar-->
   <?php
     include "inc/header.php" ;
   ?>
    <!-- fin nav bar -->

    <!-- Liste du produits -->
<div class="container">
    <div class="row col-12 mt-4">
        <?php
            $produits=$crud_pr->getAllProducts();
            foreach ($produits as $produit){
                print ' <div class="col-3 mb-4">
                <div class="card" style="width: 18rem;">
                    <img src="images/produits/'.$produit['image'].' " class="card-img-top" alt="..." width="50px" hieght="50px">
                    <div class="card-body">
                        <h5 class="card-title">'.$produit['nom'].'</h5>
                        <p class="card-text">'.$produit['description'].'</p>
                        <a href="View/produit.php?id='.$produit['id'].' "class="btn btn-primary">Afficher</a>
                </div>
                </div>
                </div>' ;
            }

        ?>
    </div>
</div>
    <!-- fin liste des produits -->


    <!-- footer-->

    <?php
    include "inc/footer.php";
    ?>
    <!-- fin footer -->

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>


</html>
