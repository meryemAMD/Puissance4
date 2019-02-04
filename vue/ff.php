<!DOCTYPE html>
<html>
<head>
	<title>Face A face</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<?php 
	require_once("../controleur/nomjoueur.php");
	?>
</head>
<body>
	<img src="../img/logo.png" id="logo">
	<br>
	<img src="../img/board.png" id="board">
	<div class="form">
		<form action="../controleur/ff0.php"  method="post">
			<label >Joueur 1: </label> <br>
			<img src="../img/joueur1.png" class="pion"><input type="text" name="j1" value=<?php echo '"'.$j1.'"'; ?>>
			<br>
			<label >Joueur 2: </label> <br>
			<img src="../img/joueur2.png" class="pion"><input type="text" name="j2" value=<?php echo '"'.$j2.'"'; ?>>
			<br>
			<input type="submit" name="Jouer" value="Jouer">
		</form>
	</div>
	<div class="menu">
		<a href="../vue/ff.php"><img src="../img/4.PNG" id="b"></a>
		<a href="../controleur/fc.php"><img src="../img/3.PNG" id="b"></a>
		<a href="../vue/instruction.php"><img src="../img/2.PNG" id="b"></a>
		<a href="../vue/inscription.html"><img src="../img/1.PNG" id="b"></a>
	</div>

</body>
</html>