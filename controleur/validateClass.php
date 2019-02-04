<?php
require_once("hautlarg.php");

class validate{

public function __construct(){
}

function est_valide($col) {
	$board=$_SESSION['board'];
	$turn = $_SESSION['turn'];
	$i = 0;
	$valide = false;
	while ($i<HAUT) {
	    if ($board[$col][$i] == 0) {
		$valide=true;
		break;
	    } else {
		$i++;
	    }
	}
	return $valide;
    }
}