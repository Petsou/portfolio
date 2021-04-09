<?php

//Inclusion du header:
require_once(__DIR__."/includes/header.php");
//print_r($_SERVER['PHP_SELF']);
?>

<div class="container mt-5 d-flex flex-column justify-content-center">
    <h1 id="main-title">Bienvenue sur mon Portfolio</h1>
    <div class="form-group">
        <p>Je m'appelle Phetsouvan Souvannavong et<br>je suis un développeur web débutant !</p>
        <a href="qui.php" class="btn btn-primary">En savoir plus</a>
    </div>
</div>
<div class="container-fluid">
    <img src="/assets/img/mario_hello.gif" alt="Mario Gif" id="Hello">
</div>
<?php
//Inclusion du footer:
require_once(__DIR__."/includes/footer.php");
?>


