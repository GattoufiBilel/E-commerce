<!DOCTYPE html>
<html lang="fr">

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
    <link rel="stylesheet" href="../style.css">
</head>

<body>
<!--
<div class="container-fluide">
        <div class="row col-12 bg-back text-center p-1 texteheader">
            <div class="col-5">
                <p class="text">
                    Besoin d'aide ?
                </p>
            </div>

            <div class="col-4">
                <p class="text">
                    Appellez le <span> 71 000 .000 </span>
                </p>

            </div>

            <div class="col-3 social-media">

                <a href="#">
                    <img src="images/L/fb.png" width="45" hieght="45">
                </a>

                <a href="#">
                    <img src="images/lo/yt.png" width="50" hieght="50">
                </a>

                <a href="#">
                    <img src="images/lo/linke.png" width="60" hieght="60">
                </a>

            </div>

        </div>
    </div>

-->


<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-center">
        <div class="container-fluid">
            <a class="navbar-brand" href="http://localhost/Ecommerce/">E SHoP</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent justify-content-center">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 justify-content-center">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Categories
                </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <?php
                                foreach ($categories as $categorie) {
                                    print '<li><a class="dropdown-item" href="#">'.$categorie['nom'].'</a></li> ' ; 
                                }
                            ?>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="http://localhost/Ecommerce/View/registre.php">Registre</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="http://localhost/Ecommerce/View/connexion.php">Se Connecter</a>
                    </li>

                </ul>
                <form class="d-flex" action="index.php" method="POST">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>