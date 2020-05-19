 <?php
function inserer_comment()
{ 
	if (isset($_GET['blog_post_id']) AND isset($_POST['auteur']) AND isset($_POST['message']))
	{
	// 1 : On force la conversion en nombre entier
	$_GET['blog_post_id'] = (int) $_GET['blog_post_id'];

	// 2 : Le nombre doit être compris entre 1 et 100
		if ($_GET['blog_post_id'] >= 1 AND $_GET['blog_post_id'] <= 100) 
		{	
			
			function chargerClasse($CommentValidate)
			{
  				require  'modele/' .$CommentValidate.'.php';
			}
			spl_autoload_register('chargerClasse');
			$bdd = new PDO('mysql:host=localhost;dbname=blo;charset=utf8', 'root', '');
			$Comment= new CommentValidate();
			$Comment->setBlogPostId($_GET['blog_post_id']);	
			$Comment->setAuteur($_POST['auteur']);
			$Comment->setMessage($_POST['message']);
			
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