<?php
    session_start();
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
	$nextVue = "";
	$jeu = new jouer();
	$fin = new gagner();
     if (isset($_POST["col"])) {
		// Si le coup est valide, il est joue, on verifie s'il est gagnant et on passe au tour suivant
		if ($jeu->jouer(($_POST["col"] - 1) , $turn)) {
			$board = $_SESSION["board"];
		    if ($fin->est_gagnant( $_POST["col"] - 1)) {
				$gagnant = (($turn == 1) ? $j1 : $j2 );
				$_SESSION["finish"] = true;
				//$nextVue = "Location: ".$server."vue/winLose.php";
				$nextVue = "../vue/winLose.php";
		    } else {
		    $turn=($turn%2) + 1;
		    //$nextVue = "Location: ".$server."vue/jeuff.php";
		    $nextVue = "../vue/jeuff.php";
		    }
		}
		else if ($fin->est_remplie()){
		    	$_SESSION["finish"] = true;
		    	$nextVue = "../vue/null.php";
		}
		else{
			//$nextVue = "Location: ".$server."vue/erreur.html";
			$nextVue = "../vue/erreur.html";
			}
	    }
	    
	    $trunNom =  (($turn == 1)? $j1 : $j2);
	    $turnPion = (($turn == 1)? "joueur1.png" : "joueur2.png" );

	    $_SESSION["turnNom"] = $trunNom ;
		$_SESSION["turnPion"]="../img/".$turnPion;
    //on regle la session
    $_SESSION["turn"] = $turn;

    //On passe à la vue de jeu
    //header(...?$trunNom,$turnPion);
    
    echo '<script language="Javascript">
           <!--
                 document.location.replace("'.$nextVue.'");
           // -->
     </script>';
?>