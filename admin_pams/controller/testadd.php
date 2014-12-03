<?php 
include("../view/general.tpl");
require_once("../model/class.general.php");


if (!empty($title)) {
	$add= General::makePages($id, $title, $content, $image , $background);
}
else{
	$modif=General::editPages($id, $title, $content, $image , $background);
}
 ?>