<?php
if (session_status() == PHP_SESSION_NONE) 
{
    session_start(); 
}
require '/../../functions.php';

function partie_admin() 
{
    if (isset($_POST['connexion']))
    {
        $errors = array();
        $pseud = htmlspecialchars($_POST['pseudo']); 
        $pass = htmlspecialchars($_POST['pass']);
                
        if (!empty($pseud) )
        {
            if(!empty($pass))
            {
              function chargerClasse($classname)
                {
                    require 'modele/' . $classname . '.php';
                }
                spl_autoload_register('chargerClasse'); 

                $bdd = new PDO('mysql:host=localhost;dbname=blo;charset=utf8', 'root', '');

                $UserManager = new UserManager($bdd);
                        
                $read = $UserManager->read($pseud);
            
                $PassDataBase = $read->password();

                $role = $read->role();
            
                if (password_verify($pass, $PassDataBase))
                {   
                    if( $role == 'administrateur') 
                    {
                        $_SESSION['id'] = $read->id();
                        $_SESSION['pseudo'] = $read->pseudo();
                        $_SESSION['email'] = $read->email();
                        include(dirname(__FILE__).'/../../vue/admin/menu_partie_admin.php');
                    }
                    else
                    {
                        include(dirname(__FILE__).'/../../vue/admin/erreur_connexion_admin.php');
                    }             
                }  
            }
            else
            {
                $errors['pass'] = "Votre mot de passe n'est pas valide !!!";
                debug($errors);
            }
        }
        else
        {
            $errors['pseudo'] = "Votre pseudo n'est pas valide !!!";
            debug($errors);
        }                                               
    }
    else
    {
        $errors['connexion'] = "L'utilisateur n'a pas click sur le bouton connexion !!!";
        debug($errors);
    }                
};
