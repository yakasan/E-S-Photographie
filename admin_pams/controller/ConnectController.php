<?php
session_start();
<

function auth($login, $password){
/*	$model=new Model();
	$bdd=$model->connect();*/
	$bdd=connect();
	$resp=$bdd->query("SELECT login, password FROM administrator");
	$logs=$resp->fetchAll(PDO::FETCH_ASSOC);
	$password2=md5($password);
	foreach($logs as $key => $value){
		($logs[$key]['login']==$login)?$logpres=1:$logpres=0;
		($logs[$key]['password']==$password2)?$passpres=1:$passpres=0;
	}
	if ($logpres==1 && $passpres==1){
		$_SESSION['login']=$login;
		$_SESSION['password']=$password;
		$_SESSION['admin']=1;
		header("Location : homeController.php");
	}else{
		echo "Mot de Passe/Utilisateur incorrect.";
		die (header("../index.html"));
	}

}


	$model=new Model();
	
if (isset($_POST['login'],$_POST['password'])){
	$log=$_POST['login'];
	$pass=$_POST['password'];
	$model->auth($log,$pass);
}
?>
