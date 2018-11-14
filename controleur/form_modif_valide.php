<?php
function valide_modif_blog_form()
{
	/*include(dirname(__FILE__).'/../modele/requete_sql.php');
	$modif = modifier_le_blog_post();
	include(dirname(__FILE__).'/../admin/modif_effectuer.php');*/
	function chargerClasse($classname)
	{
  		require 'modele/' . $classe . '.php';
	}
	spl_autoload_register('chargerClasse');
	$bdd = new PDO('mysql:host=localhost;dbname=blo;charset=utf8', 'root', '');
	$BlogPostManager= new BlogPostManager($bdd);
	$id= $_POST['id'];
	$read= $BlogPostManager->read($id);
	$read->author($_POST['author']);
	$read->title($_POST['title']);
	$read->chapo($_POST['chapo']);
	$read->content($_POST['content']);
	$ok=$BlogPostManager->update($read);
	include(dirname(__FILE__).'/../admin/modif_effectuer.php');
}
?>