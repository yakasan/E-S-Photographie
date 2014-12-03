<?php

class Model {

<<<<<<< HEAD
    private $dns = "mysql:host=localhost; dbname=es_photographie";
    private $user = "stagiaire";
    private $pass = "stagiaire";

    public static $connexion ;
=======
>>>>>>> 33c987bbb878208c04e70e207310c22b31a8a5fb

    public $dns = "mysql:host=localhost; dbname=es_photographie";
    public $user = "stagiaire";
    public $pass = "stagiaire";
    public $connexion ;

    function __construct() {
<<<<<<< HEAD
        $this->connexion = new PDO($dns, $user, $pass);
    }

    function auth($login, $password){
	$bdd=$connexion;
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
=======

        $this->connexion = new PDO($this->dns, $this->user, $this->pass);
    }
>>>>>>> 33c987bbb878208c04e70e207310c22b31a8a5fb

}
?>
