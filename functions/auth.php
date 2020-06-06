<?php
function est_connecte()
{
	/*if(session_status() === PHP_SESSION_NONE)
	{
		session_star();
	}*/
	return !empty($_SESSION['connecte']);
}