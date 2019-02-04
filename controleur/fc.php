<?php
//si connecte est true il redirige vers la page du jeu jeufc.php sinon il redirige vers connexion.html
//Ceci à partir des variables des sessions
include("header.php");
session_start();
try{
	if(isset($_SESSION["connecte"]))
	{
		if($_SESSION["connecte"]==true){
			header("Location: ".$server."vue/choixMode.php");
		}
		else{
			header("Location: ".$server."vue/connexion.html");
		}
	}
	else
	header("Location: ".$server."vue/connexion.html");
}
catch (Exception  $exc){

	header("Location: ".$server."vue/connexion.html");
}

?>