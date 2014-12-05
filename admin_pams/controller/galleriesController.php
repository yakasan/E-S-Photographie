<?php 
require_once('indexx.php');
require_once("model/class.gallery.php");

function createGalleryFolder ($title){
	//traitement de la chaine de caractères pour avoir un nom formaté
	$title=strtolower($title);
	$title=str_replace(" ","_",$title);

	//On vérifie l'existence du répertoire  
	if (is_dir("../gallery/$title")){ 
		header('Location:indexx.php?page=2');
	} 
	//On le crée si il n'existe pas
	elseif (!is_dir("../gallery/$title")){ 
		mkdir ("../gallery/$title", "0777"); 
	} 
}

function destructFolder ($nameGallery){
	//traitement de la chaine de caractères 
	$nameGallery = strtolower($nameGallery);
	$nameGallery = str_replace(" ","_",$nameGallery);
	$nameGallery = str_replace(".", "", $nameGallery);

	//ouverture du dossier choisi 
	$selectGallery = opendir("../gallery/$nameGallery");
	//lecture de l'ensemble des fichiers dans le dossier
    while (false !== ($nameFile = readdir($selectGallery))) {
        if ($nameFile != "." && $nameFile != "..") {
            echo "$nameFile a été supprimé";
            //suppression des fichiers
            unlink("../gallery/$nameGallery/$nameFile");
        }
    }
    //suppression du dossier une fois vidé
    echo"la galerie a été supprimée";
	rmdir("../gallery/$nameGallery");
}

// Appel du model en cas de connexion en tant que admin
if (isset($_SESSION['login']) && $_SESSION['admin']==1){
	$gallery = new Gallery();

// CREATION DE LA GALERIE
// Récupération des données de formulaire envoyé en post 
if(!empty($_POST['nameGallery']) && !empty($_POST['textGallery'])){
		$title=$_POST['nameGallery'];
		$description=$_POST['textGallery'];

	//On cherche a voir si le nom existe déjà dans la BDD
		$exist = $gallery->knowFolderExist($title);

		if ($exist){
			$_SESSION['galleryExist']="Galerie déjà existante";
		}else{
			//On lance la création dans la base de données
			$gallery->createGallery($title, $description);
			//On lance la création du répertoir 
			createGalleryFolder($title);
		}
		//On remet le $_POST à zero en lui donnant une valeur null
		$_POST='';
}

//On récupère l'ensemble des infos de la BDD dans une variable pour l'exploiter dans le controller
$tableData = $gallery->getData();

	// je clique sur le bouton MODIFIER dont la valeur est « modifGallery »
	if (isset($_POST['modifGallery'])&& isset($_POST['gallerieName'])) {
			//récupération des données en variable de session
		 	$_SESSION['gallerieName'] = $_POST['gallerieName'];
		 	//redirection vers le controller concerné
		 	header('Location:indexx.php?page=8');

 	// j'ai cliqué sur « uploadPicture »
	} elseif (isset($_POST['uploadPicture'])&& isset($_POST['gallerieName'])) {
	    	$nameGallery = $_POST['gallerieName'];
	    	//récupération du nom en variable de session
	    	$_SESSION['gallerieNameUpload'] = $_POST['gallerieName'];
	    	//récupération de l'id en variable de session et ré
	    	$_SESSION['gallerieIdUpload'] = $gallery->getIdGallery($nameGallery);
	    	header('Location:indexx.php?page=4');

	// j'ai cliqué sur « supprGallery »
	} elseif (isset($_POST['supprGallery'])&& isset($_POST['gallerieName'])) {
			//récupération du POST en variable
	    	$gallerieName=$_POST['gallerieName'];
	    	//appel de la fonction pour supprimer le répertoir
			destructFolder($gallerieName);
			//appel de la methode pour supprimer l'entrée dans la BDD
			$gallery->destructGallery($gallerieName);
			//redirection vers le controller concerné
			header('Location:indexx.php?page=2');
	}
	// inclusion de la vue à la fin pour l'affichage de l'ensemble des variables après traitement
	include("view/galleries.tpl");
}else{
	//si la personne n'est pas connectée on le redirige vers l'index du site à la racine
	header("Location: ../index.html");
	die;
}
?>