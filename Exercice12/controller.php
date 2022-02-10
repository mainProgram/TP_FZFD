<?php
    require_once("functions.php");
    session_start();
    extract($_POST); 
        
    if(isset($francais)){
        $_SESSION['francais'] = francais();
        header("location:index.html.php?nn=0");
    }       
    else if(isset($english)){
        $_SESSION['english'] = english();
        header("location:index.html.php?nn=1");
    }
    else
        header("location:index.html.php?nn=0");
        
    if(isset($suivant))
        header("Location:../Exercice13/index.html.php");
    if(isset($retour))
        header("Location:../Exercice11/index.html.php");
?>
