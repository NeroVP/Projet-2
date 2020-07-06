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

        <title>Qui sommes-nous ?</title>
</head>
<header>
        <?php 
        /*require_once("../boutique/bdd.php");*/
        require_once("../Elements/menu.php"); ?>
</header>
<body>
<div class="box">
<div style="margin: 0% 30%; padding:0px; border: solid; width:100px; height:104px;">
      <img src="https://nsa40.casimages.com/img/2020/06/23/mini_20062304240865070.png"  alt="Kevin Meffodong" width="100%" height="auto">
 <p>Kevin Meffodong</p>
 </div>
 <div style="margin: -8.5% 61%; padding:0px; border: solid; width: 100px; height: 116px;">     
      <img src="https://nsa40.casimages.com/img/2020/06/23/mini_200623042408147827.png"  alt="Valentin Perrier" width="100%" height="auto">
<p>Valentin Perrier</p>
</div>
<B><p class="p2" style="margin-top:15%;">Notre identité<br>
Nous sommes des étudiants à l'école d'ingénieur du CESI de Nanterre depuis 2 ans et nous nous efforçons de faire de notre mieux pour 
apporter notre valeur ajouté à ce prestigieux établissement.
Au cours de notre formation, nous avons appris de nombreuses leçons dans le domaine de l'informatique et ce qui l'entoure nous avons ainsi 
retenus que la capacité d'écoute, la polyvalence et l'efficacité sont des facteurs
qui sont indispensables si l'on veut être en mesure de pouvoir développer un réseaux d'acteurs et de partenaires.<br><br>
Pourquoi nous faire confiance ?<br>
Nous nous engageons auprès de nos clients à leur fournir des services qui les satisferont et qui de ce fait renforceront notre relation 
avec ces derniers. Projets après projets, nous avons finis par développer un sens du devoir qui nous pousse à nous améliorer nous ainsi 
que nos outils dans le but de procurer à notre clientèle, le meilleur de nous-même.<br><br>
Notre mission<br>
Elle est avant toute choses de mettre en relation que ce soient des entités morales ou physiques en manque de matériel pour lutter 
contre le covid-19 avec des fournisseurs sérieux et rigoureux qui sont toujours à l'écoute du besoin de leurs clients. Nous nous assurons
du bon déroulement de votre affaire avec nos fournisseurs et sommes ouvert à toute suppositions, pistes d'améliorations ou critiques.
</p></B>
</div>
</body>
<footer>
        <?php require_once("../Elements/footer.php"); ?>
</footer>
</html>