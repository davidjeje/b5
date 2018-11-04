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
			/*include(dirname(__FILE__).'/../modele/requete_sql.php');
			$sup= supprimer_le_commentaire();
			include(dirname(__FILE__).'/../admin/comment_definitivement_supprimer.php');*/
			function chargerClasse($classname)
			{
  				require  'modele/' .$classname.'.php';
			}
			spl_autoload_register('chargerClasse');
			$bdd = new PDO('mysql:host=localhost;dbname=blo;charset=utf8', 'root', '');
			$CommentManager= new CommentManager($bdd);
			
			$comment= $CommentManager->read($_GET['id']);
			$delete= $CommentManager->delete($comment);
			include(dirname(__FILE__).'/../admin/comment_definitivement_supprimer.php')

		}
	}
	else
	{
   		echo 'Il faut renseigner un nom, un prénom et un nombre de répétitions !';
	}
	
};
?>
