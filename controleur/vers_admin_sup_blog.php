<?php
function afficher_sup_blog()
{
	include(dirname(__FILE__).'/../modele/requete_sql.php');
	$news= afficher_liste_post();
	include(dirname(__FILE__).'/../admin/partie_admin_sup.php');
}
?>
