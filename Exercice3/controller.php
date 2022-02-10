<?php
    require_once 'functions.php';
    extract($_POST);
    if(isset($envoi)){
        $nombre2 = rand(1,20);
        $nombre1 = rand(1,20);
        header("Location:index.html.php?nombre1=".$nombre1."&nombre2=".$nombre2);  
    }else       
        header("Location:index.html.php?nn=0");

    if(isset($suivant)){
        header("Location:../Exercice4/index.html.php");
    }
?>