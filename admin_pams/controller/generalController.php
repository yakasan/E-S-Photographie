<?php 
/*
require_once("../model/class.general.php");
//phpinfo();

$content=$_POST['content'];
$image=$_POST['url_img']; 
$background=$_POST['url_bg'];
//$btnvalid=$_POST['btnvalid'];

$m = new General();
$m->getDataPages();
$m->makePages();
include("../view/general.tpl");
*/
require_once("index.php");
require_once("model/class.general.php");

if (isset($_SESSION['login']) && $_SESSION['admin']==1){
	$title=$_POST['title'];
	$content=$_POST['content'];
	$image=$_POST['url_img']; 
	$background=$_POST['url_bg'];
	$btnvalid=$_POST['btnvalid'];

	$m = new General();
	$m->getDataPages();
	$m->makePages($title, $content);
include("view/general.tpl");
//$m->makePages($title, $content);
}else{
	header("Location : ../index.html");
	die;
}

?>