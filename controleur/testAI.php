<?php
session_start();
require_once("C4AI.php");
	require_once("hautlarg.php");
$start = microtime(true);
$boardRes = array(
	array(0, 0, 0, 0, 0, 0, 0),
	array(0, 0, 0, 0, 0, 0, 0),
	array(0, 0, 0, 0, 0, 0, 0),
	array(0, 1, 0, 1, 0, 0, 0),
	array(1, 1, 2, 2, 0, 0, 0),
	array(2, 1, 2, 1, 0, 0, 0)
);

$board = $_SESSION["board"];

$coeff = array( -5 , -3 , -1 , 1, 3 , 5);
			for ($i=(HAUT - 1); $i>=0; $i--) {
				for ($j=0; $j <7 ; $j++) { 
					$boardRes[$i+$coeff[$i]][$j] = $board[$j][$i];
				}
			}

echo sizeof($boardRes);
echo "<br>".sizeof($boardRes[0]);
$ai = C4AI::getInstance();
$bestPos = $ai->getBestPos($boardRes ,2);
echo "best pos ".$bestPos."<br>";
/*
$move = $ai->findAllMoves($board , 2);

$bestPos=0;
echo "Best move is : ";
for ($i=1; $i <= sizeof($move); $i++) { 
	//echo $move."<br>";
	if($move[$i]>=$bestPos) $bestPos = $i;
} 

echo $bestPos."<br>";

$ai->printBoard($board);

$end = microtime(true);
printf("Time taken : %f\n", $end-$start);
*/