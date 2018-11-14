<?php
function valide_ajout_blog()
{
	if (isset($_FILES['image']) AND $_FILES['image']['error'] == 0)
	{
        // Testons si le fichier n'est pas trop gros
        if ($_FILES['image']['size'] <= 2097152)
        {
                // Testons si l'extension est autorisée
                $infosfichier = pathinfo($_FILES['image']['name']);
                $extension_upload = $infosfichier['extension'];
                $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
                $image= basename($_FILES['image']['name']);
                if (in_array($extension_upload, $extensions_autorisees))
                {
                        // On peut valider le fichier et le stocker définitivement
                        $resultat= move_uploaded_file($_FILES['image']['tmp_name'], 'public/images/' . $image);
                        $dat= new datetime();

                       // if ($resultat)
                        {
                                function chargerClasse($classname)
                                {
                                        require 'modele/' . $classe . '.php';
                                }
                                spl_autoload_register('chargerClasse');
                                
                                //$inserer= inserer_le_blog_post();                    
                                $BlogPost= new BlogPost();
                                $BlogPost->setAuthor($_POST['author']);
                                $BlogPost->setTitle($_POST['title']);
                                $BlogPost->setChapo($_POST['chapo']);
                                $BlogPost->setContent($_POST['content']);
                                //$BlogPost->setImage($_POST['image']);
                                $BlogPost->setDateDisplay($_POST['change_date']);
                                $bdd = new PDO('mysql:host=localhost;dbname=blo;charset=utf8', 'root', '');
                                $BlogPostManager = new BlogPostManager($bdd);
                                $create= $BlogPostManager->create($BlogPost);

                                
                                include(dirname(__FILE__).'/../admin/validation_blog_ajouter.php');
                        }
                        
                        
                }
        }
	}

	
}
?>