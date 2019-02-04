<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>Classement</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/table.css">
</head>
<body>
	<img src="../img/logo.png" id="logo">
	<br>
	<img src="../img/board.png" id="board">
	<div class="form">
	<center>
		<h1>Classement</h1> 
		<?php 
		require_once("../controleur/afficherClassement.php");
		?>
		
	</center>
	</div>
	<div class="menu">
		<a href="../vue/ff.php"><img src="../img/4.PNG" id="b"></a>
		<a href="../controleur/fc.php"><img src="../img/3.PNG" id="b"></a>
		<a href="../vue/instruction.html"><img src="../img/2.PNG" id="b"></a>
		<a href="../vue/inscription.html"><img src="../img/1.PNG" id="b"></a>
	</div>

</body>
</html>
