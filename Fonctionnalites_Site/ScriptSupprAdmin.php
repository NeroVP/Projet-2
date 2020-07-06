<?php
/* Lien avec la BDD */
$bdd = new PDO('mysql:host=localhost;dbname=projet-2;charset=utf8', 'root', '');

/* Récupération des login du formulaire*/
$email =  $_POST['email'];


// Requete qui va supprimer les données dans la bdd
$requete_création_User = $bdd->prepare("DELETE FROM admins WHERE Email = :email");

//préparation des variables
$requete_création_User->bindValue(':email', $email, PDO::PARAM_STR);

// Requete qui permet de voir si un utilisateur est deja créé
$requete_recup = $bdd -> prepare("SELECT Nom, Prenom, Mots_de_passe, Email from admins where Email = :email");
$requete_recup->bindValue(':email', $email, PDO::PARAM_STR); //PDO::PARAM_STR est l'encodage vers un varchar pour mysql

$requete_recup->execute();

$donne = $requete_recup->fetch();

//Si l'utilisateur n'est pas Admin redirection vers la page de suppréssion sinon on le Supprimer
if($email == $donne['Email']){
    //suppréssion de l'utilisateur
    echo "<script type='text/javascript'>alert('Admin supprimé'); </script>";
    $requete_création_User->execute();
    echo "<script type='text/javascript'>window.location.replace('supp_admin.php');</script>";
}else{
    echo "<script type='text/javascript'>alert('Cet utilisateur n'est pas un Admin'); </script>";
    echo "<script type='text/javascript'>window.location.replace('supp_admin.php')</script>";
}
?>