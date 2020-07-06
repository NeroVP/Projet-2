<?php
//include les classes
require 'db.class.php';
require 'panier.class.php';

//Connexion BDD
$BDD = new DB();

//Création d'une session et d'un panier
$panier = new panier($BDD);

?>