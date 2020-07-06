<?php
    echo "<div class='card cardpanier' style='margin-top:50px; margin-bottom:50px; width: 200px; border-color: #343A40;'>
    <img src= '../../img/".$product->id.".jpg' style='width:195px; height:195px;' class='card-img' alt='img produit'>
    <div class='card-body'>
    <div class='nomprodpanier'> Nom :&nbsp;".$product->nom_produit."</div>
    <div class='quantite'> Quantité : <input type='text' autocomplete='off' name='panier[quantity][".$product->id."]' style='width: 160px;' value='".$_SESSION['panier'][$product->id]."'></div>
    <div class='price'> prix :&nbsp;".number_format($product->prix_produit,2)."€ </div>
        <a class='btn btn-primary add' href='panier.php?delPanier=".$product->id."' style='background-color: #343A40; margin-top:5px; border-color: #343A40;'>supprimer le produit </a>
  </div>
  </div>";
?>