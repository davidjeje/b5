<?php
require '/../functions.php';
function inserer_comment_table() 
{ 
	$errors = array();
	$idBlog = htmlspecialchars($_GET['blog_post_id']);
	$auteurComment = htmlspecialchars($_GET['auteur']);
	$message = htmlspecialchars($_GET['message']);

	function chargerClasse($Comment)
	{
  		require  'modele/' .$Comment.'.php';
	}
	spl_autoload_register('chargerClasse');

	$bdd = new PDO('mysql:host=localhost;dbname=blo;charset=utf8', 'root', '');

	$idBlog = (int) $idBlog;

	$BlogPostManager = new BlogPostManager($bdd);
			
	$blog = $BlogPostManager->read($idBlog);
	$idDataBase = $blog->id();

	/*$_GET['id'] = (int) $_GET['id'];
	$id = $_GET['id'];*/
	if (isset($idBlog) AND !empty($idBlog) AND $idBlog == $idDataBase)
	{
		if (isset($auteurComment) AND !empty($auteurComment))
		{
			if (isset($message) AND !empty($message))
			{
				$Comment = new Comment();
				$Comment->setBlog_post_id($idBlog);
    			$Comment->setAuteur($auteurComment);  
    			$Comment->setMessage($message);  

				$CommentManager = new CommentManager($bdd);

				$birth = $CommentManager->birth($Comment, $blogPostId);

				if ($birth == true)
				{
					$delete = $CommentManager->delete($id);
				}
				else
				{
					include(dirname(__FILE__).'/../vue/admin/menu_partie_admin.php');
				}

				include(dirname(__FILE__).'/../vue/admin/comment_definitivement_valider.php');
			}
			else
			{
   				$errors['message'] = "Le commentaire n'est pas valide !!!";
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
   		$errors['blog_post_id'] = "L'id n'existe pas donc le blog demandé n'existe pas !!!";
        debug($errors);
	}
} 
?>