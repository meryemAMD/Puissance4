<?php
//Cette page va inscrire le joueur dans le modele
//puis redirige vers inscriptionSucces.html si tt c passe bien sinn vers erreur.html
require_once("../modele/Execrequette.php");
require_once("header.php");

    $bd = new Execrequette();
    if(isset($_POST['inscrire']))
    {
      if($bd->Inscription($_POST)){
      	header("Location: ".$server."vue/inscriptionSucces.html");
      }
      else{
      	header("Location: ".$server."vue/erreur.html");
      }
    }
?>