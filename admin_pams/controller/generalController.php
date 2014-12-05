<?php 

require_once("indexx.php");
require_once("model/class.general.php");
require_once('model/class.photo.php');


if (isset($_SESSION['login']) && $_SESSION['admin']==1){
	if (isset($_POST['title'])){
		$title=$_POST['title'];
		$content=$_POST['content'];
		$background=$_FILES['background'];
		$btnvalid=$_POST['btnvalid'];
		$m = new General();
		$m->getDataPages();
		$m->makePages($title, $content, $background);
	}
	include("view/general.tpl");

	if(isset($_FILES['background'])){
		$nouvellePhoto = new Photo();
		$tmpname = $_FILES['background']['tmp_name'];
		$extension = $_FILES['background']['type'];
		$extension = substr($extension, 6);
		$name = $_FILES['background']['name'];
		$chemin = $name.'.'.$extension;
		//print_r($exif);
		//die;
		//Ajout nouvelle photo Fichier correspondant
		$nouvellePhoto->AddBackgroundToFolder($tmpname, $name, $extension);
	}
}else{
	header('Location: index.html');
}

?>