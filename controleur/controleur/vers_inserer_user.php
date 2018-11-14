<?php
function inserer_user()
{
	if (isset($_POST['ok']))
	{
                $pseudo = htmlspecialchars($_POST['prenom']);
                $password = sha1($_POST['password']);
                $email = htmlspecialchars($_POST['email']);

                if (!empty($pseudo) and !empty($password) and !empty($email))
                {
                    include(dirname(__FILE__).'/../modele/requete_sql.php');
                    $inserer = inserer_user_site();
                    $ok = "Vous venez de créer un compte utilisateur";
                    include(dirname(__FILE__).'/../vue/connexion_user.php');       
                }
                else
                {
                    $erreur= "Il y a eu un échec pour créer son compte utilisateur, vueillez recommencer ultérieurement !";
                }
       
	}
	else
                {
                    $erreur= "Remplissez correctement les champs pour pouvoir créer un compte";
                }
	
};