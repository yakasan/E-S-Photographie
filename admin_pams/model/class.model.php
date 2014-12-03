<?php

class Model {
    private static $user = "stagiaire";
    private static $pass = "stagiaire";
    private static $db = "es_photographie";
    private static $host = "localhost";

    protected static $connexion = false;

    //constructeur pour récuperer les données de notre base située dans host>delphine   
    function __construct() {
        if (!self::$connexion) {
            self::$connexion = new PDO('mysql:host='.self::$host.';dbname='.self::$db.';charset=utf8', self::$user, self::$pass);
        }
    }
}
