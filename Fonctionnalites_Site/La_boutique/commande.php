<?php
if(!isset($_SESSION)){
    session_start(); //initialisation de la session (!!!!à faire avant le code html!!!!)
}
if(empty($_SESSION)){
    //vérification de connexion
    echo "<script type='text/javascript'>alert('Vous devez vous connecter pour accéder à cette page'); </script>";
    echo "<script type='text/javascript'>window.location.replace('http://localhost/Projet-2/Accueil_et_Mentions_légales/Index.php');</script>";
    
}
//Conexion BDD + creation d'une session et d'un panier
require '_header.php';
        
?>
    
<!DOCTYPE html>
<html lang="fr">
<head>
        <?php require_once("../../Elements/Header.php")?>
        <link rel="stylesheet" href="../../Elements/Style.css">

        <title>Finalisation commande</title>
</head>
<header>
<?php  require_once("../../Elements/menu_connected.php"); ?>
</header>
<body>
 <div class="box">

<!-- On récupere le contenu du panier par les ids-->

    <?php
    $ids = array_keys($_SESSION['panier']);
        if(empty($ids)){
            $products = array();
            echo ("<h1>Panier vide</h1>");
        }else{
            $products = $BDD->req('SELECT * FROM produit WHERE id IN ('.implode(',', $ids).')');
            echo '<table class="tabcommande">
            <tr>
                <th>Nom</th>
                <th>Quantité</th> 
                <th>Prix      </th>
            </tr>';
        }                

        foreach($products as $product):
        ?>
            <div class="products_panier">
                <?php include("displayCommande.php"); ?>
                
                
            </div>
        <?php endforeach; ?>
       <?php if($panier->count() == 0){
                      
        }else{
            echo '<tr><th></th><th></th><th>total : '.number_format($panier->total(), 2).'€</th></tr></table><br/>';
        }
                    ?>
<!--Requete SQL-->
<?php
foreach($products as $product):
    $commande = $BDD->maj('INSERT INTO commande (id_utilisateur, id_produit, prix, quantite, total) VALUES ('.$_SESSION['user_id'].', '.$product->id.', '.number_format($product->prix_produit,2).', '.$_SESSION['panier'][$product->id].', '.number_format($product->prix_produit,2) * $_SESSION['panier'][$product->id].')');
endforeach;
?>

 <!-- email-->
 <?php
 /*$from = "valentin.perrier@viacesi.fr";
 $to = $_SESSION['email'];
 $subject = "commande";
 $message = "confirmation\nde\ncommande";
 $headers = "From:".$from;
 mail($to,$subject,$message,$headers);*/
 ?>


<a href="../../Accueil_et_Mentions_légales/Index_connected.php" class="return">Retourner au menu principal</a><br />

 <!--On met à jour la table produit-->
<?php
foreach($products as $product):

    $result = $product->quantité - $_SESSION['panier'][$product->id];

    $update = $BDD->maj('UPDATE produit SET quantité = '.$result.' WHERE id ='.$product->id.';');

endforeach;

     /*$insert = $BDD->maj('INSERT INTO calcul_quantité (quantite_produit, quantite_commande, idProduit, result) 
     SELECT produit.quantité, commande.quantite, produit.id, (SELECT produit.quantité - commande.quantite) 
     FROM produit INNER JOIN commande ON produit.id = commande.id_produit GROUP BY produit.id;');

     //compte le nombre de ligne
     $news = $BDD->req('SELECT id_produit FROM commande');
     foreach($news as $new):
             $update = $BDD->maj('UPDATE produit SET quantité = (SELECT MIN(result) FROM calcul_quantité WHERE idProduit ='.$new->id_produit.') WHERE id ='.$new->id_produit);
     endforeach;*/
?>

<!--On vide le panier-->
<?php //$_SESSION['panier'] = array();?>

</div>

</body>
</html>
<footer>
        <?php require_once("../../Elements/footer_connected.php"); ?>
</footer>
