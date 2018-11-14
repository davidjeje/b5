<?php
function afficher_sup_blog()
{
	/*include(dirname(__FILE__).'/../modele/requete_sql.php');
	$news= afficher_liste_post();
	include(dirname(__FILE__).'/../admin/partie_admin_sup.php');*/
	function chargerClasse($classname)
	{
  		require 'modele/' . $classe . '.php';
	}


	spl_autoload_register('chargerClasse');
	$bdd = new PDO('mysql:host=localhost;dbname=blo;charset=utf8', 'root', '');

	$BlogPostManager = new BlogPostManager($bdd);
	$readAll= $BlogPostManager->readAll();
	
	include(dirname(__FILE__).'/../admin/partie_admin_sup.php');
}
?>