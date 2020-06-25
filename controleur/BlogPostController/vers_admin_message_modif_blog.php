<?php
require '/../../functions.php';
function valide_modif_blog() 
{
	$idBlog = htmlspecialchars($_GET['id']);
	$errors = array();

	function chargerClasse($classname)
	{
  		require 'modele/' . $classe . '.php';
	}
	spl_autoload_register('chargerClasse');
				
	$bdd = new PDO('mysql:host=localhost;dbname=blo;charset=utf8', 'root', '');

	$BlogPostManager = new BlogPostManager($bdd);

	$read = $BlogPostManager->read($idBlog);
	$idDataBase = $read->id();

	if (isset($idBlog) AND !empty($idBlog) AND $idBlog == $idDataBase) 
	{
		// 1 : On force la conversion en nombre entier
		$idBlog = (int) $idBlog;

		// 2 : Le nombre doit être compris entre 1 et 500 
		if ($idBlog >= 1 AND $idBlog <= 500) 
		{	
			if($read == true) 
			{
				include(dirname(__FILE__).'/../../vue/admin/validation_blog_modif.php');
			}
			else
			{
				include(dirname(__FILE__).'/../../vue/admin/erreur_validation_blog_modif.php');
			}
		}
		else 
		{
   			$errors['id'] = "L'id n'est pas compris dans la limite prévus !!!";
        	debug($errors);
		}	
	}
	else 
	{
   		$errors['id'] = "L'id du blog n'est pas valide !!!";
        debug($errors);
	} 	
}
?>