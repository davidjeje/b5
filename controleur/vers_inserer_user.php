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

                        function chargerClasse($classname)
                        {
                            require 'UserManager/' . $classname .'.php';
                        }
                        spl_autoload_register('chargerClasse');

                        $user= new User();
                        $user->setPseudo($_POST['prenom']);
                        $user->setPassword($_POST['password']);
                        $user->setEmail($_POST['email']);
                        $bdd = new PDO('mysql:host=localhost;dbname=blo;charset=utf8', 'root', '');
                        $UserManager = new UserManager($bdd);
                        
                        $create= $UserManager->create($user);
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
