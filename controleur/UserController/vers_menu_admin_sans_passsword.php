<?php
if (session_status() == PHP_SESSION_NONE) 
{ 
    session_start();
}  
function afficher_menu_admin() 
{
	/*if(!empty($_SESSION))
	{*/
		include(dirname(__FILE__).'/../../vue/admin/menu_partie_admin.php');
	//}  
}
?>   