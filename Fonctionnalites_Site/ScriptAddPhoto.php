<?php
if(isset($_FILES['produit']))
{ 
     $dossier = '../img/';
     $fichier = basename($_FILES['produit']['name']);
     if(move_uploaded_file($_FILES['produit']['tmp_name'], $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
     {
          echo "<script type='text/javascript'>alert('Photo ajoutée aux fichiers'); </script>";
          echo "<script type='text/javascript'>window.location.replace('add_product.php')</script>";
     }
     else //Sinon (la fonction renvoie FALSE).
     {
          echo "<script type='text/javascript'>alert('Erreur'); </script>";
          echo "<script type='text/javascript'>window.location.replace('add_photo.php')</script>";
     }
}
?>
