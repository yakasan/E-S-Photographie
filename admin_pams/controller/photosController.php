<?php 
include('../model/class.photo.php');

	if(isset($_POST['addPhoto'])){
		$nouvellePhoto = new Photo();
		$tmpname = $_FILES['photo']['tmp_name'];
		$extension = $_FILES['photo']['type'];
		$extension = substr($extension, 6);

		//print_r($extension);
		//die;
		//$extension=str_replace(".","/",$extension);
		$title = $_POST['title'];
		$desc = $_POST['desc'];
		$chemin = $title.'.'.$extension;
		//print_r($chemin);
		//die;
		//Ajout nouvelle photo Fichier correspondant
		$nouvellePhoto->AddPhotoToFolder($tmpname, $title, $extension);
		//Ajout nouvelle photo BBD
		$nouvellePhoto->AddPhotoToDBB(' ', $title, $desc, ' ', $chemin);
	}

	$Photo = new Photo();
	$Photos = $Photo->DisplayPhoto();
	$listePhoto = $Photos->fetchAll(PDO::FETCH_ASSOC);
	//print_r($listePhoto);




include("../view/photos.tpl");
 ?>