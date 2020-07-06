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

        <title>Contactez nous</title>
</head>
<header>
        <?php 
        /*require_once("../boutique/bdd.php");*/
        require_once("../Elements/menu.php"); ?>
</header>
<body>
 <div class="box">
 <h1>Nous contacter</h1>
<p class="p1">Pour toutes questions éventuelle ou soucis technique veuillez prendre contact avec les admins ci-dessous</p>
<B><p class="p2">Meffodong Kévin&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; Perrier Valentin&emsp; <br />
<a href="mailto:kevin.meffodong@viacesi.fr">kevin.meffodong@viacesi.fr</a>&emsp;&emsp; <a href="mailto:valentin.perrier@viacesi.fr">valentin.perrier@viacesi.fr</a> <br />
&ensp;0782499184&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;0623400063&ensp;&ensp; <br />
</p></B>
</div>
</body>
<footer>
        <?php require_once("../Elements/footer.php"); ?>
</footer>
</html>