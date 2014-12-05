<?php 

require_once('class.model.php');
class Gallery extends Model {

    private $id;
    private $title;
    private $description;
    private $img_present;
    
    public function getData(){
        $tableData = $this->connexion->query("SELECT * FROM galleries");
        return $tableData->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getIdGallery($nameGallery){
        $tableData = $this->connexion->query("SELECT id FROM galleries WHERE title='$nameGallery'");
        return $tableData->fetch(PDO::FETCH_ASSOC);
    }
    
    public function createGallery($title, $description){
       $this->connexion->exec("INSERT INTO galleries (title, description) VALUES ('$title', '$description')");
    }

    public function updateGallery($titleNew, $descriptionNew, $title){
       $this->connexion->exec("UPDATE galleries SET title='$titleNew', description='$descriptionNew' WHERE title='$title'");
    }

    public function destructGallery($title){
       $this->connexion->exec("DELETE from galleries WHERE title='$title'");
    }

    public function knowFolderExist($title){ 
        $folderExist = $this->connexion->query("SELECT * FROM galleries WHERE title = '$title'");
        $result = $folderExist->fetchAll(PDO::FETCH_ASSOC);
        //print_r($result);
        if (!empty($result))
        {  
            return true;
        }else{
            return false;
        }
    }
}

?>