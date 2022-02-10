<?php
    require_once 'functions.php';
    extract($_POST);
    if(isset($envoi)){
        //La longueur doit etre > a la largeur
        $largeur = 1; $longueur = 0;
        while($longueur <= $largeur){
            $largeur = rand(1,20);
            $longueur = rand(1,20);
            header("Location:index.html.php?longueur=".$longueur."&largeur=".$largeur);
        } 
    }else       
        header("Location:index.html.php?nn=0");

    if(isset($suivant))
        header("Location:../Exercice3/index.html.php");
    if(isset($retour)){
        header("Location:../Exercice1/index.html.php");
    }
?>
