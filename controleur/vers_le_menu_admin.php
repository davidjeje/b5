<?php
function conect()
{
	if (isset($_POST))
	{
		if (htmlspecialchars(!empty($_POST['pseudo'])) and htmlspecialchars(!empty($_POST['pass'])))
		{

			if($_POST['pseudo'] == 'dav' or $_POST['pass'] == 'dav')
			{
				include(dirname(__FILE__).'/../modele/requete_sql.php');
				include(dirname(__FILE__).'/../admin/menu_partie_admin.php');
				
			}
		}

	}
	
	else
	{
		include(dirname(__FILE__).'/../admin/connexion_partie_admin.php');
	}
}

function conec()
{
	include(dirname(__FILE__).'/../vue/conexion.php');
}
?>
