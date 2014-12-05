<?php 
require_once('index.php');
require_once("model/class.message.php");
if (isset($_SESSION['login']) && $_SESSION['admin']==1){

$list = new Message;

if (isset($_POST['idmess'])){
	$id=$_POST['idmess'];
	$list->seen($id);
	$recmessindiv = $list->recupMessIndiv($id);
	$_SESSION['idmess']=$id;

}

if (isset($_GET['supprimer'])){
	$idsup=$_SESSION['idmess'];
	$list->supprMess($idsup);
}
$recmess= $list->recupMessage();
include("view/messages.tpl");
}else{
	header("Location : ../index.html");
	die;
}



 ?>