<?php
	session_start();
	//permets de se deconnecter
	$_SESSION["connecte"] = false;
	session_destroy();
	require("header.php");
	header("Location: ".$server);
?>