<?php 
require_once("../model/class.general.php");

echo "stop";
//print_r($_POST);
$title=$_POST['title'];
$content=$_POST['content'];
$image=$_POST['url_img']; 
$background=$_POST['url_bg'];

$m = new General();
$m->getDataPages();
$m->editPages();
//$m->makePages($title, $content);
/*
if (!empty($title)) {
	$m->makePages();
}
else{
	$m->editPages();
}*/
//print_r($_POST);
include("../view/general.tpl");

 ?>