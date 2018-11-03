<?php
function valide_sup_blog()
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
  				require  'modele/' .$classname.'.php';
			}


			spl_autoload_register('chargerClasse');
			//$sup = supprimer_le_blog_post();
			$bdd = new PDO('mysql:host=localhost;dbname=blo;charset=utf8', 'root', '');
			$BlogPostManager = new BlogPostManager($bdd);
			$ok= $_GET['id'];
			$blog= $BlogPostManager->read($ok);

			$delete = $BlogPostManager->delete($blog);
			



			include(dirname(__FILE__).'/../admin/validation_blog_sup.php');
		}
	}
	else
	{
   		echo 'Il faut renseigner un nom, un prénom et un nombre de répétitions !';
	}
	
}
?>
