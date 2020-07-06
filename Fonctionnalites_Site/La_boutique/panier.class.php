<?php
    class panier{
        private $BDD;
        /**
         * Constructeur
         */
        public function __construct($BDD) {

            //si $_SESSION n'est pas defini
            if(!isset($_SESSION)){
                session_start(); //initialisation de la session (!!!!à faire avant le code html!!!!)
            }
            if(!isset($_SESSION['panier'])){ //si le panier n'est pas créer
                $_SESSION['panier'] = array(); //initialisation d'un panier vide
            }
            $this->BDD = $BDD;
            if(isset($_GET['delPanier'])){
                $this->del($_GET['delPanier']);
            }
            if(isset($_POST['panier']['quantity'])){
                $this->recalc();
            }
        }
        /**
         * Recalculer Quantitée panier
         * 
         */

        public function recalc(){
            foreach($_SESSION['panier'] as $product_id => $quantity){
                if(isset($_POST['panier']['quantity'][$product_id])){
                    $_SESSION['panier'][$product_id] = $_POST['panier']['quantity'][$product_id];
                }
            }
        }

        /**
         * Total de produit
         *
         * return total des produits dans le panier
         */
        public function count(){
            return array_sum($_SESSION['panier']);
        }
        /**
         * Prix total
         *
         * return prix total
         */
        public function total(){
            $prix = 0;
            $ids = array_keys($_SESSION['panier']);
            if(empty($ids)){
                $products = array();
            }else{
                $products = $this->BDD->req('SELECT id, prix_produit FROM produit WHERE id IN ('.implode(',', $ids).')');
            }
            foreach ($products as $product) {
                $prix += $product->prix_produit * $_SESSION['panier'][$product->id];
            }
            return $prix;
        }

        /**
         * Ajouter au panier
         *
         * param id du produit
         *
         * return id du produit dans le panier et la qunatité
         */
        public function add($product_id){

            if(isset($_SESSION['panier'][$product_id])){ //si on a deja le produit dans le panier
                //incrémentation du nombre de produits
                $_SESSION['panier'][$product_id]++;                
            }else{
                //recupere l'id su produit, le prix
                $_SESSION['panier'][$product_id] = 1;
            }
        }

        /**
         * 
         * Supprimer un produit
         *
         * param produit à supprimer
         *
         * return produit supprimer
         */
        public function del($product_id){
            unset($_SESSION['panier'][$product_id]);
            //$suppr = $this->BDD->maj('DELETE FROM panier WHERE id_produit='.$product_id);
        }
    }
?>