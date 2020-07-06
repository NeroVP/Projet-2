<?php
/* Lien avec la BDD */
$bdd = new PDO('mysql:host=localhost;dbname=projet-2;charset=utf8', 'root', '');

/* Récupération des login du formulaire*/
$id = $_POST['id'];
$nom = $_POST['nom'];
$prix = $_POST['prix'];
$quantite =  $_POST['quantite'];
$categorie =  $_POST['categorie'];


// Requete qui va insérer les données dans la bdd pour les nouveau inscrit
// Requête préparée pour empêcher les injections SQL
$requete_création_User = $bdd->prepare("INSERT INTO produit ( id, nom_produit, prix_produit, quantité, categorie) VALUES(:id,:nom,:prix,:quantite,:categorie)");

//préparation des variables
$requete_création_User->bindValue(':id', $id, PDO::PARAM_STR); //PDO::PARAM_STR est l'encodage vers un varchar pour mysql
$requete_création_User->bindValue(':nom', $nom, PDO::PARAM_STR);
$requete_création_User->bindValue(':prix', $prix, PDO::PARAM_STR);
$requete_création_User->bindValue(':quantite', $quantite, PDO::PARAM_STR);
$requete_création_User->bindValue(':categorie', $categorie, PDO::PARAM_STR);

// Requete qui permet de voir si un article est deja créé sur cet id
$requete_recup = $bdd -> prepare("SELECT id, nom_produit, prix_produit, quantité, categorie from produit where id = :id");
$requete_recup->bindValue(':id', $id, PDO::PARAM_STR); //PDO::PARAM_STR est l'encodage vers un varchar pour mysql

$requete_recup->execute();

$donne = $requete_recup->fetch();

//Si l'utilisateur est deja créer redirection vers la page de connexion sinon on le créer
if($id == $donne['id']){
    echo "<script type='text/javascript'>alert('Cet id est déjà utilisé pour un autre produit'); </script>";
    echo "<script type='text/javascript'>window.location.replace('add_product.php');</script>";
}else{
    //création de l'utilisateur
    echo "<script type='text/javascript'>alert('Cet article a été ajouté à la base de donnée'); </script>";
    $requete_création_User->execute();
    echo "<script type='text/javascript'>window.location.replace('add_photo.php')</script>";
}
?>