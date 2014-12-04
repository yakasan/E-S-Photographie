<?php 
require_once("../model/class.general.php");
//print_r($_POST);

$title=$_POST['title'];
$content=$_POST['content'];
$image=$_POST['url_img']; 
$background=$_POST['url_bg'];

$m= new General($id,$title, $content, $image , $background );

if (!empty($title)) {
	$m->makePages();
}
else{
	$m->editPages();
}
//print_r($_POST);
include("../view/general.tpl");
 ?>