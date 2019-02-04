<?php
//teste le login est mot de passe si tt est bien il redirige vers choixMode.php
//sinn il redirect vers erreur.html 
session_start();
require_once("../modele/Execrequette.php");

    $bd = new Execrequette();
    if(isset($_POST['inscrire']))
    {
      if($bd->auth($_POST)) {
      	
      	$_SESSION["connecte"]=true;
      	$_SESSION["login"] = $_POST['login'];

      	header("Location: ".$server."vue/choixMode.php");
      }
      else{
    	header("Location: ".$server."vue/erreur.html");
    	}
    }
    
?>