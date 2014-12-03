<?php

class Model {

    public static $dns = "mysql:host=localhost; dbname=es_photographie";
    public static $user = "stagiaire";
    public static $pass = "stagiaire";
<<<<<<< HEAD
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
=======
    public static $connexion ;

    function __construct() {
        $this->connexion = new PDO($dns, $user, $pass);
    }

    
}



?>
>>>>>>> 411a4d9a530d32b255df5fb1f6c0226943c92497
