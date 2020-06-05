<?php
function afficher_sup_blog()
{ 
	function chargerClasse($classname)
	{
  		require 'modele/' . $classe . '.php';
	}
	spl_autoload_register('chargerClasse');
	$bdd = new PDO('mysql:host=localhost;dbname=blo;charset=utf8', 'root', '');

	$BlogPostManager = new BlogPostManager($bdd);
	$readAll = $BlogPostManager->readAll();

	if($readAll == true)
	{
		include(dirname(__FILE__).'/../vue/admin/partie_admin_sup.php');
	}
	else
	{
		include(dirname(__FILE__).'/../vue/admin/menu_partie_admin.php');
	}	
}
?>