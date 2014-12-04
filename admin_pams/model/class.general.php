<?php 

require_once('class.model.php');

class General extends Model {

    public $id;
    public $title;
    public $content;
    public $image;
    public $background;
    public $type;


    /*function __construct($title, $content, $image , $background, $type=0, $id=0 ) {
        $this->id = $id;
        $this->title = $title;
        $this->content = $content;
        $this->image = $image;
        $this->background = $background;
        $this->type = $type;
    }*/
    
    public function getDataPages(){
        $tableData = $this->connexion->query("SELECT * FROM pages");
        return $tableData->fetchAll(PDO::FETCH_ASSOC);
        print_r($tableData);
        echo "méthode getdatapage";
    }
    
    public function makePages($title, $content){
        $this->connexion->exec("INSERT INTO pages (title, content) VALUES('$title', '$content')");
        echo "la page a été crée";
    }

    public function editPages(){
        $this->connexion->exec("UPDATE pages SET title=$title, content=$content, image=$image background=$background type=$type WHERE title=$title");
    }
}


?>