<?php 
function afficher_la_validation_comment()  
{ 
	function chargerClasse($classname)
	{
  		require  'modele/' .$classname. '.php';
	}
	spl_autoload_register('chargerClasse');

	$bdd = new PDO('mysql:host=localhost;dbname=blo;charset=utf8', 'root', '');

	$commentManager = new CommentManager($bdd);

	$readAll1 = $commentManager->readAll1();

	include(dirname(__FILE__).'/../vue/admin/partie_admin_comment.php');
}
 