<?php
function valide_modif_blog_form()
{
	include(dirname(__FILE__).'/../modele/requete_sql.php');
	$modif = modifier_le_blog_post();
	include(dirname(__FILE__).'/../admin/modif_effectuer.php');
}
?>
