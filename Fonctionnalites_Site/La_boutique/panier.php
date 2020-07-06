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

if(isset($_GET['del'])){
        $panier->del($_GET['del']);
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
        <?php require_once("../../Elements/Header.php")?>
        <link rel="stylesheet" href="../../Elements/Style.css">

        <title>Panier</title>
</head>
<header>
        <?php require_once("../../Elements/menu_connected.php"); ?>
</header>
<body>
<form method='post' action='panier.php'>
    <div class="box">
        <!-- On récupere le contenu du panier par les ids-->
        <div class="panier_content card-deck">
        <?php
            $ids = array_keys($_SESSION['panier']);
            if(empty($ids)){
                $products = array();
                echo ("&ensp;&ensp;<h1> Panier vide</h1>");
            }else{
                $products = $BDD->req('SELECT * FROM produit WHERE id IN ('.implode(',', $ids).')');
            }
        foreach($products as $product):
        ?>
            <div class="products_panier">
                <?php include("displayPanier.php"); ?>
            </div>
        <?php endforeach; ?>
        </div>
        
        <div class="commande">
                <?php 
                if($panier->count() == 0){
                      
                }else{
                    echo '<input type="submit" value="Recalculer" class="recalcul"><span class="total_commande">Nombre d\'articles : '.$panier->count().' | total : '.number_format($panier->total(), 2).'€
                        </span>';
                        if(($product->quantité - $_SESSION['panier'][$product->id]) >= 0){
                        echo'<a class="boutton_commande payer" href="paiement.php">Payer</a>';
                        }else{
                            echo '<span class="payer">erreur de quantité</span>';
                        }
                }
                
                ?>
        </div>
    </div>
</form>
</body>
<footer>
        <?php require_once("../../Elements/footer_connected.php"); ?>
</footer>
</html>