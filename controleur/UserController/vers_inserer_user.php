<?php
require '/../../functions.php';
function inserer_user()
{
	if (isset($_POST['ok']))
	{
        $errors = array();
        $pseudo = htmlspecialchars($_POST['prenom']);
        $password = htmlspecialchars($_POST['password']);
        $email = htmlspecialchars($_POST['email']);

        if (!empty($pseudo) and preg_match('/^[a-zA-Z0-9]+$/', $pseudo))
        {
            if (!empty($password))
            {
                if (!empty($email) and filter_var($email, FILTER_VALIDATE_EMAIL))
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
                    
                    $pass = password_hash($password, PASSWORD_BCRYPT);

                    if(isset($emailList) and $useEmail == null)
                    { 
                        $user = new User();
                        $user->setPseudo($pseudo);
                        $user->setPassword($pass);
                        $user->setEmail($email);
                        $create = $UserManager->create($user);
                        if($create == true)
                        {
                            include(dirname(__FILE__).'/../../vue/validation_enregistrement_user.php');
                        }   
                    }         
                    else
                    {
                        include(dirname(__FILE__).'/../../vue/erreur_enregistrement_user.php');
                    }                  
                }
                else
                {
                    $errors['email'] = "Votre email n'est pas valide !!!";
                    debug($errors);
                }
            }
            else
            {
                $errors['password'] = "Votre mot de passe n'est pas valide !!!";
                debug($errors);
            }                       
        }
        else
        {
            $errors['prenom'] = "Votre pseudo n'est pas valide !!!";
            debug($errors);
        }     
	}
	else
    {
        $errors['ok'] = "L'utilisateur n'a pas click sur le bouton envoyer !!!";
        debug($errors);
    }
};