<?php
function valide_modif_blog()
{
	if (isset($_GET['id']) )
	{
	// 1 : On force la conversion en nombre entier
	$_GET['id'] = (int) $_GET['id'];

	// 2 : Le nombre doit être compris entre 1 et 100
		if ($_GET['id'] >= 1 AND $_GET['id'] <= 100) 
		{	
			/*include(dirname(__FILE__).'/../modele/requete_sql.php');
			$ne= afficher_le_post();
			include(dirname(__FILE__).'/../admin/validation_blog_modif.php');*/
			//include(dirname(__FILE__).'/../modele/BlogPostManager.php');
			function chargerClasse($classname)
			{
  				require 'modele/' . $classe . '.php';
			}
			spl_autoload_register('chargerClasse');
			
			$bdd = new PDO('mysql:host=localhost;dbname=blo;charset=utf8', 'root', '');
			$BlogPostManager= new BlogPostManager($bdd);
			$id= $_GET['id'];

			$read= $BlogPostManager->read($id);
			
			include(dirname(__FILE__).'/../admin/validation_blog_modif.php');
		}
	}
	else
	{
   		echo 'Il faut renseigner un nom, un prénom et un nombre de répétitions !';
	}
	

	
}
?>