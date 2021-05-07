!<!DOCTYPE html>
<html lang=fr dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.16.6/sweetalert2.min.css">

  </head>
  <body>


<?php
//include "../View/registre.php";
include "../Config/connect.php" ;
include "../Model/CrudVisiteurs.php";
//include "../Model/visiteur.php";
//include "../Model/visiteur.php";


if (!empty($_POST['Add']))
    {
        $nom = $_POST['nom'] ;
        $prenom = $_POST['prenom'] ;
        $email = $_POST['email'] ;
        $mp = $_POST['mp'] ;
        $telephone = $_POST['telephone'] ;

        $user = new Visiteurs ($nom,$prenom,$email,$mp,$telephone) ;
        $Crud_user = new Crud_Visiteur() ;
        $Crud_user->AjouterUser($user);
    }

?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.16.6/sweetalert2.min.js"> </script>

<?php
    if (!empty($nom)) {
          //  echo " Inscription bien Enregistre ". $nom ;
            echo "<script>
                    Swal.fire({
                        position: 'top-center',
                        icon: 'success',
                        title: 'Your work has been saved',
                        showConfirmButton: false,
                        timer: 4000
                    })
             </script> " ;
            header('Refresh:3; http://localhost/Ecommerce/View/connexion.php') ;

    }

?>


</body>
</html>
