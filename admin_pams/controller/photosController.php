<?php 
include('../model/class.photo.php');

	if(isset($_POST['addPhoto'])){
		//if($_POST['title'] != ''){

			$nouvellePhoto = new Photo();
			$tmpname = $_FILES['photo']['tmp_name'];
			$extension = $_FILES['photo']['type'];
			print_r($extension);
			die;
			$extension = substr($extension, 6);
			$title = $_POST['title'];
			$desc = $_POST['desc'];
			$chemin = $title.'.'.$extension;
			$thumbnail = exif_thumbnail($_FILES['photo'], 150, 150, $extension);
			header('Content-type: '.image_type_to_mime_type($extension));
			echo $thumbnail;
			exit;
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
	$unserialized = unserialize($listePhoto[9]['exif']);
	print_r($unserialized);
	//$thumbnail = $unserialized['THUMBNAIL'];
	//print_r($thumbnail);




include("../view/photos.tpl");
 ?>