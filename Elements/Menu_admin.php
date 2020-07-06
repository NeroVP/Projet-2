<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>  
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<nav class="navbar fixed-top navbar-dark bg-dark">
  <a class="btn btn-dark" href="http://localhost/Projet-2/Fonctionnalites_Site/add_admin.php" role="button">Ajouter un Admin</a>
  <a class="btn btn-dark" href="http://localhost/Projet-2/Fonctionnalites_Site/supp_admin.php" role="button">Supprimer un Admin</a>
  <a class="btn btn-dark" href="http://localhost/Projet-2/Fonctionnalites_Site/add_product.php" role="button">Ajouter un Produit</a>
  <a class="btn btn-dark" href="http://localhost/Projet-2/Fonctionnalites_Site/supp_product.php" role="button">Supprimer un Produit</a>
  <a class="btn btn-dark" href="http://localhost/Projet-2/Connexion_Inscription_Déconnexion/ScriptDeconnexion.php" role="button">Déconnexion</a>
  <ul class="navbar-nav ml-auto">
    <li class="nav-item">
      <div class="nav-link"><?php echo $_SESSION['nom'].' '.$_SESSION['prenom'];?></div>
    </li>
  </ul>

</nav>