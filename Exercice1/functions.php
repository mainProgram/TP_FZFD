<?php
// Générer le côté en utilisant la fonction rand() puis calculer et afficher le périmètre,la surface et la diagonale.

    function perimetre($cote){
        return $cote * 4;
    }

    function surface($cote){
        return $cote * $cote;
    }

    function diagonale($cote){
        return sqrt($cote*$cote + ($cote*$cote));
    }

    function is_it_an_int_or_double($cote){
        return 'integer' == gettype($cote) or 'double' == gettype($cote);
    }

?>