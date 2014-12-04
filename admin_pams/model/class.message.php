<?php
require_once("../model/class.model.php");

class Message extends Model{
	
	function recupMessage(){
		$result=$this->connexion->query("SELECT * FROM messages WHERE deleted='0' ORDER BY id DESC");
		$messs=$result->fetchAll(PDO::FETCH_ASSOC);
		return $messs;
	}
	function recupMessIndiv($id){
		$result=$this->connexion->query("SELECT * FROM messages WHERE id='$id'");
		$messindiv=$result->fetchAll(PDO::FETCH_ASSOC);
		return $messindiv;
	}
}


?>

