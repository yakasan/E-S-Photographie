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

//print_r($_POST);
if (isset($_POST['modifGallery'])&& isset($_POST['gallerieName'])) {
 	print_r($_POST['modifGallery']);
 	print_r($_POST['gallerieName']);
    // j'ai cliqué sur « modifGallery »
 
} elseif (isset($_POST['uploadPicture']&& isset($_POST['gallerieName'])) {
 	print_r($_POST['uploadPicture']);
    // j'ai cliqué sur « uploadPicture »

} elseif (isset($_POST['supprGallery']&& isset($_POST['gallerieName'])) {
    // j'ai cliqué sur « supprGallery »
    print_r($_POST['supprGallery']); 
}else{
	$_SESSION['alerte']= "Veuillez choisir une galerie"
}
include("../view/galleries.tpl");
?>