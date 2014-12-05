<?php 
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
//$m->makePages($title, $content);

 ?>