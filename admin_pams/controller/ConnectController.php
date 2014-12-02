<?php
class ConnectController extends AppController {

	function connexion () {
			try {
				$bdd = new PDO('mysql:host=localhost;dbname=es_photographie', 'stagiaire', 'stagiaire', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
			}
			catch (PDOException $e) {
				die ('erreur: '.$e->getmessage());
			}
			return $bdd;
	}


}
?>
