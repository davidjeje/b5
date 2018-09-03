<?php
function afficher_modif_blog()
{
	include(dirname(__FILE__).'/../modele/requete_sql.php');
	$news= afficher_liste_post();
	include(dirname(__FILE__).'/../admin/partie_admin_modif_blog.php');
}
?>
