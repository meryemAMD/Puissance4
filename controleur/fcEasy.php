<?php
    session_start();
    require_once("header.php");
//1 Regler les noms des joueurs
    $_SESSION["nomj1"] = $_SESSION["login"];
	$_SESSION["nomj2"] = "Computer";

//3 on recupere la classe init
    require_once("init.php");

//4 On utilise le mecanisme de session

    	$initia = new init();
    	$_SESSION["board"] = $initia->init();
	    $_SESSION["turn"] = 1;
	    $_SESSION["finish"] = false;
        $_SESSION["mode"] = "easy";


//5 On passe à la vue de jeu
    header("Location: ".$server."vue/jeufc.php");
?>