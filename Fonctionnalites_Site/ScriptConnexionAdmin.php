<?php

if(!isset($_SESSION)){
    session_start(); //initialisation de la session (!!!!à faire avant le code html!!!!)
}


/* Lien avec la DBB */
$bdd = new PDO('mysql:host=localhost;dbname=projet-2;charset=utf8', 'root', '');



/* Récupération des login du formulaire*/
$email =  $_POST['email'];
$mdp = $_POST['motdepasse'];

$mdp_chiffrer = sha1($mdp);

// Requête préparée pour empêcher les injections SQL
$requete_recup = $bdd -> prepare("SELECT * from admins where Email = :mail");
$requete_recup->bindValue(':mail', $email, PDO::PARAM_STR); //PDO::PARAM_STR est l'encodage vers un varchar pour mysql

$requete_recup->execute();

$donne = $requete_recup->fetch();

if($mdp_chiffrer == $donne['Mots_de_passe'] && $email == $donne['Email']){
    
    
    $id = $donne['id'];
    $nom_user = $donne['Nom'];
    $prenom_user= $donne['Prenom'];
    $email_user = $donne['Email'];
    //paramétrage de la session
    $_SESSION['user_id'] = $id;
    $_SESSION['nom'] = $nom_user;
    $_SESSION['prenom']= $prenom_user;
    $_SESSION['email']= $email_user;
    $_SESSION['admin']=1;

    echo "<script type='text/javascript'>window.location.replace('./add_admin.php')</script>";

}else{
    echo "<script type='text/javascript'>window.location.replace('Menu_Connexion_admin.php');alert('mot de passe ou adresse email incorect')</script>";
}


?>