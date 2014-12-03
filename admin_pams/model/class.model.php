<?php

class Model {

<<<<<<< HEAD
    public $dns = "mysql:host=localhost; dbname=es_photographie";
    public $user = "stagiaire";
    public $pass = "stagiaire";
    public $connexion ;
=======
    public static $dns = "mysql:host=localhost; dbname=es_photographie";
    public static $user = "stagiaire";
    public static $pass = "stagiaire";

    public static $connexion ;
>>>>>>> 1140ca5d042e456ff87d852cc0ff670054127be6


    function __construct() {
<<<<<<< HEAD
        $this->connexion = new PDO($this->dns, $this->user, $this->pass);
    }

    
=======
        $this->connexion = new PDO($dns, $user, $pass);
    }   
>>>>>>> 1140ca5d042e456ff87d852cc0ff670054127be6
}
?>
