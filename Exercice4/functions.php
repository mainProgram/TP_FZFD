<!-- Générer deux nombres puis faire leur permutation.On affichera les deux nombres avant et après permutations. -->
<?php
    function swap($number1,$number2){
        if(is_it_an_int_or_double($number1) && is_it_an_int_or_double($number2)){
            echo '<h1>Avant permutation nombre1 = '.$number1.' et nombre2 = '.$number2.'</h1>';
            $swap = $number1;
            $number1 = $number2;
            $number2 = $swap;
            echo '<h1>Après permutation nombre1 = '.$number1.' et nombre2 = '.$number2."</h1>";
        }else{
            echo '<h1 class="error">Le nombre1 et/ou le nombre2 entré n\'est pas valide</h1>';
        }
    }
    function is_it_an_int_or_double($cote){
        return 'integer' == gettype($cote) or 'double' == gettype($cote);
    }
?>