<?php 
require_once('indexx.php');
if (isset($_SESSION['login']) && $_SESSION['admin']==1){

include("view/present.tpl");
}else{
	header("Location : ../index.html");
	die;
}

 ?>