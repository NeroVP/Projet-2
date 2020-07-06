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

        <title>Ajouter une photo</title>
</head>
<header>
        <?php require_once("../Elements/menu_admin.php"); ?>
</header>
<body id="breg">


<div class="inscriptionform">
    <div id="register" class="animate form">
    <h1> Ajouter une Photo</h1>
    <p> Ne pas oublier de la nommer selon l'id du produit.</p>


    <form method="POST" action="ScriptAddPhoto.php" enctype="multipart/form-data">
     <!-- On limite le fichier à 100Ko -->
     <input type="hidden" name="MAX_FILE_SIZE" value="100000">
     Fichier : <input type="file" class="inputimg" name="produit">
     <input type="submit" class="sendfile" name="envoyer" value="Envoyer le fichier">
</form>
    </div>
</div>

</body>
<footer>
</footer>
</html>