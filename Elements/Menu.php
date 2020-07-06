<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>  
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<nav class="navbar fixed-top navbar-dark bg-dark">
<a class="btn btn-dark" href="http://localhost/Projet-2/Accueil_et_Mentions_légales/Index.php" role="button">Accueil</a>
  <div class="dropdown">
  <a class="btn btn-dark" id="btnscript" href="#" role="button">
  La boutique
  </a>
</div>
  <a class="btn btn-dark" href="http://localhost/Projet-2/Fonctionnalites_Site/Lequipe.php" role="button">Qui sommes-nous ?</a>
  <!--<a class="btn btn-dark" href="http://localhost/Projet-2/Fonctionnalites_Site/Notresponsor.php" role="button">Notre sponsor</a>-->
  <ul class="navbar-nav ml-auto">
    <li class="nav-item">
      <a class="btn btn-dark" href="http://localhost/Projet-2/Connexion_Inscription_Déconnexion/Menu_Connexion.php" role="button">Se connecter</a>
      <a class="btn btn-dark" href="http://localhost/Projet-2/Connexion_Inscription_Déconnexion/Menu_Inscription.php" role="button">S'inscrire</a>
    </li>
  </ul>
</nav>

<Script type='text/javascript'>
var btn = document.querySelector('#btnscript');
btn.addEventListener('click', Scriptlaunch);

function Scriptlaunch(){
  alert("Veuillez vous connecter pour accéder à la boutique");
}

</Script>