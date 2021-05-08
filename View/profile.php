<?php
session_start();
?>

<!DOCTYPE html>
<html lang=fr dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.16.6/sweetalert2.min.css">
  </head>

  <style>

.cadre{
   width:100px ;
   hight: 100px ;
   background-color: tomato ; 
   border-raduis: 60px;
  </style>

  <body>
    <h1 style="text-primary ; text-align: center">Bienvenue dans votre profile </h1>
    <p>
      <?php
        echo "welcome :".$_SESSION['nom'] ;
        echo " prenom : ".$_SESSION['prenom'] ;
        echo " email  : ".$_SESSION['email'] ;
      ?>
    </p>

    <div class="cadre">

    </div>
  </body>
</html>
