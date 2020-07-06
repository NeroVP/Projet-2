<?php 
if(!isset($_SESSION)){
    session_start(); //initialisation de la session (!!!!à faire avant le code html!!!!)
}
?>

<div id="register" class="animate form">
    <form  method="post" action="scriptConnexion.php" autocomplete="on">
        <h1> Connexion </h1>

        <?php //Addresse mail ?>
        <p>
            <label class="mail" data-icon="p" ></label>
            <input id="passwordsignup" name="email" required="required" type="email" placeholder="E-Mail"/>
        </p>

        <?php //mots de passe ?>
        <p>
            <label class="password" data-icon="p" ></label>
            <input id="passwordsignup" name="motdepasse" required="required" type="password" placeholder="Mot de passe"/>
        </p>

        <p class="signin_button">
            <input type="submit" value="Connexion"/>
        </p>
        <p class="change_link">
            Pas encore insctit ?
            <a href="./Menu_Inscription.php" class="to_register"> Insciption </a>
        </p>
        <p class="change_link">
            Se connecter en tant qu'<a href="http://localhost/Projet-2/Fonctionnalites_Site/Menu_Connexion_admin.php" class="to_register">Admin</a>
        </p>
    </form>
</div>