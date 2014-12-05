<?php 
require_once('index.php');
if (isset($_SESSION['login']) && $_SESSION['admin']==1){

include("view/present.tpl");
}else{
	header("Location : ../index.html");
	die;
}

 ?>