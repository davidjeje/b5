<?php
function inserer_comment()
{  
	if (isset($_GET['blog_post_id']) AND isset($_POST['auteur']) AND isset($_POST['message']))
	{
		// 1 : On force la conversion en nombre entier
		$_GET['blog_post_id'] = (int) $_GET['blog_post_id'];
	

		// 2 : Le nombre doit être compris entre 1 et 100
		if ($_GET['blog_post_id'] >= 1 AND $_GET['blog_post_id'] <= 200) 
		{				
			function chargerClasse($CommentValidate)
			{
  				require  'modele/' .$CommentValidate.'.php';
			}
			spl_autoload_register('chargerClasse');

			$bdd = new PDO('mysql:host=localhost;dbname=blo;charset=utf8', 'root', '');

			$BlogPostId = $_GET['blog_post_id']; 
			//Je récupère bien $BlogPostId
			$Comment = new CommentValidate();
			$Comment->setBlog_post_id($BlogPostId);	
			$Comment->setAuteur($_POST['auteur']);
			$Comment->setMessage($_POST['message']);
			//Je vois clairement qu'un objet commentValidate est créé avec les 3 valeurs au dessus
			/*var_dump($Comment);
			die();*/
			
			$CommentManager= new CommentManager($bdd);
			
			$create= $CommentManager->create($Comment, $BlogPostId);
			//L'objet est bien créé car j'ai un boolean qui affiche true
			/*var_dump($create);
			die();*/

			include(dirname(__FILE__).'/../vue/message_traitement_envoi_comment.php');	
		}
	}
	else
	{
   		echo 'Remplissez les champs auteur et message pour ajouter un commentaire !!!';
	} 
}
?>