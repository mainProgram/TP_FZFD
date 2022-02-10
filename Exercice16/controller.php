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
        $_SESSION["color1"] = $color1;
        $_SESSION["color2"] = $color2;
        $_SESSION["color3"] = $color3;
        $_SESSION["color4"] = $color4;
        $_SESSION["color5"] = $color5;
        $_SESSION["color6"] = $color6;
        header("location:index.html.php?nn=2");
    }
    elseif(isset($retour))
        header("Location:../Exercice15/index.html.php");
    elseif(isset($suivant))
        header("Location:../accueil.html.php");
    else
        header("location:index.html.php?nn=0");   
?>

