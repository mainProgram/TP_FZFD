<?php
    session_start();
    require_once 'functions.php';
    extract($_POST); 
    $_SESSION['jour'] = $jour; $_SESSION['mois'] = $mois; $_SESSION['an'] = $an;
    $_SESSION['suivante'] = ""; 
    $_SESSION['precedente'] = ""; 
    $jj = $mm = $aa = 0;

    // Si tous les paramètres sont valides retourne à la page d'accueil et on affiche les dates
    if(isset($jour) && isset($mois) && isset($an) && isset($envoi) && is_numeric($jour) && is_numeric($mois) && is_numeric($an) && date_valide_or_not($jour,$mois,$an)) {
        $_SESSION['suivante'] = date_suivante($jour,$mois,$an);
        $_SESSION['precedente'] = date_precedente($jour,$mois,$an);
        header("location:index.html.php");
    }
    // Sinon on vérifie ceux qui sont invalides et leur donnent leur la valeur 0 et retourne à la page d'accueil pour lui redemander de saisir les parametres invalides.
    else{
        $jj = ($jour==0 || is_numeric($jour)) && isset($jour) && ($jour>=1 && $jour<=nb_jours($mois,$an)) ? 1 : 0;
        $mm = ($mois==0 || is_numeric($mois)) && isset($mois) && ($mois>=1 && $mois<=12) ? 1 : 0;
        $aa =   ($an==0 || is_numeric($an))   && isset($an) && $an>=1563  ? 1 : 0;
        header("location:index.html.php?jj=".$jj."&mm=".$mm."&aa=".$aa);
    }
    if(isset($suivant))
        header("Location:../Exercice8/index.html.php");
    if(isset($retour))
        header("Location:../Exercice6/index.html.php");
?>
  