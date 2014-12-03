<?php 

require_once('class.model.php');
class Gallery extends Model {

    private $id;
    private $title;
    private $description;
    private $img_present;

    /*function __construct($id, $title, $description, $img_present) {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->img_present = $img_present;
    }*/
    
    public function getData(){
        $tableData = $this->connexion->query("SELECT * FROM galleries");
        //print_r($getData);
        return $tableData->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function createGallery($title, $description){
        $this->connexion->exec("INSERT INTO galleries (title, description) VALUES ('$title', '$description')");
    }

    public function kwnoFolderExist($title){ 
        $folderExist = $this->connexion->query('SELECT * FROM galleries WHERE title = $title');
        print_r($folderExist);
        //$exist = $folderExist->fetchAll(PDO::FETCH_ASSOC);
        //$exist = $folderExist->fetchColumn();

        if (!empty($exist))
        {  
            ?>
            <script language="javascript">
                 alert("Dossier "<?= $title ?>" déjà existant");
            </script> 
            <?php
            header('Location:galleriesController.php');
        }
    }
    /*public function createGalleryFolder($title){
        //$this->mkdir(path,mode,recursive,context);
        $title=str_replace(" ","_",$title);
        
    }*/
}


 ?>