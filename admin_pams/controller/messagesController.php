<?php 

require_once("../model/class.message.php");
$list = new Message;
$recmess= $list->recupMessage();


if (isset($_POST['idmess'])){
	$id=$_POST['idmess'];
	$recmessindiv = $list->recupMessIndiv($id);
}
include("../view/messages.tpl");




 ?>