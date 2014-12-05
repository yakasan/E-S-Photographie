<?php 
require_once('indexx.php');
require_once("model/class.gallery.php");


//print_r($tableData);

function createGalleryFolder ($title){
	$title=strtolower($title);
	$title=str_replace(" ","_",$title);
	//On vérifie l'existence du répertoire $Num et on le crée si il n'existe pas 
	if (is_dir("../gallery/$title")){ 
		header('Location:indexx.php?page=2');
	} 
	elseif (!is_dir("../gallery/$title")){ 
		mkdir ("../gallery/$title", "0777"); 
	} 
}

function destructFolder ($nameGallery){

	$nameGallery = strtolower($nameGallery);
	$nameGallery = str_replace(" ","_",$nameGallery);
	$nameGallery = str_replace(".", "", $nameGallery);
	print_r($nameGallery);

	$selectGallery = opendir("../gallery/$nameGallery");
    while (false !== ($nameFile = readdir($selectGallery))) {
        if ($nameFile != "." && $nameFile != "..") {
            echo "$nameFile a été supprimé";
            unlink("../gallery/$nameGallery/$nameFile");
        }
    }
    echo"la galerie a été supprimée";
	rmdir("../gallery/$nameGallery");
}


if (isset($_SESSION['login']) && $_SESSION['admin']==1){
	$gallery = new Gallery();


if(empty($_POST['nameGallery']) && empty($_POST['textGallery'])){
	$_SESSION['dataLess']="infos manquantes";
}/*else{
	unset($_SESSION['dataLess']);
}*/

if(!empty($_POST['nameGallery']) && !empty($_POST['textGallery'])){
		$title=$_POST['nameGallery'];
		$description=$_POST['textGallery'];

		$exist = $gallery->knowFolderExist($title);

		if ($exist){
			$_SESSION['galleryExist']="Galerie déjà existante";
		}else{
			$gallery->createGallery($title, $description);
			createGalleryFolder($title);
		}

		$_POST='';
}
$tableData = $gallery->getData();


	if(empty($_POST['nameGallery']) && empty($_POST['textGallery'])){
		$_SESSION['dataLess']="infos manquantes";
	}

	if(!empty($_POST['nameGallery']) && !empty($_POST['textGallery'])){
			$title=$_POST['nameGallery'];
			$description=$_POST['textGallery'];

			$exist = $gallery->knowFolderExist($title);

			if ($exist){
				$_SESSION['galleryExist']="Galerie déjà existante";
			}else{
				$gallery->createGallery($title, $description);
				createGalleryFolder($title);
			}

			$_POST='';
			//unset($_SESSION['galleryExist']);
	}
	$tableData = $gallery->getData();

	//print_r($tableData);

	if (isset($_POST['modifGallery'])&& isset($_POST['gallerieName'])) {
	 	// j'ai cliqué sur « modifGallery »
		 	print_r($_POST['modifGallery']);
		 	print_r($_POST['gallerieName']);
		 	$_SESSION['gallerieName'] = $_POST['gallerieName'];
		 	header('Location:indexx.php?page=8');

	} elseif (isset($_POST['uploadPicture'])&& isset($_POST['gallerieName'])) {
	    // j'ai cliqué sur « uploadPicture »
	    	$nameGallery = $_POST['gallerieName'];
	    	$_SESSION['gallerieNameUpload'] = $_POST['gallerieName'];
	    	$_SESSION['gallerieIdUpload'] = $gallery->getIdGallery($nameGallery);
	    	header('Location:indexx.php?page=4');

	} elseif (isset($_POST['supprGallery'])&& isset($_POST['gallerieName'])) {
	    // j'ai cliqué sur « supprGallery »
	    	$gallerieName=$_POST['gallerieName'];
			destructFolder($gallerieName);
			$gallery->destructGallery($gallerieName);
			header('Location:indexx.php?page=2');
	}
	include("view/galleries.tpl");
}else{
	header("Location: ../index.html");
	die;
}
?>