<?php 
include('../model/class.photo.php');

//$idGallery = $_GET['id'];
 
	if(isset($_POST['addPhoto'])){
		//print_r($_FILES);
		//die;
		$nouvellePhoto = new Photo();
		$url = $_FILES['photo']['name'];
		$tmpname = $_FILES['photo']['tmp_name'];
		$title = $_POST['title'];
		$desc = $_POST['desc'];
		//Ajout nouvelle photo Fichier correspondant
		$nouvellePhoto->AddPhotoToFolder($tmpname, $url);
		//print_r($chemin);
		//die;
		//Ajout nouvelle photo BBD
		$nouvellePhoto->AddPhotoToDBB(' ', $title, $desc, ' ', $url);
		

	}

	$Photo = new Photo();
	$Photos = $Photo->DisplayPhoto();
	$listePhoto = $Photos->fetchAll(PDO::FETCH_ASSOC);
	print_r($listePhoto);
	//die;




include("../view/photos.tpl");
 ?>