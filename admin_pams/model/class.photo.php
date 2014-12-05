<?php
require_once('class.model.php');
 
class Photo extends Model {

	function AddPhotoToDBB($id_gallery, $title, $desc, $exif, $chemin){
		$this->connexion->exec("INSERT INTO photos(id_gallery, title, description, exif, url) VALUES ('$id_gallery', '$title', '$desc', '$exif', '$chemin')");
	}

	function AddPhotoToFolder($tmpname,$title, $extension){
		move_uploaded_file($tmpname, "../gallery/test/".$title.".".$extension);
	}

	function DisplayPhoto($idGallery){
		$query = $this->connexion->prepare("SELECT * FROM photos WHERE id_gallery =".$idGallery."");
		$query->execute();
		return $query;
	}

	function DeletePhoto($id){
		$query = $this->connexion->prepare("DELETE * FROM photos WHERE `id` = '.$id.'");
		$query->execute();
		return $query;
	}

};