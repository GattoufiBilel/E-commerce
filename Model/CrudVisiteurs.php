<?php
  //include '../Config/connect.php';

  include 'visiteur.php';

    class Crud_Visiteur {

            private $cx;

        function __construct() {
            $obj = new Config();
            $this->cx=$obj->getConnexion();
        }

  function AjouterUser(Visiteurs $visiteur)
        {  $nom=$visiteur->getNom();
           $prenom=$visiteur->getPrenom();
           $email=$visiteur->getEmail();
           $mp=$visiteur->getMp();
           $telephone=$visiteur->getTelephone();

          $sql="insert into visiteurs (nom, prenom, email, mp, telephone) values ('$nom','$prenom','$email','$mp','$telephone')";
          $resultat=$this->cx->exec($sql);
          return($resultat);

        }



  function ChercherUser ($email,$mp) {
   $req = 'select * from visiteurs WHERE email = "'.$email.'" and mp= "'.$mp.'" ' ;

   // $req = "select * from visiteurs wehre email = '$email' AND' mp = '$mp' ";

  $res = $this->cx->query($req) ;

  $user =  $res->fetch();

  return $user ;

}

}
?>
