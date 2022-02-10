<!-- Générer deux nombres puis calculer et afficher:
Somme - Exponentiel - Différence - Produit - Modulo - Division  - Carré -->
<?php
    function numbers($number1,$number2){
        if(is_it_an_int_or_double($number1) && is_it_an_int_or_double($number2)){
            $somme = $number1 + $number2;
            $exponentiel = pow($number1,$number2);
            $difference = $number1 - $number2;
            $produit = $number1 * $number2;
            echo '<h1>La somme de '.$number1.' et '.$number2.' est de '.$somme.".</h1>";
            echo '<h1>Le résultat de '.$number1.' à la puissance '.$number2.' est de '.$exponentiel.".</h1>";
            echo '<h1>La différence de '.$number1.' et '.$number2.' est de '.$difference.".</h1>";
            echo '<h1>Le produit de '.$number1.' et '.$number2.' est de '.$produit.".</h1>";
            if($number2==0)
                echo "<h1 class='error'>On ne peut diviser par 0.</h1>";
            else{
                $modulo = $number1 % $number2;
                echo '<h1>Le reste de la division de '.$number1.' par '.$number2.' est de '.$modulo.".</h1>";
            }
            if($number2==0)
                echo "<h1 class='error'>On ne peut diviser par 0.</h1>";
            else{
                $division = $number1 / $number2;
                echo '<h1>La division de '.$number1.' par '.$number2.' est de '.$division.".</h1>";
            }
        }else{
            echo '<h1 class="error">Le nombre1 et/ou le nombre2 entré n\'est pas valide !</h1>';
        }
    }

    function is_it_an_int_or_double($cote){
        return 'integer' == gettype($cote) or 'double' == gettype($cote);
    }

    // function exponetiel($x) {
    //     $inverse = false;
    //     $n = 0;
    //     $ex = 1;
    //     $i = 1;
    //     if($x<0) {
    //      $inverse = true;
    //      $x = -$x;
    //     }
    //     while($x >= 2) { 
    //         $x /= 2; 
    //         $n++; 
    //     }
    //     $x /= 16;
    //     $n += 4;
    //     $q = $x;
    //     while ($q > 1.0E-15) {
    //        $ex += $q;
    //        $i++;
    //        $q = $q*$x/$i;
    //     }
    //     for($i=1;$i<= $n; $i++) $ex=$ex*$ex;
    //     if($inverse) $ex = 1/$ex;
    //     return $ex;
    //    }
    // echo 'exp : '.exponetiel(2);
?>
