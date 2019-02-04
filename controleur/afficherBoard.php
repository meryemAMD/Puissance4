<?php
	require_once("affichageClass.php");
	$affich = new affichage();
	if($_SESSION["finish"]==false)
	{
		$affich->affiche_plateau();
	}
	else{
	$affich->print_board_final();
	unset($_SESSION["board"]); 
	$nomGagnant = (($_SESSION["turn"] == 1)? $_SESSION["nomj1"] : $_SESSION["nomj2"]);
	}
	$turnNom = (($_SESSION["turn"] == 1)? $_SESSION["nomj1"] : $_SESSION["nomj2"]);
	$turnPion = $_SESSION["turnPion"];
	$j1 = $_SESSION["nomj1"];
	$j2 = $_SESSION["nomj2"];
?>