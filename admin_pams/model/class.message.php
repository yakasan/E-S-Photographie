<?php
require_once("../model/class.model.php");

class Message extends Model{
	
	function recupMessage(){
		$result=parent::$connexion->query("SELECT * FROM message WHERE deleted='0' ORDER BY id DESC");
		$messs=$result->fetchAll(FETCH_ASSOC);
		return $messs;
	}
	
	
}


?>

