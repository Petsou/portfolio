<?php

//Inclusion du header:
require_once(__DIR__."/includes/header.php");
?>

<div class="container-fluid mb-5 col-12 d-flex flex-column justify-content-center align-items-center">
    <h1 class="text-center">Mes Réalisations</h1>
</div>

<div class="sommaire bg-white col-9 col-md-5 col-lg-3">
    <h4 style="text-decoration:underline">Sommaire:</h4>
    <ul>
        <li><a href="#html-css">Page en HTML/CSS</a></li>
        <li><a href="#js">Utilisation de Javascript/jQuery</a></li>
        <li><a href="#php">Site de type E-commerce en PHP</a></li>
        <li><a href="#eval-php">Evaluation PHP/SQL</a></li>
    </ul>
</div>

<div class="container-fluid col-11">

    <!-- First row -->
    <div class="row mb-5" style="background-color:white; border:3px solid black; border-radius:10px; box-shadow:2px 2px 5px black;" id="html-css">
        <div class="col-12 col-md-6 col-lg-6">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="/assets/img/screen-evalHTMLCSS.png" alt="Eval HTML/CSS">
                        <div class="carousel-caption d-none d-md-block">
                            <h4 class="text-warning bg-secondary">Ma réalisation</h4>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/assets/img/graphisme-catalogue.png" alt="Maquette origine">
                        <div class="carousel-caption d-none d-md-block">
                            <h4 class="text-warning bg-secondary">La maquette d'origine</h4>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-6 d-flex flex-column justify-content-center">
            <div>
                <h3 class="mb-5 text-center">Page en HTML/CSS :</h3>
                <p>Cette page web a été réalisé lors de mon premier examen en HTML et CSS.</p>
                <p>Nous devions reproduire cette page à partir d'une maquette fourni par l'examinateur le plus précis possible.</p>
                <p>Elle a été réalisé en HTML et CSS pur dans utilisation de framwork tel que Bootstrap par exemple.</p>
                <p>Vous pouvez voir grâce au carousel les différences entre la maquette fourni et celle que j'ai réalisé.</p>
            </div>
        </div>
    </div>
    <!-- End of First row -->

    <!-- Second row -->
    <div class="row mb-5" style="background-color:white; border:3px solid black; border-radius:10px; box-shadow:2px 2px 5px black;" id="js">
        <div class="col-12 col-md-6 col-lg-6">
            <video controls src="/assets/videos/MyEmails.mp4" type="video/mp4" style="width:100%; object-fit:contain;"></video>
        </div>
        <div class="col-12 col-md-6 col-lg-6 d-flex flex-column justify-content-center">
        <div>
                <h3 class="mb-5 text-center">Utilisation de Javascript/jQuery :</h3>
                <p>La vidéo ici-présente montre le résultat de l'utilisation du langage Javascript pour créer un effet de dynamisme sur la page.</p>
                <p>L'exercice donné par l'instructeur était de pouvoir supprimer les messages en cliquant sur l'icône de poubelle tout en modifiant le compteur en haut de la page.</p>
                <p>Nous devions aussi pouvoir créer de nouveau message en cliquant sur le bouton "Add" pris en compte par le compteur.</p>
            </div>
        </div>
    </div>

    <!-- End of second row -->

    <!-- Third row -->
    <div class="row mb-5" style="background-color:white; border:3px solid black; border-radius:10px; box-shadow:2px 2px 5px black;" id="php">
        <div class="col-12 col-md-6 col-lg-6">
            <video controls src="/assets/videos/Ecommerce.mp4" type="video/mp4" style="width:100%; object-fit:contain;"></video>
        </div>
        <div class="col-12 col-md-6 col-lg-6 d-flex flex-column justify-content-center">
        <div>
                <h3 class="mb-5 text-center">Site de type E-commerce en PHP :</h3>
                <p>Ce site est pour l'instant le plus gros projet que j'ai réalisé lors de ma formation.</p>
                <p>Nous avons codé avec l'aide de l'instructeur, un site typique de e-commerce en utilisant le langage PHP et avons récupérés les données inscrits sur les pages pour les enregistrer dans une base de données mySQL.</p>
            </div>
        </div>
    </div>

    <!-- End of third row -->

    <!-- Fourth row -->
    <div class="row mb-5" style="background-color:white; border:3px solid black; border-radius:10px; box-shadow:2px 2px 5px black;" id ="eval-php">
        <div class="col-12 col-md-6 col-lg-6">
            <img src="/assets/img/eval-phpsql.png" alt="Evaluation PHP/SQL" style="width:100%; object-fit:contain;"></img>
        </div>
        <div class="col-12 col-md-6 col-lg-6 d-flex flex-column justify-content-center">
        <div>
                <h3 class="mb-5 text-center">Evaluation PHP/SQL :</h3>
                <p>Ce site a été créer dans le cadre d'une évaluation en PHP et SQL en 4h.</p>
                <p>L'objectif était de créer un site ressemblant a un site de location/vente d'appartement, de villa pour les vacances.</p>
                <p>Le côté responsive n'a pas été travaillé sur ce site par manque de temps.</p>
                <p>J'ai mis le site en ligne dans le cadre de mon évaluation, vous pouvez y faire un tour pour le voir dans sa globalité en cliquant ci-dessous.</p>
                <a target="_blank" href="https://phetsouvan-evalphp.000webhostapp.com/" class="btn btn-primary mb-2">Voir le site</a>
            </div>
        </div>
    </div>

</div>

<?php
//Inclusion du footer:
require_once(__DIR__."/includes/footer.php");
?>