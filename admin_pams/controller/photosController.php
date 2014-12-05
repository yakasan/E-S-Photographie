<?php 
require_once('indexx.php');
include('model/class.photo.php');
if (isset($_SESSION['login']) && $_SESSION['admin']==1){

	if(isset($_POST['addPhoto'])){
		//if($_POST['title'] != ''){
			$nouvellePhoto = new Photo();
			$tmpname = $_FILES['photo']['tmp_name'];
			$extension = $_FILES['photo']['type'];
			$extension = substr($extension, 6);
			$title = $_POST['title'];
			$desc = $_POST['desc'];
			$chemin = $title.'.'.$extension;
			$exif = exif_read_data($_FILES['photo']['tmp_name'], 0, true);
			//print_r($exif);
			//die;
			//Ajout nouvelle photo Fichier correspondant
			$nouvellePhoto->AddPhotoToFolder($tmpname, $title, $extension);
			//Ajout nouvelle photo BBD
			$nouvellePhoto->AddPhotoToDBB(' ', $title, $desc, ' ', $chemin);

		//}else{
		//	echo "Veuillez ajouté un titre";
		//}
	}

	$Photo = new Photo();
	$Photos = $Photo->DisplayPhoto();
	$listePhoto = $Photos->fetchAll(PDO::FETCH_ASSOC);
	//print_r($listePhoto);




include("view/photos.tpl");
}else{
	header("Location: ../index.html");
	die;
}
 ?>