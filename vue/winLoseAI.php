<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>Fin de la partie</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/p4.css" title="Normal" />
</head>
<body>
	<img src="../img/logo.png" id="logo" class="logo">
	<div class="board">
		<div class="table">
		<?php
		require_once("../controleur/afficherBoard.php");
		?>
		<div>
	</div>
	<div class="menu">
		<a href="../vue/ff.php"><img src="../img/4.PNG" id="b"></a>
		<a href="../vue/connexion.html"><img src="../img/3.PNG" id="b"></a>
		<a href="../vue/instruction.php"><img src="../img/2.PNG" id="b"></a>
		<a href="../vue/inscription.html"><img src="../img/1.PNG" id="b"></a>
	</div>

	<div class="menu1">
		<h2> <?php echo $nomGagnant." a gagné ";?> </h2>
			<h3> <a href="../controleur/recommencerAI.php"> Recommencer </a> </h3>
			<h3> <a href="../controleur/classement.php"> Voir le classement </a> </h3>
			<h3> <a href="../controleur/deconnexion.php"> Deconnexion </a> </h3>
			<br>
			<br>
	</div>

</body>
</html>