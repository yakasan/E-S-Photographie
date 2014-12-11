<?php

session_start();
if (isset($_GET['page'])){
	if ($_GET['page']==1){
		$_SESSION['namePage']='Accueil';
		include('controller/homeController.php');
		die;
	}
	if ($_GET['page']==2){
		$_SESSION['namePage']='Galeries';
		include('controller/galleriesController.php');
		die;
	}
	if ($_GET['page']==3){
		$_SESSION['namePage']='Messages';
		include('controller/messagesController.php');
		die;
	}
	if ($_GET['page']==4){
		$_SESSION['namePage']='Photos';
		include('controller/photosController.php');
		die;
	}
	if ($_GET['page']==5){
		$_SESSION['namePage']='Modifications des photos';
		include('controller/photosModifController.php');
		die;
	}
	if ($_GET['page']==6){
		$_SESSION['namePage']='Présentation';
		include('controller/presentController.php');
		die;
	}
	if ($_GET['page']==7){
		$_SESSION['namePage']='Général';
		include('controller/generalController.php');
		die;
	}
	if ($_GET['page']==8){
		$_SESSION['namePage']='Edition de galerie';
		include('controller/editGalleriesController.php');
		die;
	}
	
}
?>