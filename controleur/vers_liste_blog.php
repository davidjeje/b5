<?php
function afficher_blog_post()
{
	
	include(dirname(__FILE__).'/../modele/requete_sql.php');
	$news = afficher_liste_post();
	$new = afficher_liste_post_recent();
	include(dirname(__FILE__).'/../vue/liste_blog.php');
	
}


?>
