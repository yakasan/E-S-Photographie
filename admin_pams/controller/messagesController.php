<?php 
include("../view/messages.tpl");
require_once("../model/class.message.php");
$list = new Message;
$recmess= $list->recupMessage();





 ?>