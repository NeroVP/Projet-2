<?php
if(!isset($_SESSION)){
    session_start(); //initialisation de la session (!!!!à faire avant le code html!!!!)
}

$_SESSION = array();

echo "<script type='text/javascript'>window.location.replace('../Accueil_et_Mentions_légales/Index.php')</script>";

?>