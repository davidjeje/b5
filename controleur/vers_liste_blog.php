<?php 
function afficher_blog_post()
{
	function chargerMaClasse($classe) 
	{
    	require 'modele/' . $classe . '.php';
	}
	spl_autoload_register('chargerMaClasse');

	$bdd = new PDO('mysql:host=localhost;dbname=blo;charset=utf8', 'root', '');
	$BlogPostManager = new BlogPostManager($bdd);
	
	$readAll= $BlogPostManager->readAll();
	
	$readAll1= $BlogPostManager->readAll1(); 

	include(dirname(__FILE__).'/../vue/liste_blog.php');		
}
