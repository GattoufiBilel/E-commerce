$_session_start();



!<!DOCTYPE html>
<html lang=fr dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Bienvenue dans votre profile </h1>
    <p>
      <?php
        echo "welcome : "$_SESSION['email'] ; 
      ?>
    </p>
  </body>
</html>
