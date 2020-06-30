<?php session_start(); ?>

<?php
require_once("../../BDD/bdd.php");

if(!isset($_SESSION['panier'])){
$_SESSION['panier']= array();
$_SESSION['commande']= array();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/projet-2/Elements/Style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>Les parois</title>
</head>
<header>
        <?php require_once("../../Elements/menu.php"); ?>
</header>
<body>
 <div class="box">
  <?php $requete = $bdd->prepare('SELECT * FROM produits WHERE ID BETWEEN 7 AND 9 ORDER BY ID ASC');
        $requete->execute();
        while($produit=$requete->fetch(PDO::FETCH_OBJ)){?>
         <div style="max-height:25%; max-width:25%; margin:auto; padding:0px; border-bottom-style:solid;">                    
         <img class="img-fluid" src="../../img/<?php echo $produit->ID; ?>.jpg">
         <div style="border-top:solid;">
         <B><?php echo $produit->Nom .' '.  $produit->Type; ?><br>
          <?php echo $produit->Prix; ?>€</B>
                <div style="margin: -15% 82%; border-left:solid">
                        <a href="panier.php?id=<?= $produit->ID;?>">
                                <svg class="bi bi-bag-plus" width="3em" height="3em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M14 5H2v9a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V5zM1 4v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4H1z"/>
                                <path d="M8 1.5A2.5 2.5 0 0 0 5.5 4h-1a3.5 3.5 0 1 1 7 0h-1A2.5 2.5 0 0 0 8 1.5z"/>
                                <path fill-rule="evenodd" d="M8 7.5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z"/>
                                <path fill-rule="evenodd" d="M7.5 10a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-2z"/>
                                </svg>        
                        </a>
                </div><br><br>
                <div>
                <B><p><?php echo $produit->Description; ?></p></B>
                </div>
        </div>
        </div>
        <br><br><br>
        <?php } ?>
 </div>
</body>
<footer>
        <?php require_once("../../Elements/footer.php"); ?>
</footer>
</html>