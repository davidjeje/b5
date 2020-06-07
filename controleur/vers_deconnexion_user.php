<?php
$_SESSION = array();
session_destroy(); 
function deconnexion_user()
{ 
	include(dirname(__FILE__).'/../vue/deconnexion_user.php');
};