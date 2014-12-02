<?php 
include("../view/galleries.tpl");
require_once("../model/class.model.php");

<<<<<<< HEAD
function show_title_galleries(){
	$req=$connexion->query("SELECT * FROM galleries");
	while($row = $req->fetch())
	{
			echo "<a href='#' class='list-group-item'> ".$row['title']." </a>";
	}
	$req->closeCursor();
}
=======

>>>>>>> 063499cb88321fdcbe830c5ac718ea5ba4195c1a


?>