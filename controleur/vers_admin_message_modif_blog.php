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
			function chargerClasse($classname)
			{
  				require 'modele/' . $classe . '.php';
			}
			spl_autoload_register('chargerClasse');
			
			
			$bdd = new PDO('mysql:host=localhost;dbname=blo;charset=utf8', 'root', '');

			$BlogPostManager = new BlogPostManager($bdd);

			$id = $_GET['id'];

			$read = $BlogPostManager->read($id);
			
			if($read == true) 
			{
				include(dirname(__FILE__).'/../vue/admin/validation_blog_modif.php');
			}
			else
			{
				include(dirname(__FILE__).'/../vue/admin/erreur_validation_blog_modif.php');
			}
		}
	}
	else 
	{
   		echo 'Impossible de réaliser la modification du blog !!!';
	}	
}
?>