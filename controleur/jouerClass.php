<?php

require_once("hautlarg.php");
require_once("validateClass.php");

class jouer{

	function __construct(){
	}

	// Si la colonne est pleine, renvoie false. Joue le coup et renvoie true autrement.
	function jouer($col, $player) {
		$board = $_SESSION['board'];
		$valideClass = new validate();
		$valide = $valideClass->est_valide($col);
		if($valide) {
			$i = 0;
			while ($i<HAUT) {
			    if ($board[$col][$i] == 0) {
				$board[$col][$i] = $player;	
				break;
			    } else {
				$i++;
			    }
			}
		}
		$_SESSION['board'] = $board;
		return $valide;
    }
}

?>