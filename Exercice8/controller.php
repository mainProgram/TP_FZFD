<?php
    session_start();
    extract($_POST); 
    $_SESSION['N'] = $N; 
    
    // SI tous est valide nn recoit 1 sinon il recoit 0 et on est redirigé à la page d'accueil
    $nn = isset($envoi) && isset($N) && is_numeric($N) && $N>0 && $N<651  ? 1 : 0;
     
    header("location:index.html.php?nn=".$nn);
    if(isset($suivant))
        header("Location:../Exercice9/index.html.php");
    if(isset($retour))
        header("Location:../Exercice7/index.html.php");
?>
    