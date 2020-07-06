<?php
if(!isset($_SESSION)){
        session_start(); //initialisation de la session (!!!!à faire avant le code html!!!!)
}
if(empty($_SESSION)){
    //vérification de connexion
        echo "<script type='text/javascript'>alert('Vous devez vous connecter pour accéder à cette page'); </script>";
        echo "<script type='text/javascript'>window.location.replace('http://localhost/Projet-2/Accueil_et_Mentions_légales/Index.php');</script>";
        
}

//Conexion BDD + creation d'une session et d'un panier
require '_header.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
        <?php require_once("../../Elements/Header.php")?>
        <link rel="stylesheet" href="../../Elements/Style.css">

        <title>Les masques</title>
</head>
<header>
        <?php require_once("../../Elements/menu_connected.php"); ?>
</header>
<body>
 <div class="box">
    <?php $products = $BDD->req("SELECT * FROM `produit` WHERE quantité>0 AND categorie = 'Masque'");?>

    <div class="boutique_content card-deck">

        <!-- On récupere chaque produit individuellmeent -->
        <?php foreach($products as $product): ?>
            <div class="products">
            <?php include("displayProducts.php"); ?>
            </div>
        <?php endforeach; ?>
    </div>  

    <!-- TODO : Ajouter de quoi visualiser le résultat des requêtes ou de quoi saisir des commandes en fonction des options possibles -->
</div>
</body>
<footer>
        <?php require_once("../../Elements/footer_connected.php"); ?>
</footer>
</html>