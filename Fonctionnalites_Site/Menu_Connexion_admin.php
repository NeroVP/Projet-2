<?php
if(!isset($_SESSION)){
    session_start(); //initialisation de la session (!!!!à faire avant le code html!!!!)
}
if(!empty($_SESSION)){
    //On vide la session si l'utilisateur ne se déconnecte pas avec le bouton
    //$_SESSION = array();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
        <?php require_once("../Elements/Header.php")?>
        <link rel="stylesheet" href="http://localhost/Projet-2/Elements/Styleform.css">

        <title>Connexion</title>
</head>
<header>
        <?php 
        /*require_once("../boutique/bdd.php");*/
        require_once("../Elements/menu.php"); ?>
</header>
<body id="breg">


<div id="register" class="animate form">
    <form  method="post" action="scriptConnexionAdmin.php" autocomplete="on">
        <h1> Connexion Admin </h1>

        <?php //Addresse mail ?>
        <p>
            <label class="mail" data-icon="p" ></label>
            <input id="passwordsignup" name="email" required="required" type="email" placeholder="E-Mail"/>
        </p>

        <?php //mots de passe ?>
        <p>
            <label class="password" data-icon="p" ></label>
            <input id="passwordsignup" name="motdepasse" required="required" type="password" placeholder="Mot de passe"/>
        </p>

        <p class="signin_button">
            <input type="submit" value="Connexion"/>
        </p>

        <p class="change_link">
            Accès au site : 
            <a href="http://localhost/Projet-2/Connexion_Inscription_Déconnexion/Menu_Connexion.php" class="to_register"> Se connecter </a>
        </p>
    </form>
</div>
</body>
<footer>
        <?php require_once("../Elements/footer.php"); ?>
</footer>
</html>