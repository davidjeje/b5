<?php
if (session_status() == PHP_SESSION_NONE) 
{
    session_start(); 
}
//session_start();
//require 'functions/auth.php';
//var_dump(est_connecte());
//unset($_SESSION['connecte']);
//exit();
//die();
function connexion_user1()
{
	if (isset($_POST['connexion']))
    {
        $pseud = htmlspecialchars($_POST['pseudo']);
        $pass = htmlspecialchars($_POST['password']);
                
        if (!empty($pseud) and !empty($pass))
        {
            function chargerClasse($classname)
            {
                require 'modele/' . $classname . '.php';
            }
            spl_autoload_register('chargerClasse');

            $bdd = new PDO('mysql:host=localhost;dbname=blo;charset=utf8', 'root', '');

            $UserManager = new UserManager($bdd);
                        
            $read = $UserManager->read($pseud);
            /*var_dump($read);
            die();*/
            $PassDataBase = $read->password();
                        
            if (password_verify($pass, $PassDataBase))
            {   
                $_SESSION['id'] = $read->id();
                $_SESSION['pseudo'] = $read->pseudo();
                $_SESSION['email'] = $read->email();
                include(dirname(__FILE__).'/../vue/profil.php');
            }
            else
            {
                include(dirname(__FILE__).'/../vue/connexion_user.php');
            }                                               
        }
    }   
};
