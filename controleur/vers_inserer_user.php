<?php
//session_start();
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
                        require 'modele/' . $classname .'.php';
                    }
                    spl_autoload_register('chargerClasse');

                    $bdd = new PDO('mysql:host=localhost;dbname=blo;charset=utf8', 'root', '');

                    $UserManager = new UserManager($bdd);

                    // Je récupère les données stockés d'un objet user dans la bdd via son mail
                    $emailList = $UserManager->emailList($email);
                    //J'affiche le mail via la méthode situé dans l'entité User
                    $useEmail = $emailList->email();
                    
                    $pass = password_hash($password, PASSWORD_DEFAULT);

                    if(isset($emailList) and $useEmail == null)
                    { 
                        $user = new User();
                        $user->setPseudo($pseudo);
                        $user->setPassword($pass);
                        $user->setEmail($email);
                        $create = $UserManager->create($user);
                        if($create == true)
                        {
                            include(dirname(__FILE__).'/../vue/validation_enregistrement_user.php');
                        }   
                    }         
                    else
                    {
                        include(dirname(__FILE__).'/../vue/erreur_enregistrement_user.php');
                    }                  
                }
            }                        
        }     
	}
	else
    {
        
    }
};