<?php 

require_once("config.php");

$usu = new Usuario();

$usu->loadById(16);

echo $usu;

?>