<?php 

require_once('class.model.php');
class General extends Model {

    public $id;
    public $title;
    public $content;
    public $image;
    public $background;
    public $type;


    function __construct($title, $content, $image , $background, $type=0, $id=0 ) {
        $this->id = $id;
        $this->title = $title;
        $this->content = $content;
        $this->image = $image;
        $this->background = $background;
        $this->type = $type;
    }
    
    public function getDataPages(){
        $this->connexion->exec("SELECT * FROM pages");
        return $row=$this->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function makePages(){
        print_r($this->connexion);
        $this->connexion->exec("INSERT INTO pages (id, title, content, image , background) VALUES('$title','$content','$image','$background')");
    }

    public function editPages(){
        $this->connexion->exec("UPDATE pages SET title=$title, content=$content, image=$image background=$background type=$type WHERE title=$title");
    }
}


 ?>