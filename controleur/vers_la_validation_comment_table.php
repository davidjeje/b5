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
	
	$Comment = new Comment();
	$Comment->setBlog_post_id($blogPostId);
    $Comment->setAuteur($_GET['auteur']);  
    $Comment->setMessage($_GET['message']);  

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
?>