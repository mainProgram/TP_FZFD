<?php
    require_once("functions.php");
    session_start();
    extract($_POST); 
    $_SESSION['N'] = $N; 
       
    // Si le nombre de phrases est correct
    if(isset($N) && isset($envoi) && is_numeric($N)) { 
        header("location:index.html.php?nn=1");
    }
    // Si le bouton de soumission des phrases est cliqué
    elseif(isset($soumettre)){
        $tabPhrasesSaisies = divide($phrases); //Decoupe le contenu du text area en phrases et stocke le dans un tableau
        if(count($tabPhrasesSaisies)== $N){//Si le nbr de phrases saisies est egal au nombre de phrases N
            for($i=0; $i < count($tabPhrasesSaisies);$i++){
                // Vérifie toutes les phrases valides et fourre les dans un tableau
                if(is_string_a_sentence($tabPhrasesSaisies[$i]) && long_chaine($tabPhrasesSaisies[$i]) >= 25 && is_sentence_correct($tabPhrasesSaisies[$i])){
                    $tabPhrasesCorrectes[] = $tabPhrasesSaisies[$i];
                }
            }        
            $_SESSION["tabPhrasesCorrectes"] = $tabPhrasesCorrectes;
            $_SESSION["tabPhrasesSaisies"] = $tabPhrasesSaisies;
            header("location:index.html.php?nn=2");
        }
        else{
            $_SESSION["nbPhrasesIncorrect"] = "Le nombre de phrases saisies est incorrect !";
            header("location:index.html.php?nn=3");
        }
    }
    else{
        header("location:index.html.php?nn=0");
    }        
?>

