<?php
    require_once("functions.php");
    session_start();
    extract($_POST); 
    $_SESSION['N'] = $N; 
    $T = array(); // le grand tableau  sssociatif dont les clés premier, inferieur et superieurs sont elles aussi des tableaux
    $tabPremiers = array();   // tableau des nbrs premiers
    $tabInferieurs = array(); // tableau des nombres inférieurs à la moyenne
    $tabSuperieurs = array(); // tableau des nombres supérieurs à la moyenne
    
    if(isset($N) && isset($envoi) && is_numeric($N) && $N>10000) {
        for($i=1; $i<=$N; $i++){
            if(nombre_premier($i))
                $tabPremiers[]= $i;
        }
        
        $moyenne = moyenne($N);
        for($i=1; $i<=$N; $i++){
            if($i > $moyenne)
            $tabSuperieurs[]= $i;
            else if ($i < $moyenne)
            $tabInferieurs[]= $i;
        }
        
        $T['moyenne'] = $moyenne;  
        $T['premiers'] = $tabPremiers; 
        $T['inferieurs'] = $tabInferieurs; 
        $T['superieurs'] = $tabSuperieurs; 
        $_SESSION['T'] = $T;
        
        header("location:index.html.php");

    }else
        header("location:index.html.php?nn=0");

    if(isset($suivant))
        header("Location:../Exercice12/index.html.php");
    if(isset($retour))
        header("Location:../Exercice10/index.html.php");
?>


<?php
/*
    session_start();
    require_once("functions.php");
    extract($_POST); 
    $nn = 0;
    $_SESSION['N'] = $N; 
    $T = array();
    $_SESSION['premiers'] = array(); 
    $_SESSION['inferieurs'] = array(); 
    $_SESSION['superieurs'] = array(); 
    
    if(isset($N) && isset($envoi) && is_numeric($N) && $N>10000) {
        for($i=1; $i<=$N; $i++){
            if(nombre_premier($i))
                $tabPremiers[]= $i;
        }
        
        $moyenne = moyenne($N);
        for($i=1; $i<=$N; $i++){
            if($i > $moyenne)
            $tabSuperieurs[]= $i;
            else if ($i < $moyenne)
            $tabInferieurs[]= $i;
        }
        
        $_SESSION['moyenne'] = $moyenne;  
        $_SESSION['premiers'] = $tabPremiers; 
        $_SESSION['inferieurs'] = $tabInferieurs; 
        $_SESSION['superieurs'] = $tabSuperieurs; 
        
        header("location:index.html.php");

    }else{
        $nn = ($N>10000 && isset($N) && is_numeric($N)) ? 1 : 0;
        header("location:index.html.php?nn=".$nn);
    }
    ?>
    // for($i=1; $i<=$N; $i++){
    //            if(nombre_premier($i))
    //                $T[]= $i;
    //        }
    //        for($i=0; $i<count($T); $i++){
    //            echo $T[$i]."\t";
    //        }
*/?>