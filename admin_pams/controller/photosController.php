<?php 
require_once('indexx.php');
include('model/class.photo.php');

	print_r($_SESSION);

	//Récupération de l'ID de la galerie actuelle
	$idGallery = $_SESSION['gallerieNameUpload']['id'];


if (isset($_SESSION['login']) && $_SESSION['admin']==1){

	if(isset($_POST['addPhoto'])){
		//if($_POST['title'] != ''){

			//Initialisation d'une nouvelle photo
			$nouvellePhoto = new Photo();

			//Récupération du nom du fichier temporaire
			$tmpname = $_FILES['photo']['tmp_name'];

			//Récupération du nom du fichier
			$name = $_FILES['photo']['name'];

			//Récupération de l'extension
			$extension = $_FILES['photo']['type'];

			//Suppression des caractères inutiles
			$extension = substr($extension, 6);

			//Récupération du titre taper par l'utilisateur
			$title = $_POST['title'];

			//Récupération de la description taper par l'utilisateur
			$desc = $_POST['desc'];

			//Sauvegarde du nom du fichier + l'extension
			$chemin = $title.'.'.$extension;

			//Récupération des Exifs de la photo
			$exif = exif_read_data($_FILES['photo']['tmp_name'], 0, true);

			//Serialization, pour passer les exifs dans le tableau
			$exif = serialize($exif);
			//Ajout nouvelle photo Fichier correspondant
			$nouvellePhoto->AddPhotoToFolder($tmpname, $title, $extension, $idGallery);
			//Ajout nouvelle photo BBD
			$nouvellePhoto->AddPhotoToDBB('1', $title, $desc, $exif, $chemin);

		//}else{
		//	echo "Veuillez ajouté un titre";
		//}
	}

	//Initialisation
	$Photo = new Photo();

	//On va chercher toutes les photos correspondantes
	$Photos = $Photo->DisplayPhoto($idGallery);
	$listePhoto = $Photos->fetchAll(PDO::FETCH_ASSOC);

	if(!empty($listePhoto)){

		//Déserialization des exifs
		$unserialized = unserialize($listePhoto[$idGallery]['exif']);
	
		//Récupération du chemin de la photo
		//$filename = $unserialized['FILE']['FileName'];
		$filename = "../gallery/test/Sylvain.jpeg";
	
		//Récupération de l'extension
		$extensionThumbnail = $unserialized['FILE']['MimeType'];
		//print_r($extensionThumbnail);
		//$extensionThumbnail = ".".substr($extensionThumbnail, 6);
		//Affichage vignettes
	
		//Valeur pour les vignettes
		$width = 150;
		$height = 150;
	
		//Création de la vignette
		$thumbnail = exif_thumbnail($filename, $width, $height, $extensionThumbnail);
		print_r($thumbnail);
	
		//Balise d'affichage de la vignette
		$lool = "<img  width='$width' height='$height' src='data:".$extensionThumbnail.";base64,".base64_encode($thumbnail)."'>";

	}else{
		echo "Il n'y a pas encore de photos dans cette galerie !";
	}


include("view/photos.tpl");
}else{
	header("Location: ../index.html");
	die;
}
 ?>