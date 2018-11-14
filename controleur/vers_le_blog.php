<?php
function afficher_un_post()
{
	if (isset($_GET['id']) )
	{
	// 1 : On force la conversion en nombre entier
	$_GET['id'] = (int) $_GET['id'];

	// 2 : Le nombre doit être compris entre 1 et 100
		if ($_GET['id'] >= 1 AND $_GET['id'] <= 100) 
		{	
			function chargerMaClasse($classe) 
			{
    			require 'modele/' . $classe . '.php';
			}
			spl_autoload_register('chargerMaClasse');

			$bdd = new PDO('mysql:host=localhost;dbname=blo;charset=utf8', 'root', '');
			$BlogPostManager = new BlogPostManager($bdd);
			$idd= $_GET['id'];
			$read= $BlogPostManager->read($idd);
			$readAll1= $BlogPostManager->readAll1();
			

			$CommentManager= new CommentManager($bdd);
			
			$readc= $CommentManager->readAllc($idd);
			
			include(dirname(__FILE__).'/../vue/le_blog.php');
		}
	}
	else
	{
   		echo 'Il faut renseigner un nom, un prénom et un nombre de répétitions !';
	}
	

};


?>