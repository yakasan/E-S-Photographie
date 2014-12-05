<?php
try {
                $connexion = new PDO("mysql:host=localhost; dbname=es_photographie", "stagiaire", "stagiaire");
            }catch(PDOException $e){
                die ('erreur: '.$e->getmessage());
            }
<<<<<<< HEAD
$passvue='patrice';
$pass=md5($passvue);
$connexion->query("INSERT INTO administrator (login, password) VALUES ('patrice','$pass')");
=======
$passvue='memoria';
$pass=md5($passvue);
$connexion->query("INSERT INTO administrator (login, password) VALUES ('Seto','$pass')");
>>>>>>> 47c20b28d3a6b7774843f9d8a9188618b2b01d6d

var_dump($pass);
?>