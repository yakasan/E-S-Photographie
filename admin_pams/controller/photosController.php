<?php 
include('../model/class.photo.php');


	if(isset($_POST['addPhoto'])){
		//print_r($_POST['addPhoto']);
		//die();
		$nouvellePhoto = new Photo();
		$nouvellePhoto->AddPhoto(' ', $_POST['addPhoto']['title'], $_POST['addPhoto']['desc'], ' ', ' ');
	}

include("../view/photos.tpl")
 ?>