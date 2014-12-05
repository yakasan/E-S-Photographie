<?php 
require_once('indexx.php');
require_once("model/class.message.php");
if (isset($_SESSION['login']) && $_SESSION['admin']==1){

$list = new Message;

if (isset($_POST['idmess'])){
	$id=$_POST['idmess'];
	$recmessindiv = $list->recupMessIndiv($id);
	$_SESSION['mess']=$recmessindiv;
	$_SESSION['idmess']=$id;
	if ($recmessindiv[0]['seen']==1){
		$txt="Marquer comme 'Pas Vue'";
	}else{
		$txt="Marquer comme 'Vue'";
	}

}
if (isset($_GET['seeing'])){
	$id=$_SESSION['idmess'];
	$recmessindiv=$_SESSION['mess'];	
	if ($recmessindiv[0]['seen']==1){
		$list->unseen($id);
		$recmessindiv[0]['seen']=0;
		$txt="Marquer comme 'Vue'";
	}else{
		$list->seen($id);
		$recmessindiv[0]['seen']=1;
		$txt="Marquer comme 'Pas Vue'";
	}
}

if (isset($_GET['supprimer'])){
	$idsup=$_SESSION['idmess'];
	$list->supprMess($idsup);
}
$recmess= $list->recupMessage();
include("view/messages.tpl");
}else{
	header("Location: ../index.html");
	die;
}



 ?>