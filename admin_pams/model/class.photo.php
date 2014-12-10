<?php
require_once('class.model.php');
 
class Photo extends Model {

	//Fonction sauvegarde de la photo dans la BDD
	function AddPhotoToDBB($id_gallery, $title, $desc, $exif, $chemin){
		$this->connexion->exec("INSERT INTO photos(id_gallery, title, description, exif, url) VALUES ('$id_gallery', '$title', '$desc', '$exif', '$chemin')");
	}

	//Fonction sauvegarde des photos dans la galerie
	function AddPhotoToFolder($tmpname, $title, $extension, $nameGallery){
		move_uploaded_file($tmpname, "../gallery/".$nameGallery."/".$title.".".$extension);
	}

	//Fonction affichage des photos
	function DisplayPhoto($idGallery){
		$query = $this->connexion->prepare("SELECT * FROM photos WHERE id_gallery =".$idGallery."");
		$query->execute();
		return $query;
	}

	//Fonction suppression dans la BDD
	function DeletePhoto($idHidden){
		$this->connexion->exec("DELETE FROM photos WHERE id = ".$idHidden."");
	}

};