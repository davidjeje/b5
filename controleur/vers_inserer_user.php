<?php
function inserer_user()
{
	if (isset($_POST['ok']))
	{
                $pseudo = $_POST['prenom'];
                $password = $_POST['password'];
                $email = $_POST['email'];

                if (!empty($pseudo))
                {
                    if (!empty($password))
                    {
                        if (!empty($email))
                        {
                            include(dirname(__FILE__).'/../modele/requete_sql.php');
                            $inserer = inserer_user_site();
                    
                            include(dirname(__FILE__).'/../vue/connexion_user.php'); 
                        }
                    }
                          
                }
                
       
	}
	else
                {
                    $erreur= "Remplissez correctement les champs pour pouvoir créer un compte";
                }
	
};
