<?php
require_once("hautlarg.php");


// Si la colonne est pleine, renvoie false. Joue le coup et renvoie true autrement.
    function play($col, $player,$board) {
	global $board;
	$i = 0;
	$done = false;
	while ($i<HAUT) {
	    if ($board[$col][$i] == 0) {
		$board[$col][$i] = $player;
		$done=true;
		break;
	    } else {
		$i++;
	    }
	}
	$_SESSION['board'] = $board;
	return $done;
    }


    // Les 2 fonctions suivantes permettent de verifier si le dernier coup etait gagnant
    function nb_align($posx, $posy, $dx, $dy , $board , $turn) {
	global $board, $turn;
	if ($posx<0 || $posx>=LARG || $posy<0 || $posy>=HAUT) { 
	    return 0; 
	} else if ($board[$posx][$posy] == $turn)	{
	   return 1 + (nb_align($posx+$dx, $posy+$dy, $dx, $dy , $board , $turn)); 
	} else return 0;
    }

    function total_line($posx, $posy, $dx, $dy , $board , $turn) {
	return 1 + nb_align($posx+$dx, $posy+$dy, $dx, $dy , $board , $turn) + nb_align($posx-$dx, $posy-$dy, -$dx, -$dy , $board , $turn);
    }
    
    function is_win($posx , $board , $turn) {
	// On doit maintenant retrouver la hauteur du dernier pion
	$i = HAUT - 1;
	while ($i>=0) {
	    if (!($board[$posx][$i] == 0)) {
		break;
	    } else {
		$i--;
	    }
	}
	$posy = $i;
	return((total_line($posx, $posy, 0, 1 , $board , $turn) >= 4) 
	    || (total_line($posx, $posy, 1, 0 , $board , $turn) >= 4) 
	    || (total_line($posx, $posy, 1, 1 , $board , $turn) >= 4) 
	    || (total_line($posx, $posy, -1, 1 , $board , $turn) >= 4));
    }

    /*
    function est_remplie($board) {
		$remplie = false;
		for(int i = 0 ; i < LARG ; i++){
			for(int j = 0 ; j < HAUT ; j++){
				//if($board[$i][$j])
			}
		}
    }
	*/

?>