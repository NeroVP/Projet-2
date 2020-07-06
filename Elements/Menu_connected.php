<?php
if(!isset($_SESSION)){
    session_start(); //initialisation de la session (!!!!à faire avant le code html!!!!)
}
?>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>  
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<nav class="navbar fixed-top navbar-dark bg-dark">
<a class="btn btn-dark" href="http://localhost/Projet-2/Accueil_et_Mentions_légales/Index_connected.php" role="button">Accueil</a>
  <div class="dropdown">
  <a class="btn btn-dark dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
  La boutique
  </a>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item"  href="http://localhost/Projet-2/Fonctionnalites_Site/La_boutique/Masques.php">Les masques</a>
    <a class="dropdown-item"  href="http://localhost/Projet-2/Fonctionnalites_Site/La_boutique/Parois.php">Les parois anti-contact</a>
    <a class="dropdown-item"  href="http://localhost/Projet-2/Fonctionnalites_Site/La_boutique/Gants.php">Les gants</a>
    <a class="dropdown-item"  href="http://localhost/Projet-2/Fonctionnalites_Site/La_boutique/panier.php">Mon panier</a>
  </div>
</div>
  <a class="btn btn-dark" href="http://localhost/Projet-2/Fonctionnalites_Site/Lequipe_connected.php" role="button">Qui sommes-nous ?</a>
  <!--<a class="btn btn-dark" href="http://localhost/Projet-2/Fonctionnalites_Site/Notresponsor_connected.php" role="button">Notre sponsor</a>-->
  <a class="btn btn-dark" href="http://localhost/Projet-2/Connexion_Inscription_Déconnexion/ScriptDeconnexion.php" role="button">Déconnexion</a>
  <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <div class="nav-link"><?php echo $_SESSION['nom'].' '.$_SESSION['prenom'];?></div>
      </li>
    </ul>

</nav>