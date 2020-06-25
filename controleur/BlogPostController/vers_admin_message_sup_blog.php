<?php
require '/../../functions.php';
function valide_sup_blog()
{
	$idBlog = htmlspecialchars($_GET['id']);
	$errors = array();

	function chargerClasse($classname)
	{
  		require  'modele/' .$classname.'.php';
	}
	spl_autoload_register('chargerClasse');
			
	$bdd = new PDO('mysql:host=localhost;dbname=blo;charset=utf8', 'root', '');

	$BlogPostManager = new BlogPostManager($bdd);
			
	$blog= $BlogPostManager->read($idBlog);
	$idDataBase = $blog->id();

	if (isset($idBlog) AND !empty($idBlog) AND $idBlog == $idDataBase)  
	{
		// 1 : On force la conversion en nombre entier
		$idBlog = (int) $idBlog;

		// 2 : Le nombre doit être compris entre 1 et 500
		if ($idBlog >= 1 AND $idBlog <= 500) 
		{	
			$delete = $BlogPostManager->delete($blog); 

			if($delete == true)
			{
				include(dirname(__FILE__).'/../../vue/admin/validation_blog_sup.php');
			}
			else
			{
				include(dirname(__FILE__).'/../../vue/admin/erreur_validation_blog_sup.php');
			}		
		}
	}
	else
	{
   		$errors['id'] = "L'id du blog n'est pas valide !!!";
        debug($errors);
	}	
} 
?>