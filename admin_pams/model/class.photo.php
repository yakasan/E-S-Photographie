<?php
require_once('class.model.php');
 
class Photo extends Model {

	function AddPhotoToDBB($id_gallery, $title, $desc, $exif, $url){
		$this->connexion->exec("INSERT INTO photos(id_gallery, title, description, exif, url) VALUES ('$id_gallery', '$title', '$desc', '$exif', '$url')");
	}

	function AddPhotoToFolder($tmpname,$url){
		move_uploaded_file($tmpname, "C:/xampp/htdocs/E-S-Photographie/gallery/test/".$url); 
	}

	function DisplayPhoto(){
		return $this->connexion->exec("SELECT * FROM photos");
		//return $query;
	}

};