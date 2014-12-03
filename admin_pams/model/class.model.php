<?php

class Model {

    public static $dns = "mysql:host=localhost; dbname=es_photographie";
    public static $user = "stagiaire";
    public static $pass = "stagiaire";
    public static $connexion ;

    function __construct() {
        $this->connexion = new PDO($dns, $user, $pass);
    }

    
}



?>
