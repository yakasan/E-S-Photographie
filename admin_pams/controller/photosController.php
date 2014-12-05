<?php 
require_once('indexx.php');
include('model/class.photo.php');

if (isset($_SESSION['login']) && $_SESSION['admin']==1){

	if(isset($_POST['addPhoto'])){
		//if($_POST['title'] != ''){

			$nouvellePhoto = new Photo();
			$tmpname = $_FILES['photo']['tmp_name'];
			$name = $_FILES['photo']['name'];
			$extension = $_FILES['photo']['type'];
			$extension = substr($extension, 6);
			$title = $_POST['title'];
			$desc = $_POST['desc'];
			$chemin = $title.'.'.$extension;
			$exif = exif_read_data($_FILES['photo']['tmp_name'], 0, true);
			$exif = serialize($exif);
			//Ajout nouvelle photo Fichier correspondant
			$nouvellePhoto->AddPhotoToFolder($tmpname, $title, $extension);
			//Ajout nouvelle photo BBD
			$nouvellePhoto->AddPhotoToDBB(' ', $title, $desc, $exif, $chemin);

		//}else{
		//	echo "Veuillez ajouté un titre";
		//}
	}

	$Photo = new Photo();
	$Photos = $Photo->DisplayPhoto();
	$listePhoto = $Photos->fetchAll(PDO::FETCH_ASSOC);
	$unserialized = unserialize($listePhoto[1]['exif']);
	$filename = $unserialized['FILE']['FileName'];
	$extensionThumbnail = $unserialized['FILE']['MimeType'];
	$extensionThumbnail = substr($extensionThumbnail, 6);
	//print_r($filename);
	//die;
	//Affichage vignettes
	$width = 150;
	$height = 150;
	$thumbnail = exif_thumbnail($filename, $width, $height, $extensionThumbnail);
	////print_r($thumbnail);
	header('Content-type: '.image_type_to_mime_type($extensionThumbnail));
	$lool = "<img  width='$width' height='$height' src='data:image/gif;base64,".base64_encode($filename)."'>";

	//print_r($listePhoto[2]['url']);
	//die;
	
	//print_r($unserialized);
	//$thumbnail = $unserialized['THUMBNAIL'];
	//print_r($thumbnail);




include("view/photos.tpl");
}else{
	header("Location : ../index.html");
	die;
}
 ?>