<?php
function sup_comment_table()
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

			$bdd = new PDO('mysql:host=localhost;dbname=blo;charset=utf8', 'root', '');

			$CommentManager = new CommentManager($bdd);
			
			$delete = $CommentManager->delete($_GET['id']);

			if($delete == true) 
			{
				include(dirname(__FILE__).'/../../vue/admin/comment_definitivement_supprimer.php');
			}
			else
			{
				include(dirname(__FILE__).'/../../vue/admin/erreur_comment_definitivement_supprimer.php');
			}			
		}
	}
	else
	{
   		echo 'Un problème est survenu. Veuillez réitérer ultérieurement cette action';
	}	
}
?>