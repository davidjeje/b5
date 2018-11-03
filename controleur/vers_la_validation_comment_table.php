<?php
function inserer_comment_table()
{
	/*include(dirname(__FILE__).'/../modele/requete_sql.php');
	$inserer= inserer_le_commentaire_valider();
	$sup= supprimer_le_commentaire();
	include(dirname(__FILE__).'/../admin/comment_definitivement_valider.php');*/
	function chargerClasse($classname)
			{
  				require  'modele/' .$classname.'.php';
			}


			spl_autoload_register('chargerClasse');
	$Comment= new Comment();
	$Comment->setId($_GET['Id']),
			->setBlogPostId($_GET['blogPostId']),
            ->setAuteur($_GET['auteur']),
            ->setMessage($_GET['message']);
            
            
	$CommentManager= new CommentManager();
	$createc= $CommentManager->createc()
	include(dirname(__FILE__).'/../admin/comment_definitivement_valider.php');

};
?>
