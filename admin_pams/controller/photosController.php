<?php 
require_once('indexx.php');
include('model/class.photo.php');

	if (isset($_SESSION['login']) && $_SESSION['admin']==1){
	
		//Récupération de $_SESSION de la galerie actuelle
		$idGallery = $_SESSION['gallerieIdUpload']['id'];
		$nameGallery = $_SESSION['gallerieNameUpload'];

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
	
		//Pour chaque photo se trouvant dans $listePhoto...
		foreach($listePhoto as $key => $value){

			//Déserialization des exifs
			$unserialized = unserialize($listePhoto[$key]['exif']);
	
			//Récupération du titre de la photo
			$title = $listePhoto[$key]['title'];
	
			//Récupération du MimeType
			$extensionThumbnail = $unserialized['FILE']['MimeType'];
	
			//Récupération de l'extension seule
			$extensionThumbnail2 = substr($extensionThumbnail, 6);
	
			//Récupération du chemin de la photo
			$filename = "../gallery/".$nameGallery."/".$title.".".$extensionThumbnail2;
				
			//Valeur pour les vignettes
			$width = 150;
			$height = 150;
			
			//Création de la vignette
			$thumbnail = exif_thumbnail($filename, $width, $height, $extensionThumbnail);
			
			//On met la balise d'affichage de la vignette dans le tableau associatif, sinon on affichera que la dernière vignette trouvée
			$listePhoto[$key]['$lool'] = "<img  width='$width' height='$height' src='data:".$extensionThumbnail.";base64,".base64_encode($thumbnail)."'>";
		}

		print_r($_POST);
	
	include("view/photos.tpl");
	}else{
		header("Location: ../index.html");
		die;
	}
 ?>