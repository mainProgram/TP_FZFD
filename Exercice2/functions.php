<!-- Exercice 2 :Générer  la longueur et la largeur  en utilisant la fonction rand() puis calculer et afficher le périmètre,la surface et la diagonale. -->

<?php
    function rectangle($longueur, $largeur){
        if(is_it_an_int_or_double($largeur) && is_it_an_int_or_double($longueur))
        {
            $perimetre = ($longueur + $largeur)*2;
            $surface = $longueur * $largeur;
            $diagonale = sqrt($longueur*$longueur + ($largeur*$largeur));
            echo '<h1>La longueur est de '.$longueur.'m.</h1>';
            echo '<h1>La largeur est de '.$largeur.'m.</h1>';
            echo '<h1>Le périmètre est de '.$perimetre.'m.</h1>';
            echo '<h1>La surface est de '.$surface.'m2.</h1>';
            echo '<h1>La diagonale est de '.$diagonale.'m.</h1>';
        }else{
            echo "<h1 class='error'>La longueur et/ou la largeur entrée n'est pas valide !</h1>";
        }
    }

    function is_it_an_int_or_double($cote){
        return 'integer' == gettype($cote) or 'double' == gettype($cote);
    }
   
?>