<?php
    require_once 'functions.php';
    extract($_POST);
    $_SESSION["envoi"]=$envoi;
    if(isset($envoi)){
        $cote = rand(1,1000);
        if(is_it_an_int_or_double($cote))
            header("Location:index.html.php?nn=".$cote);
        else
            header("Location:index.html.php?nn=0");
    }else
    header("Location:index.html.php?nn=0");

    if(isset($suivant)){
        header("Location:../Exercice2/index.html.php");
    }

?>