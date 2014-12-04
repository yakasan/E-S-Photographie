<?php
session_start();
if (isset($_GET['page'])){
	if ($_GET['page']==1){
		include('homeController.php');
		die;
	}
	if ($_GET['page']==2){
		include('galleriesController.php');
		die;
	}
	if ($_GET['page']==3){
		include('messagesController.php');
		die;
	}
	if ($_GET['page']==4){
		include('photosController.php');
		die;
	}
	if ($_GET['page']==5){
		include('photosModifController.php');
		die;
	}
	if ($_GET['page']==6){
		include('presentController.php');
		die;
	}

}
?>