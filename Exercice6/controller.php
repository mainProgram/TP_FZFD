<?php
    require_once 'functions.php';
    session_start();
    extract($_POST); 
    $_SESSION['a'] = $a; $_SESSION['b'] = $b; $_SESSION['c'] = $c;
    $_SESSION['equation'] = ""; 
    $aa = $bb = $cc = 0;

    // Si tous les paramètres sont valides retourne à la page d'accueil et calcule l'equation
    //Mettre la condition avec 0 car is_numeric() ne l'accepte guère.
    if(isset($a) && isset($b) && isset($c) && isset($envoi) && ($a==0 || is_numeric($a)) && ($b==0 || is_numeric($b)) && ($c==0 || is_numeric($c))){
        $_SESSION['equation'] = equation_second_degre($a, $b, $c);
        header('location:index.html.php');
    }
    // Sinon vérifie a, b et c s'ils sont invalides donne leur la valeur 0 et retourne à la page d'accueil pour lui redemander de saisir les parametres invalides.
    else{
        $aa = ($a==0 || is_numeric($a)) && isset($a) ? 1 : 0;
        $bb = ($b==0 || is_numeric($b)) && isset($b) ? 1 : 0;
        $cc = ($c==0 || is_numeric($c)) && isset($c) ? 1 : 0;
        header("location:index.html.php?aa=".$aa."&bb=".$bb."&cc=".$cc);
    }
    // $a = (int) $a; var_dump($a);exit();
    if(isset($suivant)){
        header("Location:../Exercice7/index.html.php");
    }
    if(isset($retour)){
        header("Location:../Exercice5/index.html.php");
    }
?>
