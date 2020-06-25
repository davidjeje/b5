<?php
require '/../../functions.php';
function envoyer_email()
{
	$errors = array(); 

	if (isset($_POST['envoyer']))
	{
		if(isset($_POST['prenom']) and !empty($_POST['prenom']))
		{
			if(isset($_POST['nom']) and !empty($_POST['nom'])) 
			{
				if(isset($_POST['mail']) and !empty($_POST['mail']) and filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL))
				{ 
					if(isset($_POST['message']) and !empty($_POST['message']))
					{
						$prenom = $_POST['prenom'];
						$nom = $_POST['nom'];
						$email = $_POST['mail'];
						$sujet = 'Bonjour, un utilisateur essaye de vous joindre par le formulaire de contact du site develop.fr';
						$message = $_POST['message'];
						$destinataire = "dada.pepe.alal@gmail.com";
						$headers = 'From: dada.pepe.alal@gmail.com' . "\n" . 'Reply-To: dada.pepe.alal@gmail.com' . "\n" . 'X-Mailer: PHP/' . phpversion();
						$contenu = 'Bonjour,'."\n"."\n".'Une personne du nom de'." ".$prenom." ".$nom." ".'vous contacte du site develop.fr.'."\n".'Voici son email'." ".'<'.$email.'>'.'.'."\n"."\n".'Son message est:'."\n".$message.'.';

						$text = str_replace("\n.", "\n..", $contenu);
						/*var_dump($text);
						die();*/

						if(mail($destinataire, $sujet, $text, $headers) == true)
						{
							include(dirname(__FILE__).'/../../vue/index.php'); 
						}
						else
						{
							echo" Erreur lors de l'envoie deu mail. ";
						}
					}
					else 
					{
   						$errors['message'] = "Le message n'est pas valide !!!";
        				debug($errors);
					}	
				}
				else 
				{
   					$errors['mail'] = "Le mail n'est pas valide !!!";
        			debug($errors);
				}	
			}
			else 
			{
   				$errors['nom'] = "Le nom n'est pas valide !!!";
        		debug($errors);
			}	
		}
		else 
		{
   			$errors['prenom'] = "Le prenom n'est pas valide !!!";
        	debug($errors);
		}	
	}
	else 
	{
   		$errors['envoyer'] = "L'utilisateur n'a pas click sur le bouton envoyer !!!";
        debug($errors);
	}	
};
	