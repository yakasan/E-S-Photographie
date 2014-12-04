<?php 
include('../model/class.photo.php');

 
	if(isset($_POST['addPhoto'])){
		//print_r($_POST['addPhoto']);
		//die();
		$nouvellePhoto = new Photo();
		print_r($nouvellePhoto);
		die;
		//$nouvellePhoto->AddPhoto(' ', $_POST['addPhoto']['title'], $_POST['addPhoto']['desc'], ' ', ' ');
	}

include("../view/photos.tpl")
 ?>