<?php
/* Lien avec la BDD */
$bdd = new PDO('mysql:host=localhost;dbname=projet-2;charset=utf8', 'root', '');

/* Récupération des login du formulaire*/
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$mdp = $_POST['motdepasse'];
$email =  $_POST['email'];

//on regarde si le mots de passe possede une MAJ et un CHIFFRE
if(preg_match_all('#[A-Z0-9]#', $mdp)){


    // chiffrage du mdp
    $mdp_chiffrer = sha1($mdp);


    // Requete qui va insérer les données dans la bdd pour les nouveau inscrit
    // Requête préparée pour empêcher les injections SQL
    $requete_création_User = $bdd->prepare("INSERT INTO admins ( Nom, Prenom, Mots_de_passe, Email) VALUES(:nom,:prenom,:motdepasse,:email)");

    //préparation des variables
    $requete_création_User->bindValue(':nom', $nom, PDO::PARAM_STR); //PDO::PARAM_STR est l'encodage vers un varchar pour mysql
    $requete_création_User->bindValue(':prenom', $prenom, PDO::PARAM_STR);
    $requete_création_User->bindValue(':motdepasse', $mdp_chiffrer, PDO::PARAM_STR);
    $requete_création_User->bindValue(':email', $email, PDO::PARAM_STR);

    // Requete qui permet de voir si un utilisateur est deja créé
    $requete_recup = $bdd -> prepare("SELECT Nom, Prenom, Mots_de_passe, Email from admins where Nom = :nom");
    $requete_recup->bindValue(':nom', $nom, PDO::PARAM_STR); //PDO::PARAM_STR est l'encodage vers un varchar pour mysql

    $requete_recup->execute();

    $donne = $requete_recup->fetch();

    //Si l'utilisateur est deja créer redirection vers la page de connexion sinon on le créer
    if($email == $donne['Email']){
        echo "<script type='text/javascript'>alert('Cet utilisateur est déjà un Admin'); </script>";
        echo "<script type='text/javascript'>window.location.replace('add_admin.php');</script>";
    }else{
        //création de l'utilisateur
        echo "<script type='text/javascript'>alert('Cet utilisateur est maintenant un Admin'); </script>";
        $requete_création_User->execute();
        echo "<script type='text/javascript'>window.location.replace('add_admin.php')</script>";
    }

}else{
    echo "<script type='text/javascript'>alert('Veuillez inclure un chiffre et une MAJ dans votre mdp');</script>";
    echo "<script type='text/javascript'>window.location.replace('add_admin.php')</script>";
}

?>