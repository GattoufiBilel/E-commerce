
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
include "../Model/CrudProduits.php" ;
//include "../Model/visiteur.php";


if (isset($_POST['search']))
{
        $nom= $_POST['search'];


        $crud_prod = new Crud_Produit();
        $res = $crud_prod->ChercherProd($nom);

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
                    header('Refresh:3; http://localhost/Ecommerce/') ;

            }

            else
                    {

                      echo
                          "<script>
                              Swal.fire({
                                  position: 'top-center',
                                  icon: 'error',
                                  title: 'Produit Non trouvé 😟 ',
                                  showConfirmButton: false,
                                  timer: 4000
                              })
                          </script> " ;

                          header('Refresh:2;  http://localhost/Ecommerce/') ;
                    }
}


?>
