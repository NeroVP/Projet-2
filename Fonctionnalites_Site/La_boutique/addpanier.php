<?php
require '_header.php';
$json = array('error' => true);

if(isset($_GET['id'])){ //On recupere l'id du produit

    $product = $BDD->req('SELECT id FROM produit WHERE id=:id', array('id' => $_GET['id'])); //array remplace bindParam()

    if(empty($product)){ //si le produit n'existe pas
        $json['message'] = "Ce produit n'existe pas";
    }
    $panier->add($product[0]->id); //ajout du produit au panier
    $json['error'] = false;
    $json['total'] = $panier->total();
    $json['count'] = $panier->count();
    $json['message'] = 'produit ajouté';
}else{
    $json['message'] = 'Vous n\'avez pas selectionne de produit a ajouter au panier';
}
echo json_encode($json);
?>