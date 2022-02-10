<?php
    require_once("functions.php");
    session_start();
    extract($_POST); 
    $_SESSION['N'] = $N; 
       
    // Si le nombre de numéros N est correct
    if(isset($N) && isset($envoi) && is_numeric($N)) {
        header("location:index.html.php?nn=1");
    }
    // Si le bouton de soumission des numéros de téléphone est cliqué
    elseif(isset($soumettre)){
        $tabNumerosSaisis = divide(($numeros)); //Découpe le contenu du text area en numeros et stocke le dans un tableau
        if(count($tabNumerosSaisis)== $N){ //Si le nbr de numéro de téléphone saisi est egal au nombre de numéro de téléphone N
            for($i=0; $i < count($tabNumerosSaisis); $i++){
                // Vérifie toutes les numéros valides et fourre les dans un tableau
                if(is_num_valid($tabNumerosSaisis[$i]))
                    $tabNumerosCorrects[] = $tabNumerosSaisis[$i];
                // Vérifie toutes les numéros invalides et fourre les dans un tableau
                else
                    $tabNumerosIncorrects[] = $tabNumerosSaisis[$i];
            } 
            $_SESSION["tabNumerosSaisis"] = $tabNumerosSaisis;
            $_SESSION["tabNumerosCorrects"] = $tabNumerosCorrects;
            $_SESSION["tabNumerosIncorrects"] = $tabNumerosIncorrects;
            header("location:index.html.php?nn=2");
        }
        else{
            $_SESSION["nbNumerosIncorrect"] = "Le nombre de numéros de téléphone saisi est incorrect !";
            header("location:index.html.php?nn=3");
        }
    }else if(isset($suivant))
        header("Location:../Exercice15/index.html.php");
    else if(isset($retour))
        header("Location:../Exercice13/index.html.php");
    else
        header("location:index.html.php?nn=0");   
?>

