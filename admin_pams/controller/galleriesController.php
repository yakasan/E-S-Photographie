<?php 

require_once("../model/class.gallery.php");

$gallery = new Gallery();

$tableData = $gallery->getData();

if(!empty($_POST['nameGallery']) && !empty($_POST['textGallery'])){
	if(!empty($_POST['nameGallery'])){
		$title=$_POST['nameGallery'];
	}
	if(!empty($_POST['textGallery'])){
		$description=$_POST['textGallery'];
	}
	print_r($title);
	print_r($description);
}


//print_r($tableData);

include("../view/galleries.tpl");
?>