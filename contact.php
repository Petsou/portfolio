<?php

//Inclusion du header:
require_once(__DIR__."/includes/header.php");

if(isset($_POST['message'])){
    $arobase = strpos($_POST['email'],'@');
    if($arobase === false){
        echo '<div class="alert alert-danger" role="alert">L\'adresse email est invalide !</div>';
    }else{
        $retour = mail('souv.phetsouvan@gmail.com','Envoi depuis la page contact',$_POST['message'], 'From:'.$_POST['email']);
        if($retour){
            echo '<div class="alert alert-success" role="alert">Votre message a bien été envoyé !</div>';
        }else{
            echo '<div class="alert alert-danger" role="alert">Une erreur est survenu lors de l\'envoi du message !</div>';
        }
    }
}
?>

<div class="container-fluid col-12 d-flex flex-column justify-content-center align-items-center bg-warning">
    <h1 class="text-center">Important !!!</h1>
    <p style="font-size:20px;">Pour me contacter merci de ne pas tenir compte du formulaire ci-dessus ! </p>
    <p style="font-size:20px;">Étant donné que j'utilise un hébergeur gratuit, je ne peux pas inscrire mon mail sur l'hébergeur !</p>
    <p style="font-size:20px;">Pour le moment, merci de m'envoyer un mail directement à l'adresse ci-dessous :</p>
    <p style="font-size:20px;"><a href="mailto:souv.phetsouvan@gmail.com">souv.phetsouvan@gmail.com</a></p>
</div>

<div class="container-fluid col-12 d-flex flex-column justify-content-center align-items-center">
    <h1 class="text-center">Me contacter</h1>
</div>

<main class="role">
    <div class="container col-12 col-md-6 col-lg-4 mb-5">
        <form action="#" method="POST">
            <div class="form-group">
                <label for="nom">Votre nom :</label>
                <input type="text" class="form-control" name="nom" required>
            </div>
            <div class="form-group">
                <label for="prenom">Votre prénom :</label>
                <input type="text" class="form-control" name="prenom" required>
            </div>
            <div class="form-group">
                <label for="email">Votre adresse mail :</label>
                <input type="email" class="form-control" name="email" required>
            </div>
            <div class="form-group">
                <label for="message">Votre message :</label>
                <textarea name="message" id="message" class="form-control" rows="5"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Valider</button>
        </form>
    </div>
</main>
<?php
//Inclusion du footer:
require_once(__DIR__."/includes/footer.php");
?>