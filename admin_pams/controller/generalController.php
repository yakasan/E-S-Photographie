<?php 
require_once("../model/class.general.php");

if(isset($_POST['title'])){
	$title=$_POST['title'];
	print_r($title);
}

if(isset($_POST['content'])){
	$content=$_POST['content'];
	print_r($content);
}
if(isset($_POST['url_bg'])){
	$background=$_POST['url_bg'];
	print_r($background);
}
if(isset($_POST['btnvalid'])){
	$btnvalid=$_POST['btnvalid'];
	print_r($btnvalid);
}

$m = new General();

	//$m->getDataPages();
	//$m->makePages();
include("../view/general.tpl");
//$m->makePages($title, $content);

 ?>