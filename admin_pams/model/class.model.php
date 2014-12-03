<?php

class Model {

    public static $dns = "mysql:host=localhost; dbname=es_photographie";
    public static $user = "stagiaire";
    public static $pass = "stagiaire";

    public static $connexion ;

<<<<<<< HEAD
   $query = self::$connexion->prepare("SELECT j.nom nom_jeu, p.prenom prenom_proprietaire FROM proprietaires p INNER JOIN photos j
    ON j.ID_proprietaire = p.ID;
}*/
/*function show_title_galleries(){
    $req=$connexion->query("SELECT * FROM galleries");
    while($row = $req->fetch())
    {
            echo "<a href='#' class='list-group-item'> ".$row['title']." </a>";
    }
    $req->closeCursor();
}*/
?>
=======
    function __construct() {
        $this->connexion = new PDO($dns, $user, $pass);
    }   
}
?>

>>>>>>> 03bc2887d234ac7248004b059dc647116b9d683c
