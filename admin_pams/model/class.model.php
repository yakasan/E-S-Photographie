<?php

class Model {
    public static $dns = "mysql:host=localhost; dbname=es_photographie";
    public static $user = "stagiaire";
    public static $pass = "stagiaire";
    $connexion = new PDO($dns, $user, $pass);

function getBy() {
        $query = self::$connexion->prepare("SELECT * FROM ".$this->table.);
        $query->execute();
        return $query;
    }

    

function joinGalleries();{

       

   
function show_title_galleries(){
    $req=$connexion->query("SELECT * FROM galleries");
    while($row = $req->fetch())
    {
            echo "<a href='#' class='list-group-item'> ".$row['title']." </a>";
    }
    $req->closeCursor();
}   
  
}

?>