<?php

class Model {
    public static $dns = "mysql:host=localhost; dbname=es_photographie";
    public static $user = "Stagiaire";
    public static $pass = "Stagiaire";
    $connexion = new PDO($dns, $user, $pass);
}
// model pour jointure de tables, a conserver
    /*public $hasAndBelongsToMany = array(
        'User' =>
            array(
                'className' => 'User',
                'joinTable' => 'games_users',
                'foreignKey' => 'game_id',
                'associationForeignKey' => 'user_id'      
           )
    );*/
?>