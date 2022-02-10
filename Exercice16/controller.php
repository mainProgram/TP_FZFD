<?php
    require_once("functions.php");
    session_start();
    extract($_POST); 
    $_SESSION['N'] = $N; 
       
    // Si la taille de la matrice est correcte
    if(isset($N) && isset($envoi) && is_numeric($N) && $N>4 && $N<=100) {
        header("location:index.html.php?nn=1");
    }
    //Si on clique sur le bouton dessiner
    elseif(isset($dessiner) && is_numeric($N) && $N>4 && $N<=100){
        $_SESSION["couleur"] = $couleurs;
        $_SESSION["position"] = $position;
        header("location:index.html.php?nn=2");
    }
    else
        header("location:index.html.php?nn=0");       
?>

