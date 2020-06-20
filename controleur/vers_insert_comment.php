<?php
require '/../functions.php';
function inserer_comment()
{
	if(isset($_POST['valider']))
	{
		$errors = array();
        $auteur = htmlspecialchars($_POST['auteur']);
        $message = htmlspecialchars($_POST['message']);
        $idBlog = htmlspecialchars($_GET['blog_post_id']);

		if (isset($idBlog) AND !empty($idBlog))
		{
			// 1 : On force la conversion en nombre entier
			$idBlog = (int) $idBlog;
	
			// 2 : Le nombre doit être compris entre 1 et 100
			if ($idBlog >= 1 AND $idBlog <= 500) 
			{			
				if(isset($auteur) AND !empty($auteur))
				{
					if(isset($message) AND !empty($message))
					{
						function chargerClasse($CommentValidate)
						{
  							require  'modele/' .$CommentValidate.'.php';
						}
						spl_autoload_register('chargerClasse');

						$bdd = new PDO('mysql:host=localhost;dbname=blo;charset=utf8', 'root', '');

						$BlogPostId = $_GET['blog_post_id']; 
			
						$Comment = new CommentValidate(); 
						$Comment->setBlog_post_id($BlogPostId);	
						$Comment->setAuteur($_POST['auteur']);
						$Comment->setMessage($_POST['message']);
			
						$CommentManager = new CommentManager($bdd);
			
						$create = $CommentManager->create($Comment, $BlogPostId);

						if($create == true)
						{
							include(dirname(__FILE__).'/../vue/message_traitement_envoi_comment.php');
						}
						else
						{
							include(dirname(__FILE__).'/../vue/erreur_traitement_envoi_comment.php');
						}
					}
					else
					{
						$errors['message'] = "Le message n'est pas valide !!!";
            			debug($errors);
					} 						
				}
				else
				{
					$errors['auteur'] = "L'auteur n'est pas valide !!!";
            		debug($errors);
				} 			
			}
			else
			{
				$errors['blog_post_id'] = "L'id du blog n'est pas compris entre 1 et 500 !!!";
            	debug($errors);
			} 
		}
		else
		{
			$errors['blog_post_id'] = "L'id du blog n'est pas valide !!!";
            debug($errors);
		} 
	} 	
}
?>