<?php 
include('../model/class.photo.php');

 
	if(isset($_POST['addPhoto'])){
		//print_r($_POST);
		//die();
		$nouvellePhoto = new Photo();
		$title = $_POST['title'];
		$desc = $_POST['desc'];
		//die;
		$nouvellePhoto->AddPhoto(' ', $title, $desc, ' ', ' ');
	}

include("../view/photos.tpl")
 ?>