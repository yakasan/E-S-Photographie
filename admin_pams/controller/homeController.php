<?php 
include("../view/home.tpl");
require_once('../model/class.model.php');
	$model= New Model();
if (isset($_POST['login'],$_POST['password'])){
	$log=$_POST['login'];
	$pass=$_POST['password'];
	if ($model->auth($log,$pass)){
		$_SESSION['login']=$log;
		$_SESSION['admin']=1;
		header("Location : homeController.php");
	}else{
		echo "Mot de Passe/Utilisateur incorrect.";
		die (header("Location : ../index.html"));
	}
}
?>