<?php

session_start();

if (isset($_GET['page'])){
	if ($_GET['page']==1){
		include('controller/homeController.php');
		die;
	}
	if ($_GET['page']==2){
		include('controller/galleriesController.php');
		die;
	}
	if ($_GET['page']==3){
		include('controller/messagesController.php');
		die;
	}
	if ($_GET['page']==4){
		include('controller/photosController.php');
		die;
	}
	if ($_GET['page']==5){
		include('controller/photosModifController.php');
		die;
	}
	if ($_GET['page']==6){
		include('controller/presentController.php');
		die;
	}
	if ($_GET['page']==7){
		include('controller/generalController.php');
		die;
	}
	if ($_GET['page']==8){
		include('controller/editGalleriesController.php');
		die;
	}
	
}
?>