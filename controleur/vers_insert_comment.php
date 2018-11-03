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
			
			function chargerClasse($Comment)
			{
  				require  'CommentManager/' .$Comment.'.php';
			}
			spl_autoload_register('chargerClasse');
			$bdd = new PDO('mysql:host=localhost;dbname=blo;charset=utf8', 'root', '');
			$Comment= new Comment();
			$Comment->setBlogPostId($_GET['id']);
					->setAuteur($_POST['auteur']);
					->setMessage($_POST['message']);
			$CommentManager= new CommentManager($bdd);
			$create= $CommentManager->create($Comment);
			include(dirname(__FILE__).'/../vue/message_traitement_envoi_comment.php');
			
		}
	}
	else
	{
   		echo 'Il faut renseigner un nom, un prénom et un nombre de répétitions !';
	}
	

};
?>
