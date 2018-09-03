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
			include(dirname(__FILE__).'/../modele/requete_sql.php');
			$sup= supprimer_le_commentaire();
			include(dirname(__FILE__).'/../admin/comment_definitivement_supprimer.php');

		}
	}
	else
	{
   		echo 'Il faut renseigner un nom, un prénom et un nombre de répétitions !';
	}
	
};
?>
