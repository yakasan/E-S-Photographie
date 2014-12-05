<?php 
require_once('model/class.model.php');
require_once('index.php');

if (isset($_POST['login'],$_POST['password'])){
	$model= New Model();
	$log=$_POST['login'];
	$pass=$_POST['password'];

	if ($model->auth($log,$pass)){
		$_SESSION['login']=$log;
		$_SESSION['admin']=1;
		include("view/home.tpl");
	}else{

		echo "Mot de Passe/Utilisateur incorrect.";
		header("Location : index.html");
		die;
	}
}
	

if (isset($_SESSION['login']) && $_SESSION['admin']==1){
	require_once("view/home.tpl");
}else{
	header("Location : ../index.html");
	die;
}
?>