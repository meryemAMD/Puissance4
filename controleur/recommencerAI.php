<?php
session_start();
    require_once("header.php");
//1 on recupere la classe init
    require_once("init.php");

//2 On utilise le mecanisme de session
    	$initia = new init();
    	$_SESSION["board"] = $initia->init();
	    $_SESSION["turn"] = 1;
	    $_SESSION["finish"] = false;

//3 On passe à la vue de jeu
    header("Location: ".$server."vue/jeufc.php");

?>