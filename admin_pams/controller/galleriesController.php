<?php 

require_once("../model/class.gallery.php");

$gallery = new Gallery();

$tableData = $gallery->getData();

function createGalleryFolder ($title){
	$title=strtolower($title);
	$title=str_replace(" ","_",$title);
	//On vérifie l'existence du répertoire $Num et on le crée si il n'existe pas 
	if (is_dir("C:/xampp/htdocs/E-S-Photographie/gallery/$title")){ 
		?>
		<script language="javascript">
			alert("Dossier déjà existant");
		</script> 
		<?php
		header('Location:galleriesController.php');
	} 
	if (!is_dir("C:/xampp/htdocs/E-S-Photographie/gallery/$title")){ 
		mkdir ("C:/xampp/htdocs/E-S-Photographie/gallery/$title", "0777"); 
	} 
}

if(!empty($_POST['nameGallery']) && !empty($_POST['textGallery'])){
	if(!empty($_POST['nameGallery'])){
		$title=$_POST['nameGallery'];
	}
	if(!empty($_POST['textGallery'])){
		$description=$_POST['textGallery'];
	}
	if(!empty($title) && !empty($description)){
		$gallery->createGallery($title, $description);
		createGalleryFolder($title);
		header('Location:galleriesController.php');
	}
}


//print_r($tableData);

include("../view/galleries.tpl");
?>