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
		$query = $this->connexion->prepare("SELECT * FROM photos");
		$query->execute();
		return $query;
	}

	function DeletePhoto($id){
		$query = $this->connexion->prepare("DELETE * FROM photos WHERE id=`".$id."`");
		$query->execute();
		return $query;
	}

};