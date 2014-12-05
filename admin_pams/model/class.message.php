<?php
require_once("class.model.php");

class Message extends Model{
	//recupère tout les messages
	function recupMessage(){
		$result=$this->connexion->query("SELECT * FROM messages WHERE deleted='0' ORDER BY id DESC");
		$messs=$result->fetchAll(PDO::FETCH_ASSOC);
		return $messs;
	}
	//récupère un message suivant son id
	function recupMessIndiv($id){
		$result=$this->connexion->query("SELECT * FROM messages WHERE id='$id'");
		$messindiv=$result->fetchAll(PDO::FETCH_ASSOC);
		return $messindiv;
	}
	//passe un message en "a été vue"
	function seen($id){
		$result=$this->connexion->query("UPDATE messages SET seen='1' WHERE id='$id'");
	}
	function unseen($id){
		$result=$this->connexion->query("UPDATE messages SET seen='0' WHERE id='$id'");
	}
	//passe un message en "a été supprimé"
	function supprMess($id){
		$result=$this->connexion->query("UPDATE messages SET deleted='1' WHERE id='$id'");
	}
}


?>

