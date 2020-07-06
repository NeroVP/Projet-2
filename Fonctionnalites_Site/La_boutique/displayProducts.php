<?php
    echo '<div class="card" style=" margin-bottom:100px; border-color: #343A40;">
        <img src= "../../img/'.$product->id.'.jpg" style="width:400px; height:400px;" class="card-img" alt="img produit">
        <div class="card-body">
            <h5 class="card-title">'.$product->nom_produit.'</h5>
            <p> EN STOCK: '.$product->quantité.'    Categorie: '.$product->categorie.'</p>
            <p class="card-text price">'.number_format($product->prix_produit,2).'€ </p>
            <a href="addpanier.php?id='.$product->id.'" class="btn btn-primary addPanier" style="background-color: #343A40; border-color: #343A40;">ajouter au panier</a>
        </div>
    </div>';
?>