<?php 
require_once('indexx.php');
include('model/class.photo.php');

	//Récupération de $_SESSION de la galerie actuelle
	$idGallery = $_SESSION['gallerieIdUpload']['id'];
	$nameGallery = $_SESSION['gallerieNameUpload'];


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
			$nouvellePhoto->AddPhotoToFolder($tmpname, $title, $extension, $nameGallery);

			//Ajout nouvelle photo BBD
			$nouvellePhoto->AddPhotoToDBB($idGallery, $title, $desc, $exif, $chemin);

		//}else{
		//	echo "Veuillez ajouté un titre";
		//}
	}

	//Initialisation
	$Photo = new Photo();

	//On va chercher toutes les photos correspondantes
	$Photos = $Photo->DisplayPhoto($idGallery);
	$listePhoto = $Photos->fetchAll(PDO::FETCH_ASSOC);
	//print_r($listePhoto);

	if(!empty($listePhoto)){

		//Déserialization des exifs
		$unserialized = unserialize($listePhoto[$idGallery]['exif']);

		//for($i = 0; $i < $listePhoto[$i]; $i++){
		foreach($listePhoto as $key => $value){
			$chemin2 = $listePhoto[$key]['title'];
			//print_r($listePhoto[$key]['title']);

			//Récupération de l'extension
			$extensionThumbnail = $unserialized['FILE']['MimeType'];
			$extensionThumbnail2 = substr($extensionThumbnail, 6);
			//print_r($extensionThumbnail2);

			//Récupération du chemin de la photo
			$filename = "../gallery/".$nameGallery."/".$chemin2.".".$extensionThumbnail2;
			//print_r($filename);
			
	
			//Affichage vignettes
			//Valeur pour les vignettes
			$width = 150;
			$height = 150;
		
			//Création de la vignette
			$thumbnail = exif_thumbnail($filename, $width, $height, $extensionThumbnail);
			//print_r($thumbnail);
		
			//Balise d'affichage de la vignette
			$lool = "<img  width='$width' height='$height' src='data:".$extensionThumbnail.";base64,".base64_encode($thumbnail)."'>";
		}

	}else{
		echo "Il n'y a pas encore de photos dans cette galerie !";
	}


include("view/photos.tpl");
}else{
	header("Location: ../index.html");
	die;
}
 ?>