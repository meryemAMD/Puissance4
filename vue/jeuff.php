<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Face A face</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/p4.css" title="Normal" />
</head>
<body>
	<img src="../img/logo.png" id="logo">
	<div class="board">
		<center>
			<div class="table">
			<?php
			require_once("../controleur/afficherBoard.php");
			?>
			</div>
			
		</center>
	</div>

	<div class="menu">
		<a href="../vue/ff.php"><img src="../img/4.PNG" id="b"></a>
		<a href="../controleur/fc.php"><img src="../img/3.PNG" id="b"></a>
		<a href="../vue/instruction.php"><img src="../img/2.PNG" id="b"></a>
		<a href="../vue/inscription.html"><img src="../img/1.PNG" id="b"></a>
	</div>

	<div class="menu1">
		<h2> <?php echo $j1;?> </h2> <h1> VS </h1> <h2> <?php echo $j2;?>  </h2>
		<p> C'est à <?php echo $turnNom ;?> <img src= <?php echo'"'.$turnPion.'"'; ?> > de jouer </p>
			<br>
			<h3> <a href="../controleur/recommencer.php"> Recommencer </a> </h3>
			<h3> <a href="ff.php"> Changer les noms </a> </h3>
			<br>
			<br>
	</div>



</body>
</html>