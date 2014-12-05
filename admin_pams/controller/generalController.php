<?php 
require_once("indexx.php");
require_once("model/class.general.php");

if (isset($_SESSION['login']) && $_SESSION['admin']==1){
	$content=$_POST['content'];
	$image=$_POST['url_img']; 
	$background=$_POST['url_bg'];
	$btnvalid=$_POST['btnvalid'];

	$m = new General();
	$m->getDataPages();
	$m->makePages();
include("view/general.tpl");

}else{
	header("Location : ../index.html");
	die;
}

 ?>