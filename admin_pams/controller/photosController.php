<?php 
include('../model/class.photo.php');

	if(isset($_POST['addPhoto'])){
		$nouvellePhoto = new Photo();
		$url = $_FILES['photo']['name'];
		$tmpname = $_FILES['photo']['tmp_name'];
		$title = $_POST['title'];
		$desc = $_POST['desc'];
		//Ajout nouvelle photo Fichier correspondant
		$nouvellePhoto->AddPhotoToFolder($tmpname, $url);
		//Ajout nouvelle photo BBD
		$nouvellePhoto->AddPhotoToDBB(' ', $title, $desc, ' ', $url);

	}

	$Photo = new Photo();
	$Photos = $Photo->DisplayPhoto();
	$listePhoto = $Photos->fetchAll(PDO::FETCH_ASSOC);
	//print_r($listePhoto);




include("../view/photos.tpl");
 ?>