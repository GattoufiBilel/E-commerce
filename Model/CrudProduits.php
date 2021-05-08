<?php
  //include '../Config/connect.php';

  include 'produit.php';

    class Crud_Produit {

            private $cx;

        function __construct() {
            $obj = new Config();
            $this->cx=$obj->getConnexion();
        }

  function AjouterProd(Produits $prod)
        {  $nom=$prod->getNom();
           $description=$prod->getDescription();
           $prix=$prod->getPrix();
           $image=$prod->getImage();



          $sql="insert into visiteurs (nom, description, prix, image) values ('$nom','$description','$prix','$image')";
          $resultat=$this->cx->exec($sql);
          return($resultat);

        }



  function ChercherProd ($nom) {
   $req = 'select * from produits WHERE nom = "'.$nom.'" ' ;

   // $req = "select * from visiteurs wehre email = '$email' AND' mp = '$mp' ";

  $res = $this->cx->query($req) ;

  $produit =  $res->fetch();

  return $produit;

}

}
?>
