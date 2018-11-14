<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=blo;charset=utf8', 'root', '');


if(isset($_POST['pass']) and isset($_POST['pseudo'])) 
{
	include('controleur/vers_le_menu_admin.php');
	conect();
}
elseif (isset($_POST['author']) and isset($_POST['title']) ) 
{
	include('controleur/ajouter.php');
	ajouter();
}


?>
