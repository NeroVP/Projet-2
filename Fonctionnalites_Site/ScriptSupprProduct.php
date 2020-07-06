<?php
/* Lien avec la BDD */
$bdd = new PDO('mysql:host=localhost;dbname=projet-2;charset=utf8', 'root', '');

/* Récupération des login du formulaire*/
$id =  $_POST['id'];


// Requete qui va supprimer les données dans la bdd
$requete_création_User = $bdd->prepare("DELETE FROM produit WHERE id = :id");

//préparation des variables
$requete_création_User->bindValue(':id', $id, PDO::PARAM_STR);

// Requete qui permet de voir si un article est deja créé sur cet id
$requete_recup = $bdd -> prepare("SELECT * from produit where id = :id");
$requete_recup->bindValue(':id', $id, PDO::PARAM_STR); //PDO::PARAM_STR est l'encodage vers un varchar pour mysql

$requete_recup->execute();

$donne = $requete_recup->fetch();

//Si l'utilisateur n'est pas Admin redirection vers la page de suppréssion sinon on le Supprimer
if($id == $donne['id']){
    //suppréssion de l'utilisateur
    echo "<script type='text/javascript'>alert('Produit supprimé'); </script>";
    $requete_création_User->execute();
    echo "<script type='text/javascript'>window.location.replace('supp_product.php');</script>";
}else{
    echo "<script type='text/javascript'>alert('Ce Produit n'existe pas'); </script>";
    echo "<script type='text/javascript'>window.location.replace('supp_product.php')</script>";
}
?>