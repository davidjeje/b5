<?php
function valide_modif_blog_form()
{
	function chargerClasse($classname)
	{
  		require 'modele/' . $classe . '.php';
	}
	spl_autoload_register('chargerClasse');

	$bdd = new PDO('mysql:host=localhost;dbname=blo;charset=utf8', 'root', '');

	$BlogPostManager = new BlogPostManager($bdd);
	$id = $_POST['id'];

	$blog = new BlogPost();
	$blog->setAuthor($_POST['author']);
	$blog->setTitle($_POST['title']);
	$blog->setChapo($_POST['chapo']);
	$blog->setContent($_POST['content']);
	
	$changeBlog = $BlogPostManager->update($blog, $id);
	
	include(dirname(__FILE__).'/../admin/modif_effectuer.php');
}
?>