 <?php
 require_once("hautlarg.php");
 // Les 2 fonctions suivantes permettent de verifier si le dernier coup etait gagnant
 class gagner{
 	public function __construct(){
	}

    function nb_align($posx, $posy, $dx, $dy , $board , $turn) {
	$board = $_SESSION['board'];
	$turn = $_SESSION['turn'];

	if ($posx<0 || $posx>=LARG || $posy<0 || $posy>=HAUT) { 
	    return 0; 
	} else if ($board[$posx][$posy] == $turn)	{
	   return 1 + ($this->nb_align($posx+$dx, $posy+$dy, $dx, $dy , $board , $turn)); 
	} else return 0;
    }

    function total_line($posx, $posy, $dx, $dy , $board , $turn) {
	return 1 + $this->nb_align($posx+$dx, $posy+$dy, $dx, $dy , $board , $turn) + $this->nb_align($posx-$dx, $posy-$dy, -$dx, -$dy , $board , $turn);
    }
    
    function est_gagnant($col) {
	// On doit maintenant retrouver la hauteur du dernier pion
    $board = $_SESSION['board'];
	$turn = $_SESSION['turn'];
    $posx = $col;

	$i = HAUT - 1;
	while ($i>=0) {
	    if (!($board[$posx][$i] == 0)) {
		break;
	    } else {
		$i--;
	    }
	}
	$posy = $i;
	return(($this->total_line($posx, $posy, 0, 1 , $board , $turn) >= 4) 
	    || ($this->total_line($posx, $posy, 1, 0 , $board , $turn) >= 4) 
	    || ($this->total_line($posx, $posy, 1, 1 , $board , $turn) >= 4) 
	    || ($this->total_line($posx, $posy, -1, 1 , $board , $turn) >= 4));
    }


    function est_remplie() {
    	$board = $_SESSION['board'];
		$turn = $_SESSION['turn'];
		for($i = 0 ; $i < LARG ; $i++){
			for( $j = 0 ; $j < HAUT ; $j++){
				if($board[$i][$j] == 0) return false;
			}
		}
		return true;
    }
}
?>