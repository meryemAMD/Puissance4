<?php
session_start();
//recupere le classement depuis le modele et l'envoi à la vue classment.php
require_once("../modele/Execrequette.php");

    $bd = new Execrequette();
    $liste = $bd->RecupererListe();//retourne la liste des joueurs par classements
    $_SESSION["liste"] = $liste;
    header("Location: ".$server."vue/classement.php");
?>
