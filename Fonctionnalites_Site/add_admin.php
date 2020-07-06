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
        <link rel="stylesheet" href="../Elements/Styleform.css">

        <title>Ajouter un admin</title>
</head>
<header>
        <?php require_once("../Elements/menu_admin.php"); ?>
</header>
<body id="breg">


<div class="inscriptionform">
    <div id="register" class="animate form">
        <form  method="post" action="ScriptAddAdmin.php" autocomplete="off">
            <h1> Ajouter un Admin</h1>

            <?php //NOM ?>
            <p>
                <label class="firstname" data-icon="u" ></label>
                <input id="usernamesignup" name="prenom" required="required" type="text" placeholder="Prenom" />
            </p>

            <?php //Prenom ?>
            <p>
                <label class="" data-icon="p" ></label>
                <input id="lastnamesignup" name="nom" required="required" type="text" placeholder="Nom"/>
            </p>

            <?php //mots de passe ?>
            <p>
                <label class="password" data-icon="p" ></label>
                <input id="passwordsignup" name="motdepasse" required="required" type="password" placeholder="Mot de passe"/>
            </p>

            <?php //Adresse mail ?>
            <p>
                <label class="" data-icon="p" ></label>
                <input id="mailsignup" name="email" required="required" type="email" placeholder="E-Mail"/>
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