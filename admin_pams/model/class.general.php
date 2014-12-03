<?php 

require_once('class.model.php');
class General extends Model {

    private $id;
    private $title;
    private $content;
    private $image;
    private $background;

    function __construct($id, $title, $content, $image , $background) {
        $this->id = $id;
        $this->title = $title;
        $this->content = $content;
        $this->image = $image;
        $this->background = $background;
    }
    
    public function getDataPages(){
        $this->pdo->exec("SELECT * FROM pages");
        return $row=$this->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function makePages($id, $title, $content, $image , $background){
        $this->pdo->exec("INSERT INTO pages (id, title, content, image , background) VALUES('$title','$content','$image','$background')");
    }

    public function editPages($title, $desc, $image){
        $this->pdo->exec("UPDATE pages SET title=$title, content=$content, image=$image image=$image WHERE title=$title");
    }
}


 ?>