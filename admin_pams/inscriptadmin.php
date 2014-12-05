<?php
try {
        $connexion = new PDO("mysql:host=localhost; dbname=es_photographie", "stagiaire", "stagiaire");
    }catch(PDOException $e){
        die ('erreur: '.$e->getmessage());
    }

$passvue='patrice';
$login='login';
$pass=md5($passvue);
$connexion->query("INSERT INTO administrator (login, password) VALUES ('$login','$pass')");


var_dump($pass);
?>