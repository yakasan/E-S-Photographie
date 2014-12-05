<?php 

require_once("indexx.php");
require_once("model/class.general.php");

if (isset($_SESSION['login']) && $_SESSION['admin']==1){
	if (isset($_POST['title'])){
		$title=$_POST['title'];
		$content=$_POST['content'];
		$background=$_POST['background'];
		$btnvalid=$_POST['btnvalid'];
		var_dump($_POST['background']);
		$m = new General();
		$m->getDataPages();
		$m->makePages($title, $content, $background);
	}
	include("view/general.tpl");
}else{
	header('Location: index.html');
	
}

?>
