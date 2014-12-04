<?php 
session_start();
require_once("../model/class.gallery.php");

$gallery = new Gallery();
//print_r($tableData);

function createGalleryFolder ($title){
	$title=strtolower($title);
	$title=str_replace(" ","_",$title);
	//On vérifie l'existence du répertoire $Num et on le crée si il n'existe pas 
	if (is_dir("C:/xampp/htdocs/E-S-Photographie/gallery/$title")){ 
		header('Location:galleriesController.php');
	} 
	if (!is_dir("C:/xampp/htdocs/E-S-Photographie/gallery/$title")){ 
		mkdir ("C:/xampp/htdocs/E-S-Photographie/gallery/$title", "0777"); 
	} 
}
if(empty($_POST['nameGallery']) && empty($_POST['textGallery'])){
	$_SESSION['dataLess']="infos manquantes";
}else{
	unset($_SESSION['dataLess']);
}

if(!empty($_POST['nameGallery']) && !empty($_POST['textGallery'])){
		$title=$_POST['nameGallery'];
		$description=$_POST['textGallery'];

		$exist = $gallery->knowFolderExist($title);

		if ($exist){
			$_SESSION['galleryExist']="Galerie déjà existante";
		}else{
			$gallery->createGallery($title, $description);
			createGalleryFolder($title);
		}

		$_POST='';
		unset($_SESSION['galleryExist']);
}
$tableData = $gallery->getData();
include("../view/galleries.tpl");
?>