<?php
session_start();
function connexion_user1()
{
	if (isset($_POST['connexion']))
        {
                $pseud = htmlspecialchars($_POST['pseudo']);
                $pass = htmlspecialchars($_POST['password']);
                

                if (!empty($pseud) and !empty($pass))
                {
                        include(dirname(__FILE__).'/../modele/requete_sql.php');
                        $connexion_user= connexion_user_site1();
                        //$pass_correct= password_verify($pass,$show['password']);
                           
                        if ($connexion_user['password'] == $pass)
                        {
                       
                        $_SESSION['id']= $connexion_user['id'];
                        $_SESSION['pseudo']= $connexion_user['pseudo'];
                        $_SESSION['email']= $connexion_user['email'];
                        include(dirname(__FILE__).'/../vue/profil.php');
                        }
                        else
                        {
                                include(dirname(__FILE__).'/../vue/connexion_user.php');
                        }
                                                      
                }
                

        }
       
    
};

