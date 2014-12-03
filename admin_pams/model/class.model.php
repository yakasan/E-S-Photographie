<?php

class Model {

    public $dns = "mysql:host=localhost; dbname=es_photographie";
    public $user = "stagiaire";
    public $pass = "stagiaire";
    public $connexion ;

    function __construct() {
        $this->connexion = new PDO($this->dns, $this->user, $this->pass);
    }

    
}



?>
