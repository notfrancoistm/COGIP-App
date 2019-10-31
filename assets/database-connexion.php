<?php 
try
	{
		$dataB = new PDO('mysql:host=localhost;dbname=cogip;charset=utf8', 'root', 'root');
		$dataB->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
		$bdataBdd->exec("SET NAMES 'UTF8'");		
		}
			catch(Exception $e)
		{
		die('Erreur : '.$e->getMessage());
	}
?>