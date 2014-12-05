<?php 
require_once("model/class.gallery.php");
require_once('indexx.php');


if (isset($_SESSION['login']) && $_SESSION['admin']==1){
	$gallery = new Gallery();

	if(empty($_POST['titleNew']) && empty($_POST['descriptionNew'])){
		$_SESSION['dataLess']="infos manquantes";
	}else{
		unset($_SESSION['dataLess']);
	}

	if(!empty($_POST['titleNew']) && !empty($_POST['descriptionNew'])){
			$titleNew=$_POST['titleNew'];
			$description=$_POST['descriptionNew'];

			$gallery->updateGallery($titleNew, $descriptionNew, $title);
			$titleNew=strtolower($titleNew);
			$titleNew=str_replace(" ","_",$titleNew);
			rename("../gallery/$title", "../gallery/$titleNew");
	}


$tableData = $gallery->getData();
print_r($_POST);
include("view/editGalleries.tpl");
}else{
	header("Location: ../index.html");
	die;
}
?>