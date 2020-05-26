<?php
function inserer_comment_table() 
{ 
	function chargerClasse($Comment)
	{
  		require  'modele/' .$Comment.'.php';
	}
	spl_autoload_register('chargerClasse');

	$bdd = new PDO('mysql:host=localhost;dbname=blo;charset=utf8', 'root', '');

	$_GET['blog_post_id'] = (int) $_GET['blog_post_id'];
	$blogPostId = $_GET['blog_post_id'];

	$_GET['id'] = (int) $_GET['id'];
	$id = $_GET['id'];
	/*var_dump($id);
    die();*/

	$Comment = new Comment();
	$Comment->setBlog_post_id($blogPostId);
    $Comment->setAuteur($_GET['auteur']);  
    $Comment->setMessage($_GET['message']);  
    /*var_dump($Comment);
    die();*/

	$CommentManager = new CommentManager($bdd);
	/*var_dump($CommentManager);
	die();*/

	$birth = $CommentManager->birth($Comment, $blogPostId);
	/*var_dump($birth);
	die();*/

	if ($birth == true)
	{
		$delete = $CommentManager->delete($id);
	}
	else
	{
		return false;
	}

	include(dirname(__FILE__).'/../vue/admin/comment_definitivement_valider.php');
}
?>