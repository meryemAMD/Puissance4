<?php
    require_once("header.php");

// On recupere les classes
	require_once("init.php");
    require_once("jouerClass.php");
    require_once("gagnerClass.php");
    require_once("hautlarg.php");

    $board = $_SESSION["board"];
	$turn = $_SESSION["turn"];
	$j1 = $_SESSION["nomj1"];
	$j2 = $_SESSION["nomj2"];


//si on a clique sur le col on joue si c'est fini on affiche la page de fini
//sinon on set les param est on prepare l'affichage 
	$nextVue = "Location: ".$server;
	$jeu = new jouer();
	$fin = new gagner();
		// Si le coup est valide, il est joue, on verifie s'il est gagnant et on passe au tour suivant
		if ($jeu->jouer( $bestPos , 2)) {
			$board = $_SESSION["board"];
		    if ($fin->est_gagnant( $bestPos  )) {
				$gagnant = (($turn == 1) ? $j1 : $j2 );
				$_SESSION["finish"] = true;
				$nextVue = "../vue/winLoseAI.php";
		    } else {
		    $turn=($turn%2) + 1;
		    $nextVue = "../vue/jeufc.php";
		    }
		}
	    
	    $turnNom =  (($turn == 1)? $j1 : $j2);
	    $turnPion = (($turn == 1)? "joueur1.png" : "joueur2.png" );

	    $_SESSION["turnNom"] = $turnNom ;
		$_SESSION["turnPion"]="../img/".$turnPion;
//on regle la session
    $_SESSION["turn"] = $turn;
    echo '<script language="Javascript">
           <!--
                 document.location.replace("'.$nextVue.'");
           // -->
    </script>';
//On passe à la vue de jeu
    
?>