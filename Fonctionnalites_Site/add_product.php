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

        <title>Ajouter un produit</title>
</head>
<header>
        <?php require_once("../Elements/menu_admin.php"); ?>
</header>
<body id="breg">


<div class="inscriptionform">
    <div id="register" class="animate form">
        <form  method="post" action="ScriptAddProduct.php" autocomplete="off">
            <h1> Ajouter un Produit</h1>

            <?php //id ?>
            <p>
                <label class="id" data-icon="p" ></label>
                <input id="mailsignup" name="id" required="required" type="text" placeholder="ID"/>
            </p>

            <?php //Catégorie ?>
            <p>
                <label class="" data-icon="p" ></label>
                <input id="mailsignup" name="categorie" required="required" type="text" placeholder="Catégorie"/>
            </p>

            <?php //Nom de l'article ?>
            <p>
                <label class="firstname" data-icon="u" ></label>
                <input id="usernamesignup" name="nom" required="required" type="text" placeholder="Nom de l'article" />
            </p>

            <?php //Prix ?>
            <p>
                <label class="price" data-icon="p" ></label>
                <input id="lastnamesignup" name="prix" required="required" type="text" placeholder="Prix"/>
            </p>

            <?php //Quantité ?>
            <p>
                <label class="password" data-icon="p" ></label>
                <input id="passwordsignup" name="quantite" required="required" type="text" placeholder="Quantité"/>
            </p>

            <p class="signin_button">
                <input type="submit" value="Ajouter"/>
            </p>
        </form>
    </div>
</div>

</body>
<footer>
</footer>
</html>