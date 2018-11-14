<?php
session_start();
function connexion_user1()
{
	if (isset($_POST['connexion']))
	{
                $pseudo = htmlspecialchars($_POST['pseudo']);
                $password = sha1($_POST['password']);

                if (!empty($pseudo) and !empty($password))
                {
                        include(dirname(__FILE__).'/../modele/requete_sql.php');
                        $connexion= connexion_user_site1();
                        include(dirname(__FILE__).'/../vue/profil.php');
                                
                        }
                        else
                        {
                            $erreur= "Mauvais pseudo ou mot de passe.";    
                        }
                }
                else
                {
                        $erreur= "Tous les champs doivent être complétés.";
                }
       
	}

	
}
?>