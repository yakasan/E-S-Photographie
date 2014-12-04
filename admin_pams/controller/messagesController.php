<?php 
include("../view/messages.tpl");
require_once("../model/class.message.php");
$list = new Message;
$recmess= $list->recupMessage();
var_dump($recmess);

if (isset($_POST['idmess'])){
	$id=$_POST['idmess'];
	$recmessindiv = $list->recupMessIndiv($id);
}





 ?>