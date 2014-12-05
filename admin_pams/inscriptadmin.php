<?php
try {
                $connexion = new PDO("mysql:host=localhost; dbname=es_photographie", "stagiaire", "stagiaire");
            }catch(PDOException $e){
                die ('erreur: '.$e->getmessage());
            }
$passvue='alexis';
$pass=md5($passvue);
$connexion->query("INSERT INTO administrator (login, password) VALUES ('alexis','$pass')");

var_dump($pass);
?>