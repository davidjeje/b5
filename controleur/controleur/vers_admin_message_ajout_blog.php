<?php
function valide_ajout_blog()
{
	if (isset($_FILES['image']) AND $_FILES['image']['error'] == 0)
	{
        // Testons si le fichier n'est pas trop gros
        if ($_FILES['image']['size'] <= 1000000)
        {
                // Testons si l'extension est autorisée
                $infosfichier = pathinfo($_FILES['image']['name']);
                $extension_upload = $infosfichier['extension'];
                $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
                $image= basename($_FILES['image']['name']);
                if (in_array($extension_upload, $extensions_autorisees))
                {
                        // On peut valider le fichier et le stocker définitivement
                        move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/' . $image);
                        include(dirname(__FILE__).'/../modele/requete_sql.php');
						$inserer= inserer_le_blog_post();
						include(dirname(__FILE__).'/../admin/validation_blog_ajouter.php');
                        
                }
        }
	}

	
}
?>