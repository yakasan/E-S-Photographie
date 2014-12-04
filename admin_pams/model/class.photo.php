<?php
require_once('class.model.php');
 
class Photo extends Model {

	function AddPhoto($id_gallery, $title, $desc, $exif, $url){
			$this->connexion->exec("INSERT INTO photos(id_gallery, title, description, exif, url) VALUES ('$id_gallery', '$title', '$desc', '$exif', '$url')");
	}

};