<?php
require_once('class.model.php');

class Photo extends Model {

	function AddPhoto($value1, $value2, $value3, $value4, $value5){
			$query = parent::$connexion->prepare('INSERT INTO photos("id_gallery", "title", "desc", "exif", "url") VALUES (:value1, :value2, :value3, :value4, :value5)');
			$query->bindValue(":value1", $value1);
			$query->bindValue(":value2", $value2);
			$query->bindValue(":value3", $value3);
			$query->bindValue(":value4", $value4);
			$query->bindValue(":value5", $value5);
			$query->execute();
	}

};