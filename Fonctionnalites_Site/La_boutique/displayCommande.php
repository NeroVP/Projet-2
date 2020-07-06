<?php
    echo "<tr>        
    <th>".$product->categorie.' '.$product->nom_produit."</th>
    <th>".$_SESSION['panier'][$product->id]."</th>
    <th>".number_format($product->prix_produit,2)." €</th>
    </tr>";
?>