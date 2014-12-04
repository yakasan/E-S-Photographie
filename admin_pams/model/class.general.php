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

    }
    
    public function makePages($title, $content){
        $this->connexion->exec("DELETE FROM pages WHERE id = '1'");
        $this->connexion->exec("INSERT INTO pages (title, content,type) VALUES('$title', '$content', 'index')");
    }

    //public function editPages(){
    //    $this->connexion->exec("UPDATE pages SET title='$title', content='$content' WHERE id='1'");
    }
}


?>