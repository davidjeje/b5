<?php
require '/../functions.php';
function afficher_un_post()
{
	$idBlog = htmlspecialchars($_GET['id']);

	$errors = array();

	function chargerMaClasse($Managers) 
	{
     	require 'modele/' . $Managers . '.php';
	}
	spl_autoload_register('chargerMaClasse');

	$bdd = new PDO('mysql:host=localhost;dbname=blo;charset=utf8', 'root', '');

	$BlogPostManager = new BlogPostManager($bdd);
			
	$read = $BlogPostManager->read($idBlog);
	$idDataBase = $read->id();

	if (isset($idBlog) AND !empty($idBlog) AND $idBlog == $idDataBase)
	{	
		if($read == true)
		{
			// 1 : On force la conversion en nombre entier
			$idBlog = (int) $idBlog;

			// 2 : Le nombre doit être compris entre 1 et 100
			if ($idBlog >= 1 AND $idBlog <= 500) 
			{	
				$CommentManager = new CommentManager($bdd);
			
				$readc = $CommentManager->readAllc($idBlog);

				if ($readc == true)
				{
					include(dirname(__FILE__).'/../vue/le_blog.php');
				}
				else
				{
					include(dirname(__FILE__).'/../vue/liste_blog.php');
				}				
			}
			else
			{
   				$errors['id'] = "L'id n'existe pas donc le blog demandé n'existe pas !!!";
        		debug($errors);
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