<?php 
if(!isset($_SESSION)){
        session_start(); //initialisation de la session (!!!!à faire avant le code html!!!!)
}
if($_SESSION['admin']!==1){
    //vérification de connexion
        echo "<script type='text/javascript'>alert('Vous devez vous être un admin pour accéder à cette page'); </script>";
        echo "<script type='text/javascript'>window.location.replace('http://localhost/Projet-2/Accueil_et_Mentions_légales/Index.php');</script>";
        
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
        <?php require_once("../Elements/Header.php")?>
        <link rel="stylesheet" href="http://localhost/Projet-2/Elements/Styleform.css">

        <title>Supprimer Produit</title>
</head>
<header>
        <?php 
        require_once("../Elements/menu_admin.php"); ?>
</header>
<body id="breg">


<div class="inscriptionform">
    <div id="register" class="animate form">
        <form  method="post" action="scriptSupprProduct.php" autocomplete="off">
            <h1> Supprimer un Produit </h1>


            <?php //id ?>
            <p>
                <label class="id" data-icon="p" ></label>
                <input id="mailsignup" name="id" required="required" type="text" placeholder="ID"/>
            </p>

            <p class="signin_button">
                <input type="submit" value="Supprimer"/>
            </p>
        </form>
    </div>
</div>

</body>
<footer>
</footer>
</html>