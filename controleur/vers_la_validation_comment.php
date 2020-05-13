<?php
function afficher_la_validation_comment() 
{
	/*include(dirname(__FILE__).'/../modele/requete_sql.php');
	$admin_comment= afficher_le_commentaire_partie_admin();
	include(dirname(__FILE__).'/../admin/partie_admin_comment.php');*/
	
	function chargerClasse($classname)
	{
  		require  'modle/' .$classname.'.php';
	}
	spl_autoload_register('chargerClasse');
	$bdd = new PDO('mysql:host=localhost;dbname=blo;charset=utf8', 'root', '');
	$CommentManager= new CommentManager($bdd);
	$read= $CommentManager->readAll1();
	
	include(dirname(__FILE__).'/../admin/partie_admin_comment.php');
};


?>