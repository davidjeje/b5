<?php
function inserer_comment_table()
{
	include(dirname(__FILE__).'/../modele/requete_sql.php');
	$inserer= inserer_le_commentaire_valider();
	$sup= supprimer_le_commentaire();
	include(dirname(__FILE__).'/../admin/comment_definitivement_valider.php');

};
?>
