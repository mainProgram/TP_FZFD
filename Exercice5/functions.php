<!-- Point: Générer deux points puis calculer et afficher la distance entre les deux points.Un point est caractérisé par son abscisse et  son Ordonnée. -->

<?php

    function mes_points($absPointA, $absPointB, $ordPointA, $ordPointB){
        if(is_it_an_int_or_double($absPointA) && is_it_an_int_or_double($absPointB) && is_it_an_int_or_double($ordPointA) && is_it_an_int_or_double($ordPointB))
            echo '<h1>La distance entre A('.$absPointA.','.$ordPointA.') et B('.$absPointB.','.$ordPointB.') est de '.sqrt(pow(($absPointB - $absPointA),2) + pow(($ordPointB - $ordPointA),2)).".</h1>";
        else
            echo "<h1 class = 'error'>Donnée(s) incorrecte(s) !</h1>";
    }
    
    function is_it_an_int_or_double($cote){
        return 'integer' == gettype($cote) or 'double' == gettype($cote);
    }
?>