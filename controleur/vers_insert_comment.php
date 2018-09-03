<?php
function inserer_comment()
{
	if (isset($_GET['blog_post_id']) )
	{
	// 1 : On force la conversion en nombre entier
	$_GET['blog_post_id'] = (string) $_GET['blog_post_id'];

	// 2 : Le nombre doit être compris entre 1 et 100
		if ($_GET['blog_post_id'] >= 1 AND $_GET['blog_post_id'] <= 100) 
		{	
			include(dirname(__FILE__).'/../modele/requete_sql.php');
			$inserer= inserer_le_commentaire();
			include(dirname(__FILE__).'/../vue/message_traitement_envoi_comment.php');
		}
	}
	else
	{
   		echo 'Il faut renseigner un nom, un prénom et un nombre de répétitions !';
	}
	

};
?>
