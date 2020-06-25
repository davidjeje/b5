<?php
require '/../../functions.php';
function valide_ajout_blog() 
{
    $errors = array();
    $author = htmlspecialchars($_POST['author']); 
    $title = htmlspecialchars($_POST['title']);  
    $chapo = htmlspecialchars($_POST['chapo']);
    $content = htmlspecialchars($_POST['content']);

    if (isset($_POST['Ajouter']))
    {
        if (isset($author) AND !empty($author))
        {
            if (isset($title) AND !empty($title))
            {
                if (isset($chapo) AND !empty($chapo))
                {
                    if (isset($content) AND !empty($content))
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
                                    $resultat = move_uploaded_file($_FILES['image']['tmp_name'], 'public/images/' . $image);
                                    $path = 'public/images/'. $image;
                
                                    if ($resultat) 
                                    {
                                        function chargerClasse($classname)
                                        {
                                            require 'modele/' . $classe . '.php';
                                        }
                                        spl_autoload_register('chargerClasse');
                                                   
                                        $BlogPost= new BlogPost(); 
                                        $BlogPost->setAuthor($author); 
                                        $BlogPost->setTitle($title);  
                                        $BlogPost->setChapo($chapo);
                                        $BlogPost->setContent($content);
                                        $BlogPost->setImage($path);  

                                        $bdd = new PDO('mysql:host=localhost;dbname=blo;charset=utf8', 'root', '');

                                        $BlogPostManager = new BlogPostManager($bdd); 

                                        $create = $BlogPostManager->create($BlogPost);

                                        if($create == true)
                                        {
                                            include(dirname(__FILE__).'/../../vue/admin/validation_blog_ajouter.php');
                                        }
                                        else
                                        {
                                            include(dirname(__FILE__).'/../../vue/admin/erreur_blog_ajouter.php');
                                        }                                                
                                    }
                                    else
                                    {
                                        $errors['image'] = "Le fichier image ne sais pas déplacé !!!";
                                        debug($errors);
                                    }                          
                                }
                            }
                            else
                            {
                                $errors['image'] = "Le champs image ne respecte pas la taille limite autorisée !!!";
                                debug($errors);
                            }  
                        }
                        else
                        {
                            $errors['image'] = "Le champs image n'est pas valide !!!";
                            debug($errors);
                        }  
                    }
                    else
                    {
                        $errors['content'] = "Le champs content n'est pas valide !!!";
                        debug($errors);
                    }
                }
                else
                {
                    $errors['chapo'] = "Le champs chapo n'est pas valide !!!";
                    debug($errors);
                }
            }
            else
            {
                $errors['title'] = "Le champs title n'est pas valide !!!";
                debug($errors);
            }
        }
        else
        {
            $errors['author'] = "Le champs author n'est pas valide !!!";
            debug($errors);
        }
    }
    else
    {
        $errors['Ajouter'] = "Vous n'avez pas cliqué sur le bouton ajouter !!!";
        debug($errors);
    }
}
?>