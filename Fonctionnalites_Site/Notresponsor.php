<?php
if(!isset($_SESSION)){
    session_start(); //initialisation de la session (!!!!à faire avant le code html!!!!)
}
if(!empty($_SESSION)){
    //On vide la session si l'utilisateur ne se déconnecte pas avec le bouton
    $_SESSION = array();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
        <?php require_once("../Elements/Header.php")?>
        <link rel="stylesheet" href="../Elements/Style.css">


        <title>Notre Sponsor</title>
</head>
<header>
        <?php 
        /*require_once("../boutique/bdd.php");*/
        require_once("../Elements/menu.php"); ?>
</header>

<body>
<div class="box">
</div>
</body>

<footer>
        <?php require_once("../Elements/footer.php"); ?>
</footer>
</html>