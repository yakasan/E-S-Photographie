<?php 
include("../view/galleries.tpl");
require_once("../model/class.model.php")

function show_title_galleries(){
	$connexion = new PDO('mysql:host=localhost; dbname=es_photographie', 'stagiaire', 'stagiaire');
	$req=$connexion->query("SELECT * FROM galleries");
	while($row = $req->fetch())
	{
			echo "<a href='#' class='list-group-item'> ".$row['title']." </a>";
	}
	$req->closeCursor();
}


?>