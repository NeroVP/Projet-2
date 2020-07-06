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

        <title>Paiement</title>
</head>
<header>
        <?php require_once("../../Elements/menu_connected.php"); ?>
</header>
<body>
 <div class="box">
    <h1>Choisissez votre mode de paiement :</h1>
    <form action="https://www.sandbox.paypal.com/cgi-bin/webcr" method="post">
    <input name="amount" type="hidden" value="<?php echo number_format($panier->total(), 2)?>">
    <input name="currency_code" type="hidden" value="EUR">
    <input name="shipping" type="hidden" value="0.00">
    <input name="tax" type="hidden" value="0.00">
    <input name="return" type="hidden" value="http://localhost/Projet-2/Fonctionnalites_Site/La_boutique/commande.php">
    <input name="cancel_return" type="hidden" value="http://localhost/Projet-2/Fonctionnalites_Site/La_boutique/panier.php">
    <input name="notify_url" type="hidden" value="http://localhost/Projet-2/Fonctionnalites_Site/La_boutique/ipn.php">
        <input name="cmd" type="hidden" value="_xclick">
        <input name="business" type="hidden" value="sb-ulfhw2516263@business.example.com">
        <input name="item_name" type="hidden" value="Panier SBOND">
        <input name="no_note" type="hidden" value="1">
        <input name="lc" type="hidden" value="FR">
        <input name="bn" type="hidden" value="PP-BuyNowBF">
        <input name="custom" type="hidden" value="user_id=<?php echo $_SESSION['user_id'] ?>">
            <br/><input type="submit" value="" class="button paypal">
    </form>
</div>
</body>
<footer>
        <?php require_once("../../Elements/footer_connected.php"); ?>
</footer>
</html>