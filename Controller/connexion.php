<?php
session_start();
?>


<!DOCTYPE html>
<html lang=fr dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.16.6/sweetalert2.min.css">
 </head>
  <body>


<?php

include "../Config/connect.php" ;
include "../Model/CrudVisiteurs.php";
//include "../Model/visiteur.php";


if (isset($_POST['verif']))
{

        $_SESSION['email'] = $_post['email'];
        $email = $_POST['email'];
        $mp = $_POST['mp'];


        $crud_user = new Crud_Visiteur();
        $res = $crud_user->ChercherUser($email,$mp);


?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.16.6/sweetalert2.min.js"> </script>

<?php
    if ($res) {
                  //  echo " Inscription bien Enregistre ". $nom ;
                    echo "<script>
                            Swal.fire({
                                position: 'top-center',
                                icon: 'success',
                                title: 'You Welcome 🤠🌼 ',
                                showConfirmButton: false,
                                timer: 4000
                            })
                     </script> " ;
                    header('Refresh:3; http://localhost/Ecommerce/View/profile.php') ;

            }

            else
                    {

                      echo
                          "<script>
                              Swal.fire({
                                  position: 'top-center',
                                  icon: 'error',
                                  title: 'Mail or Password incorrect 😟 ',
                                  showConfirmButton: false,
                                  timer: 4000
                              })
                          </script> " ;

                          header('Refresh:2; ../View/connexion.php') ;
                    }
}


?>
