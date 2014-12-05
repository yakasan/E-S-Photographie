<?php 
require_once("model/class.general.php");
echo "stop";
//print_r($_POST);
$title=$_POST['title'];
$content=$_POST['content'];
$image=$_POST['url_img']; 
$background=$_POST['url_bg'];
print_r($title);
print_r($content);
print_r($image);
print_r($background);

/*
$m = new General($id,$title, $content);
$m->getDataPages()
$m->makePages($title, $content);
/*
if (!empty($title)) {
	$m->makePages();
}
else{
	$m->editPages();
}*/
//print_r($_POST);
include("view/general.tpl");
 ?>