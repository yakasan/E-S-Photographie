<?php 

require_once('class.model.php');
class Gallery extends Model {

    private $id;
    private $title;
    private $description;
    private $img_present;

    function __construct($id, $title, $description, $img_present) {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->img_present = $img_present;
    }
    
    public function getData(){
        $this->pdo->exec("SELECT * FROM galleries");
        return $row=$this->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function makeGallery($title, $desc, $img_present){
        $this->pdo->exec("INSERT INTO galleries (title, description, img_present) VALUES('$title','$description','$img_present')");
    }

    public function editGallery($title, $desc, $img_present){
        $this->pdo->exec("UPDATE galleries SET title=$title, description=$description, img_present=$img_present WHERE title=$title");
    }
}


 ?>