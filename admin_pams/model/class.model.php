<?php

class Model {

<<<<<<< HEAD
    public static $dns = "mysql:host=localhost; dbname=es_photographie";
    public static $user = "stagiaire";
    public static $pass = "stagiaire";
    public static $connexion ;
=======
    public $dns = "mysql:host=localhost; dbname=es_photographie";
    public $user = "stagiaire";
    public $pass = "stagiaire";
    public $connexion ;
>>>>>>> b3b69dd13291dc5cfebbf2fdc4ea498d3f29283a

    function __construct() {
        $this->connexion = new PDO($this->dns, $this->user, $this->pass);
    }
    //permet la connection en tant qu'admin
    function auth($login, $password){
		$bdd=$this->connexion;
		$resp=$bdd->query("SELECT login, password FROM administrator");
		$logs=$resp->fetchAll(PDO::FETCH_ASSOC);
		$password2=md5($password);
		foreach($logs as $key => $value){
			($logs[$key]['login']==$login)?$logpres=1:$logpres=0;
			($logs[$key]['password']==$password2)?$passpres=1:$passpres=0;
		}
		if ($logpres==1 && $passpres==1){
			return TRUE;
		}else{
			return FALSE;
		}

	}

}
?>
