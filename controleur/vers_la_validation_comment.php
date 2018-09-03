<?php
function afficher_la_validation_comment()
{
	
		{	
			include(dirname(__FILE__).'/../modele/requete_sql.php');
			$admin_comment= afficher_le_commentaire_partie_admin();
			include(dirname(__FILE__).'/../admin/partie_admin_comment.php');
		}
	
};


?>
