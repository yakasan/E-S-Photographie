<?php

require_once("model/class.model.php");

class Message extends Model{

	function displayMessage(){
		$result= parent::$connexion->query("SELECT title,id FROM message");
		return $result;
	}
}