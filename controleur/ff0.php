<?php
    session_start();
//1 Regler les noms des joueurs
    $_SESSION["nomj1"] = $_POST["j1"];
	$_SESSION["nomj2"] = $_POST["j2"];
	setcookie("nomj1", $_POST["j1"], time()+12*24*3600); // expire dans 12 jours
	setcookie("nomj2", $_POST["j2"], time()+12*24*3600); 

    // Dans le cas ou la session a expire, on reprend aussi les noms dans les cookies
	if (!isset($_SESSION["nomj1"])) {
	$_SESSION["nomj1"] = $_COOKIE["nomj1"];
	$_SESSION["nomj2"] = $_COOKIE["nomj2"];
    }

//3 on recupere la classe init
    require_once("init.php");

//4 On utilise le mecanisme de session

    if(!isset($_SESSION["board"])){
    	$initia = new init();
    	$_SESSION["board"] = $initia->init();
	    $_SESSION["turn"] = 1;
	    $_SESSION["finish"] = false;
	    $_SESSION["turnNom"]= $_SESSION["nomj1"] ;
		$_SESSION["turnPion"]= "joueur1.png";
    }

    $initia = new init();
    $_SESSION["board"] = $initia->init();
    $_SESSION["turnNom"]= $_SESSION["nomj1"] ;
	$_SESSION["turnPion"]= "../img/joueur1.png";

//5 On passe à la vue de jeu
    header("Location: ../vue/jeuff.php");
?>