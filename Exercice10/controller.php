<?php
    session_start();
    extract($_POST); 
    $_SESSION['N'] = $N; 
    // SI tous est valide nn recoit 1 sinon il recoit 0 et on est redirigé à la page d'accueil
    $nn =  isset($N) && isset($envoi) && is_numeric($N) && $N>0 && $N<11 ? 1 : 0;
     
    header("location:index.html.php?nn=".$nn);
?>
    