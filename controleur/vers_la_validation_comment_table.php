<?php
function inserer_comment_table()
{ 
	
	function chargerClasse($classname)
			{
  				require  'modele/' .$classname.'.php';
			}


			spl_autoload_register('chargerClasse');
	$Comment= new Comment();
	$Comment->setId($_GET['Id']);
	$Comment->setBlogPostId($_GET['blogPostId']);
    $Comment->setAuteur($_GET['auteur']);
    $Comment->setMessage($_GET['message']);
            
            
	$bdd = new PDO('mysql:host=localhost;dbname=blo;charset=utf8', 'root', '');
	$CommentManager= new CommentManager($bdd);
	$createc= $CommentManager->createc($Comment);
	include(dirname(__FILE__).'/../admin/comment_definitivement_valider.php');

};
?>