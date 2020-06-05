<?php
function afficher_modif_blog()
{	
	function chargerClasse($classname) 
	{
  		require 'modele/' . $classe . '.php'; 
	}
	spl_autoload_register('chargerClasse');

	$bdd = new PDO('mysql:host=localhost;dbname=blo;charset=utf8', 'root', '');

	$BlogPostManager = new BlogPostManager($bdd);

	$readAll = $BlogPostManager->readAll();

	if($readAll)
	{
		include(dirname(__FILE__).'/../vue/admin/partie_admin_modif_blog.php');
	}
	else
	{
		include(dirname(__FILE__).'/../vue/admin/erreur_partie_admin_modif_blog.php');
	}
}; 
?>