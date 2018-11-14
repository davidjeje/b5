<?php
function envoyer_email()
{
	if (isset($_POST) and !empty($_POST['prenom']) and !empty($_POST['nom']) and !empty($_POST['mail']) and !empty($_POST['message']))
	{
		

		$prenom = $_POST['prenom'];
		$nom = $_POST['nom'];
		$email = $_POST['mail'];
		$message = $_POST['message'];
		$destinataire = "david.marivat-larose@orange.fr";
		$contenu = 'Bonjour,'."\n"."\n".'Une personne du nom de'." ".$prenom." ".$nom." ".'vous contacte du site develop.fr.'."\n".'Voici son email'." ".'<'.$email.'>'.'.'."\n"."\n".'Son message est:'."\n".$message.'.';

		mail($destinataire, 'Formulaire de contact du site develop.fr', $contenu);
		include(dirname(__FILE__).'/../vue/mail_envoyer.php');
	}
};
	