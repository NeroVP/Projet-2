<?php
class DB{

    //BDD par default
    private $host = 'localhost';
    private $dbname = 'projet-2';
    private $username = 'root';
    private $password = '';
    private $bdd;

    public function __construct($host = null, $dbname = null, $username = null, $password = null){
        //si on veut changer de BDD
        if($host !=null){
            $this->host = $host;
            $this->dbname = $dbname;
            $this->username = $username;
            $this->password = $password;
        }
        try{
            //Connexion BDD
            $this->bdd = new PDO ('mysql:host='.$this->host.';dbname='.$this->dbname, $this->username, $this->password,    
            array(
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8', //array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8') => charset=utf8
                PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING //affiche un warning au lieu de array(0) { }
            ));
        }catch(PDOException $e){
            die('<h1>Impossible de se connecter a la base de donnee</h1>');
        }
    }

    //Requete SQL
    public function req($sql, $data = array()){

        $req = $this->bdd->prepare($sql);
        $req->execute($data);
        return $req->fetchAll(PDO::FETCH_OBJ); //PDO::FETCH_OBJ rend les info plus lisibles
    }

    //Requete SLQ pour l'interaction avec la BDD
    public function maj($sql){

        $req = $this->bdd->prepare($sql);
        $req->execute();
    }
}
?>