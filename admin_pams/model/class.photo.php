<?php
require_once('class.model.php');
 
class Photo extends Model {

	function AddPhotoToDBB($id_gallery, $title, $desc, $exif, $chemin){
		$this->connexion->exec("INSERT INTO photos(id_gallery, title, description, exif, url) VALUES ('$id_gallery', '$title', '$desc', '$exif', '$chemin')");
	}

<<<<<<< HEAD
	function AddPhotoToFolder($tmpname,$name, $extension){
		move_uploaded_file($tmpname, "../gallery/test/".$name.".".$extension);
=======
	function AddPhotoToFolder($tmpname, $title, $extension, $idGallery){
		move_uploaded_file($tmpname, "../gallery/".$idGallery."/".$title.".".$extension);
>>>>>>> 38493efd55cbed42d6f0b6e497f0e4f0fb8f68a5
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