<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CDN Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <?php if($_SERVER['PHP_SELF'] == "/index.php"){?>
    <!-- Mon CSS perso pour la page d'accueil -->
    <link rel="stylesheet" href="/assets/css/style_main.css">
    <?php } else{ ?>
    <!-- Le CSS perso pour les autres pages -->
    <link rel="stylesheet" href="/assets/css/style.css">
    <?php } ?>
    
    <!-- CDN Fontawesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet"> 

    <?php if($_SERVER['PHP_SELF'] == "/index.php"){?>
    <title>Accueil | Phetsouvan Souvannavong</title>
    <?php }else if($_SERVER['PHP_SELF'] == "/qui.php"){?>
    <title>Qui-suis-je | Phetsouvan Souvannavong</title>
    <?php }else if($_SERVER['PHP_SELF'] == "/contact.php"){?>
    <title>Me contacter | Phetsouvan Souvannavong </title>
    <?php }else if($_SERVER['PHP_SELF'] == "/realisations.php"){?>
    <title>Mes réalisations | Phetsouvan Souvannavong</title>
    <?php } ?>        
</head>
<body>
    
    <!-- Début du HEADER -->

    <header>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="/index.php">Accueil</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="/qui.php">Qui-suis-je ?<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact.php">Me contacter</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/realisations.php">Mes réalisations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" target="_blank" href="https://www.linkedin.com/in/phetsouvan-souvannavong"> <i class="fab fa-linkedin fa-lg"></i> Linkedin</a>
                    </li>
                </ul>
            </div>
            </nav>
        </div>
    </header>

    <!-- Fin du HEADER -->